<?php

namespace Gegosoft\Zcash\Exceptions;

use RuntimeException;

class ZcashdException extends RuntimeException
{
    /**
     * Construct new zcashd exception.
     *
     * @param object $error
     *
     * @return void
     */
    public function __construct($error)
    {
        parent::__construct($error['message'], $error['code']);
    }
}
