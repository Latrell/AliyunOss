<?php
return [

	// 【必填】从OSS获得的AccessKeyId。
	'access_key_id' => '',
	// 【必填】从OSS获得的AccessKeySecret。
	'access_key_secret' => '',
	// 【必填】您选定的OSS数据中心访问域名，例如oss-cn-hangzhou.aliyuncs.com
	'endpoint' => '',

	// 是否对Bucket做了域名绑定，并且Endpoint参数填写的是自己的域名。
	'is_cname' => false,
	// 如果使用了阿里云SecurityTokenService(STS)，获得了AccessKeyID, AccessKeySecret, Token，则配置此token。
	'security_token' => null
];