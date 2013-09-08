<?php

include "app/Fragment.php";

header( 'content-type: application/json; charset=utf-8' );
$frag = new Fragment( );

$url = $_GET['url'];

$html = $frag->getContents( $url );
$html = str_replace( '"', "'", $html );
$obj = array(
	'html' => $html 
);

echo $_GET['callback'].'('.json_encode( $obj ).')';
