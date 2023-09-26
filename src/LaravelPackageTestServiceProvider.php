<?php

namespace Webmapp\LaravelPackageTest;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webmapp\LaravelPackageTest\Commands\LaravelPackageTestCommand;

class LaravelPackageTestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-test')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-package-test_table')
            ->hasCommand(LaravelPackageTestCommand::class);
    }
}
