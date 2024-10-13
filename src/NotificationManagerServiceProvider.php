<?php

namespace HossamTarek\NotificationManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use HossamTarek\NotificationManager\Commands\NotificationManagerCommand;

class NotificationManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-notification-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_notification_manager_table')
            ->hasCommand(NotificationManagerCommand::class);
    }
}
