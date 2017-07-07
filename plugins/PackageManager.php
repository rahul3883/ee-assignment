<?php

abstract class PackageManager {

	private static $instance;

	abstract public function serves( $os );
	abstract public function install( $package );
	abstract public function update( $package );
	abstract public function remove( $package );

	public static function get_instance( $os ) {
		if ( ! isset( self::$instance ) ) {
			self::$instance = PackageManager::get_manager( $os );
		}
		return self::$instance;
	}

	public static function load_plugins() {
		$plugin_dir = get_plugin_dir();

		foreach ( scandir( $plugin_dir ) as $file ) {
			if ( ! is_dir( $file ) ) {
				$file_path = $plugin_dir . '/' . $file;

				if ( 'php' === get_file_extension( $file_path ) ) {
					require_once $file_path;
				}
			}
		}

	}

	public static function get_manager( $os ) {

		if ( empty( $os ) ) {
			$os = self::get_current_os();
		}

		$os = strtolower( $os );

		$managers = self::managers_in( get_plugin_dir() );

		foreach ( $managers as $manager ) {
			$obj = new $manager;

			if ( $obj->serves( $os ) ) {
				$instance = $obj;
				return $instance;
			}
		}

		return false;

	}

	private static function managers_in( $dir ) {
		$managers = [];

		if ( ! is_dir( $dir ) ) {
			return $managers;
		}

		$exclude_files = array( 'PackageManager.php', 'DefaultPackageManager.php' );

		foreach ( scandir( $dir ) as $file ) {
			$file_path = $dir . '/' . $file;

			if ( ! in_array( $file, $exclude_files ) && self::is_package_manager( $file_path ) ) {
				$managers[] = basename( $file, '.php' );
			}
		}

		$managers[] = 'DefaultPackageManager';

		return $managers;
	}

	private static function is_package_manager( $file ) {
		return ! is_dir( $file ) && 'php' === get_file_extension( $file ) && false !== strpos( $file, 'PackageManager' );
	}

	private static function get_current_os() {
		return php_uname( 's' );
	}

}