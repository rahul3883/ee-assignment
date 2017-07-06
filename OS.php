<?php

class OS {

	private static $instance;
	protected static $name;

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = OS::get_os();
		}
		return self::$instance;
	}

	private function get_os() {
		$os = php_uname('s');

		if ( file_exists( "{$os}.php" ) ) {
			return new $os;
		} else {
			return new OS();
		}
	}

	private function __construct() {
		self::$name = 'Default';
	}

	public function name() {
		echo self::$name;
	}

}

function __autoload( $class ) {
	if ( file_exists( "{$class}.php" ) ) {
		require_once "{$class}.php";
	}
}

$a = OS::get_instance();
$a->name();

?>