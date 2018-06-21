<?php

use WPRaise\Facades\Core as CoreFacade;
use WPRaise\Core\Core;
use WPEmerge\Facades\Framework;

// @codeCoverageIgnoreStart
$container = Framework::getContainer();
$container['wpraise'] = function() {
	return new Core();
};
Framework::facade( 'WPRaise', CoreFacade::class );
// @codeCoverageIgnoreEnd
