<?php

namespace Meetjet\LaravelMenu\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Meetjet\LaravelMenu\LaravelMenuServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Meetjet\\LaravelMenu\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelMenuServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-menu_table.php.stub';
        $migration->up();
        */
    }
}
