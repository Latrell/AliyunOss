<?php
namespace Latrell\AliyunOss;

use Illuminate\Support\ServiceProvider;
use OSS\OssClient;

class AliyunOssServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->handleConfigs();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('aliyun.oss', function ($app) {
			$config = $app->config->get('latrell-aliyun-oss');
			$access_key_id = array_get($config, 'access_key_id', '');
			$access_key_secret = array_get($config, 'access_key_secret', '');
			$endpoint = array_get($config, 'endpoint', '');
			$is_cname = array_get($config, 'is_cname', false);
			$security_token = array_get($config, 'security_token', null);
			return new OssClient($access_key_id, $access_key_secret, $endpoint, $is_cname, $security_token);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'aliyun.oss'
		];
	}

	private function handleConfigs()
	{
		$configPath = __DIR__ . '/../config/latrell-aliyun-oss.php';

		$this->publishes([
			$configPath => config_path('latrell-aliyun-oss.php')
		]);

		$this->mergeConfigFrom($configPath, 'latrell-aliyun-oss');
	}
}
