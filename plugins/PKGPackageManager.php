<?php

class PKGPackageManager extends PackageManager {

	public function serves( $os ) {
		if ( in_array( $os, $this->get_supported_os() ) ) {
			return true;
		}
		return false;
	}

	public function install( $package ) {
		echo "Installing {$package} using PKG...\n";
	}

	public function update( $package ) {
		echo "Updating {$package} using PKG...\n";
	}

	public function remove( $package ) {
		echo "Removing {$package} using PKG...\n";
	}

	private function get_supported_os() {
		return array( 'freebds' );
	}

}