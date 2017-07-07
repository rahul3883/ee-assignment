<?php

class DefaultPackageManager extends PackageManager {

	public function serves( $os ) {
		return true;
	}

	public function install( $package ) {
		echo "Can't Install {$package}, Package Manager is not available for this OS.\n";
	}

	public function update( $package ) {
		echo "Can't Update {$package}, Package Manager is not available for this OS.\n";
	}

	public function remove( $package ) {
		echo "Can't Remove {$package}, Package Manager is not available for this OS.\n";
	}

}