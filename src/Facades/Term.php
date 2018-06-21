<?php

namespace WPRaise\Facades;

use WPEmerge\Support\Facade;

/**
 * Provide access to the term service
 *
 * @codeCoverageIgnore
 */
class Term extends Facade {
	protected static function getFacadeAccessor() {
		return 'wpraise.term.term';
	}
}
