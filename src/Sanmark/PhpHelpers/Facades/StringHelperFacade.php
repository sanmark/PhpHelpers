<?php

namespace Sanmark\PhpHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class StringHelperFacade extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'Sanmark\PhpHelpers\StringHelper';
	}
}