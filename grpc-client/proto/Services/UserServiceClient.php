<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Services;

/**
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Services\UserInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Services\UserInfoResp
     */
    public function getUserInfo(\Services\UserInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/services.UserService/getUserInfo',
        $argument,
        ['\Services\UserInfoResp', 'decode'],
        $metadata, $options);
    }

}
