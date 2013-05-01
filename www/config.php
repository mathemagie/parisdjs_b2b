<?php
	error_reporting(E_ALL ^ E_NOTICE);
	ini_set('display_errors','1');

	function is_media() {
		if ($_COOKIE['profil'] == 'media') return 1;
		return 0;
	}

	function is_revendeur() {
		if ($_COOKIE['profil'] == 'revendeur') return 1;
		return 0;
	}

?>