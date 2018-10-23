<?php
function my_hash_crypt($string,$action = 'e'){
	$mykey = 'acb04b7e103a0cd8b54763051ceadce555abe029fdebae5e1d417e2ffb2a00a3';
	$myiv = '31316b6747424e';
	$output = false;
	$encrypt_method = "AES-256-CBC";
	$key = hash('sha256',$mykey);
	$iv = substr(hash('sha256',$myiv),0,16);
	if( $action == 'e' ){
		$output = base64_encode(openssl_encrypt($string,$encrypt_method,$key,0,$iv));
	}else if( $action == 'd' ){
		$output = openssl_decrypt(base64_decode($string),$encrypt_method,$key,0,$iv);
	}
	return $output;
}
?>
