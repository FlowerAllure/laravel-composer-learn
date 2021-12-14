<?php


namespace Flowerallure\LaravelComposerLearn;

use Illuminate\Support\ServiceProvider;

class LearnProvider extends ServiceProvider
{
    public function boot()
    {
        if (!file_exists(config_path('learn.php'))) {
            $this->publishes([
                dirname(__DIR__) . '/src/config/learn.php' => config_path('learn.php'),
            ], 'config');
        } else {
            echo "learn.php has exist";
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/learn.php', 'learn'
        );
    }
}
