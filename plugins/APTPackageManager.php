<?php

class APTPackageManager extends PackageManager {

	public function serves( $os ) {
		if ( in_array( $os, $this->get_supported_os() ) ) {
			return true;
		}
		return false;
	}

	public function install( $package ) {
		PackageManager::line( "Installing {$package} using APT..." );
	}

	public function update( $package ) {
		PackageManager::line( "Updating {$package} using APT..." );
	}

	public function remove( $package ) {
		PackageManager::line( "Removing {$package} using APT..." );
	}

	private function get_supported_os() {
		return array( 'linux', 'os1' );
	}

}