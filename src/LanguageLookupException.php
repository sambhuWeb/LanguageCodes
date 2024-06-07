<?php

namespace Elt\LanguageCodes;

use Exception;
use Throwable;

class LanguageLookupException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
