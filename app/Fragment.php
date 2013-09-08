<?php

class Fragment {
	
	public $baseDir;

	function __construct() {}

	public function getContents( $path ) {
		if ( empty( $path ) ) return 0;
		return file_get_contents( $path );
	}
}
