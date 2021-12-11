<?php

namespace Hinaloe\LineNotify\Exceptions;

class CouldNotSendNotificationException extends \Exception
{
    public static function serviceRespondedWithAnError($response)
    {
        return new static('Line Notify responded with an error: `'.$response->getBody()->getContents().'`');
    }
}