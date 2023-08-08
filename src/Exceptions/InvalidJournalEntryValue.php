<?php

declare(strict_types=1);

namespace Fma\Accounting\Exceptions;

class InvalidJournalEntryValue extends BaseException
{
    public $message = 'Journal transaction entries must be a positive value';
}
