<?php

namespace Hinaloe\LineNotify\Exceptions;

class RouteNotificationForException extends \Exception
{
    public static function methodHasNotBeenAnnounced()
    {
        return new static('In order to let your Notification know which Line notify token you are targeting, add the routeNotificationForLine method to your Notifiable model.');
    }
}