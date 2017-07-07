<?php

class BrewPackageManager extends PackageManager {

	public function serves( $os ) {
		if ( in_array( $os, $this->get_supported_os() ) ) {
			return true;
		}
		return false;
	}

	public function install( $package ) {
		PackageManager::line( "Installing {$package} using HomeBrew..." );
	}

	public function update( $package ) {
		PackageManager::line( "Updating {$package} using HomeBrew..." );
	}

	public function remove( $package ) {
		PackageManager::line( "Removing {$package} using HomeBrew..." );
	}

	private function get_supported_os() {
		return array( 'mac', 'darwin' );
	}

}