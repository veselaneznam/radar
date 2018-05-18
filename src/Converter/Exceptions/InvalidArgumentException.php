<?php
/**
 * Created by PhpStorm.
 * User: Vesela.Ferdinandova
 * Date: 5/18/2018
 * Time: 3:35 PM
 */

namespace App\Converter\Exceptions;


class InvalidArgumentException extends \Exception
{
    public function __construct(string $message = "")
    {
        parent::__construct($message, 400);
    }
}