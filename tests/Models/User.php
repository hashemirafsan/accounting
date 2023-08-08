<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Fma\Accounting\ModelTraits\AccountingJournal;

/**
 * Class User
 *
 * NOTE: This is only used for testing purposes.  It's not required for us
 *
 * @property    int                     $id
 * @property 	AccountingJournal		$journal
 *
 */
class User extends Model
{
	use AccountingJournal;
}


