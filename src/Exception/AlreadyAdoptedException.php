<?php

namespace App\Exception;

use Exception;

class AlreadyAdoptedException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}
