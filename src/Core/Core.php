<?php

namespace WPRaise\Theme;

use WPEmerge;
use WPEmerge\Facades\Framework;
use WPRaise\Term\TermServiceProvider;

class Core {
	/**
	 * Flag whether the core has been booted.
	 *
	 * @var boolean
	 */
	protected $booted = false;

	/**
	 * Array of service providers
	 *
	 * @var string[]
	 */
	protected $service_providers = [
		TermServiceProvider::class,
	];

	/**
	 * Get whether the theme has been booted.
	 *
	 * @return boolean
	 */
	public function isBooted() {
		return $this->booted;
	}

	/**
	 * Bootstrap WPEmerge.
	 *
	 * @param  array $config
	 * @return void
	 */
	protected function bootFramework( $config ) {
		if ( ! isset( $config['providers'] ) ) {
			$config['providers'] = [];
		}

		$config['providers'] = array_merge(
			$config['providers'],
			$this->service_providers
		);

		Framework::boot( $config );
	}

	/**
	 * Bootstrap the core.
	 *
	 * @param  array     $config
	 * @throws Exception
	 * @return void
	 */
	public function boot( $config = [] ) {
		if ( $this->isBooted() ) {
			throw new Exception( static::class . ' already booted.' );
		}

		do_action( 'wpraise.booting' );

		$this->bootFramework( $config );

		$this->booted = true;

		do_action( 'wpraise.booted' );
	}
}
