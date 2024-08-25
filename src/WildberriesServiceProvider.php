<?php

declare(strict_types=1);

namespace Everully\LaravelWildberriesSdk;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WildberriesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-wildberries-sdk')
            ->hasConfigFile('wildberries')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('everully/laravel-wildberries-sdk')
                    ->endWith(callable: function (InstallCommand $command) {
                        $command->info(string: 'Congratulation! You added your config file and you are ready to go. Happy coding!');
                    });
            });
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(
            WildberriesApiService::class,
            fn() => new WildberriesApiService(
                token: config('wildberries.token'),
                sandbox: config('wildberries.sandbox'),
            ),
        );
    }
}
