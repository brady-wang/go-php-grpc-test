<?php
//引入 composer 的自动载加
include "vendor/autoload.php";

// 用于连接 服务端
$client = new \Services\UserServiceClient('192.168.33.50:8081', [
	'credentials' => Grpc\ChannelCredentials::createInsecure()
]);


// 实例化 GetUserRequest 请求类
$request = new \Services\UserInfoReq();
$request->setId(55);


//调用远程服务
$get = $client->getUserInfo($request)->wait();

list($reply, $status) = $get;


var_dump($reply->Name,$reply->Id);
