<?php


namespace Flowerallure\LaravelComposerLearn;


class Learn
{
    protected $config = [];

    public function __construct()
    {
        $configs = config('learn', []);
    }

    public function surpriseMe($name)
    {
        echo $name, ", u're awesome.";
    }
}
