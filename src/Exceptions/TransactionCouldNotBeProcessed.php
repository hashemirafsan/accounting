<?php

declare(strict_types=1);

namespace Fma\Accounting\Exceptions;

class TransactionCouldNotBeProcessed extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct('Double Entry Transaction could not be processed. ' . $message);
    }
}
