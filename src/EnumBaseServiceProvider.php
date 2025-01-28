<?php
namespace omaradel\Enum;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class EnumBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishResources();
    }

    private function publishResources()
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang'),
        ], 'enum-langs');
    }
}