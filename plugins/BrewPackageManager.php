<?php

class BrewPackageManager extends PackageManager {

	public function serves( $os ) {
		if ( in_array( $os, $this->get_supported_os() ) ) {
			return true;
		}
		return false;
	}

	public function install( $package ) {
		echo "Installing {$package} using HomeBrew...\n";
	}

	public function update( $package ) {
		echo "Updating {$package} using HomeBrew...\n";
	}

	public function remove( $package ) {
		echo "Removing {$package} using HomeBrew...\n";
	}

	private function get_supported_os() {
		return array( 'mac', 'darwin' );
	}

}