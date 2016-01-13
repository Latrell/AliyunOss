<?php
namespace Latrell\AliyunOss\Facades;

use Illuminate\Support\Facades\Facade;

class AliyunOss extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'aliyun.oss';
	}
}