<?php
/**
 * Session
 */
class Session
{
	public static $storage = array();

	public static function init() {
		// Initialize the session
		if (!self::isStarted()) 
		{
		   session_start();
		}

		//echo "<pre>";
		//var_dump($_SESSION);
		//echo "</pre>";
	}

	public static function isStarted() {
		return session_id();
	}

	public static function get($key) {
		if ( isset( $_SESSION[$key] ) ) {
			return $_SESSION[$key];
		}

		return false;
	}

	public static function set($key, $item) {
		$_SESSION[$key] = $item;
	}

	public static function delete($key) {
		if ( isset($_SESSION[$key])) {
			unset($_SESSION[$key]);
		}
	}

	public static function update($key) {
	}

	public static function destroy() {
		$_SESSION = array();
		 
		// Destroy the session.
		session_destroy();
	}
}

Session::init();
