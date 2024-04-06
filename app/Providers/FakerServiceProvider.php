<?php

namespace App\Providers;

use Faker\{Factory, Generator};
use Illuminate\Support\ServiceProvider;
use App\Faker\FrameworkProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
//    public function register(): void
//    {
//        $this->app->singleton(Generator::class, function () {
//            $faker = Factory::create();
//
//            $faker->addProvider(new \App\Providers\Faker\CustomDataProvider($faker));
//
//            return $faker;
//        });
//    }

    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();

            $faker->addProvider(new \App\Providers\Faker\CustomDataProvider($faker));

            return $faker;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
