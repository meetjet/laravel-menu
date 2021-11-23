<?php

namespace Meetjet\LaravelMenu;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Meetjet\LaravelMenu\Commands\LaravelMenuCommand;

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
