<?php

namespace HossamTarek\NotificationManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HossamTarek\NotificationManager\NotificationManager
 */
class NotificationManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HossamTarek\NotificationManager\NotificationManager::class;
    }
}
