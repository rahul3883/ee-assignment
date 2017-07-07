<?php

class PKGPackageManager extends PackageManager {

	public function serves( $os ) {
		if ( in_array( $os, $this->get_supported_os() ) ) {
			return true;
		}
		return false;
	}

	public function install( $package ) {
		PackageManager::line( "Installing {$package} using PKG..." );
	}

	public function update( $package ) {
		PackageManager::line( "Updating {$package} using PKG..." );
	}

	public function remove( $package ) {
		PackageManager::line( "Removing {$package} using PKG..." );
	}

	private function get_supported_os() {
		return array( 'freebds' );
	}

}