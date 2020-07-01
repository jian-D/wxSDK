<?php
namespace Fxc\WxSdk;

class Wx
{
    protected $config = [];

    public function __construct()
    {
        $this->initConfig();
    }

    public function initConfig()
    {
        $configs = config('wx', []);
    }

    public function surpriseMe($name){
        echo $name, ", u're awesome.";
    }

}