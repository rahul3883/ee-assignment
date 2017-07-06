<?php

class Darwin extends OS {

	public function __construct() {

		self::$name = 'Darwin';

	}

	public function install() {
		echo 'Installing packages for ' . self::$name;
	}

	public function remove() {
		echo 'Removing packages for ' . self::$name;
	}

}

?>