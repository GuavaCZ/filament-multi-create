<?php

namespace Guava\FilamentMultiCreate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Guava\FilamentMultiCreate\Commands\FilamentMultiCreateCommand;

class FilamentMultiCreateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-multi-create')
            ->hasConfigFile()
        ;
    }
}
