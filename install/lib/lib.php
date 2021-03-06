<?php
/**
 * waggo6
 * @copyright 2013-2020 CIEL, K.K., project waggo.
 * @license MIT
 */

function detect_waggo_version()
{
	$cs = file( __DIR__ . '/../../waggo.php' );
	foreach($cs as $c) if(preg_match('/^\s*define/',$c)) eval($c);
	return array(
		"version"		=>	WG_VERSION,
		"name"			=>	WG_NAME,
		"copyright"		=>	WG_COPYRIGHT
	);
}
