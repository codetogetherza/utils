<?php

class FlashMessage {

	static public function talk($message) {

		$_SESSION['flash_message'] = $message;

	}

	static public function mute() {

		unset($_SESSION['flash_message']);

	}

	static public function listen() {

		echo $_SESSION['flash_message'];

		self::mute();

	}

	static public function ask() {

		return $_SESSION['flash_message'];

	}
	
}
