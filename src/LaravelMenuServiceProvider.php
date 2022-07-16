<?php

namespace Meetjet\LaravelMenu;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Inertia\Inertia;
use Meetjet\LaravelMenu\Commands\LaravelMenuCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMenuServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-menu')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-menu_table')
            ->hasCommand(LaravelMenuCommand::class);
    }
}
