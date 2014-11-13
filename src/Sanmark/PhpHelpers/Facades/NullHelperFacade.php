<?php

namespace Sanmark\PhpHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class NullHelperFacade extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'Sanmark\PhpHelpers\NullHelper';
	}
}