<?php

class DefaultPackageManager extends PackageManager {

	public function serves( $os ) {
		return true;
	}

	public function install( $package ) {
		PackageManager::line( "Can't Install {$package}, Package Manager is not available for this OS." );
	}

	public function update( $package ) {
		PackageManager::line( "Can't Update {$package}, Package Manager is not available for this OS." );
	}

	public function remove( $package ) {
		PackageManager::line( "Can't Remove {$package}, Package Manager is not available for this OS." );
	}

}