<?php

function get_base_dir() {
	return EE_BASE;
}

function get_plugin_dir() {
	return EE_BASE . '/plugins';
}

function get_file_extension( $file ) {
	return pathinfo( $file, PATHINFO_EXTENSION );
}