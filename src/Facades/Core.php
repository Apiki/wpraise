<?php

namespace WPRaise\Facades;

use WPEmerge\Support\Facade;

/**
 * Provide access to the framework instance.
 *
 * @codeCoverageIgnore
 */
class Core extends Facade {
	protected static function getFacadeAccessor() {
		return 'wpraise';
	}
}
