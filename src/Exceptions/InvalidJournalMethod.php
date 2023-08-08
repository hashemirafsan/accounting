<?php

declare(strict_types=1);

namespace Fma\Accounting\Exceptions;

class InvalidJournalMethod extends BaseException
{
    public $message = 'Journal methods must be credit or debit';
}
