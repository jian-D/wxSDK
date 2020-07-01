<?php
namespace Fxc\WxSdk;

use Illuminate\Support\ServiceProvider;

class wxProvider extends ServiceProvider
{
    public function boot()
    {
        // 复制自定义的文件到config目录
        if (!file_exists(config_path('wx.php'))) {
            $this->publishes([
                dirname(__DIR__) . '/config/wx.php' => config_path('wx.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/wx.php', 'wx'
        );
    }
}