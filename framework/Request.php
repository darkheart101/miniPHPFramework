<?php

namespace Framework;

class Request{

    protected $http_method;
    protected $server_name;
    protected $request_uri;
    protected $post_data;

    public function __construct()
    {
        $this->http_method = $_SERVER['REQUEST_METHOD'];
        $this->server_name = $_SERVER['SERVER_NAME'];
        $this->request_uri = $_SERVER['REQUEST_URI'];
        $this->post_data = $_POST;
    }

    public function method()
    {
        return $this->http_method;
    }

    public function input()
    {
        return $this->post_data;
    }

    public function request_uri()
    {
        return $this->request_uri;
    }

    public function server_name()
    {
        return $this->server_name;
    }
}