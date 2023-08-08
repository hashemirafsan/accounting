<?php

declare(strict_types=1);

namespace Fma\Accounting\Exceptions;

class JournalAlreadyExists extends BaseException
{
    public $message = 'Journal already exists.';
}
