<?php
/**
 * Messages
 */
class Messages
{
	public static $messages = array();

	public static function setMessage($code, $message, $clearMessages = false) 
	{
		if ($clearMessages) {
			self::clearMessages();
		}

		self::$messages = ( Session::get('messages') ) ? Session::get('messages') : array();
		self::$messages[] = array(
			'code'    => $code,
			'message' => $message
		);

		Session::set('messages', self::$messages);
	}

	public static function getMessages() 
	{
		return (Session::get('messages')) ? Session::get('messages') : array();
	}

	public static function clearMessages() 
	{
		if ( Session::get('messages') ) {
			Session::set('messages', array());
		}
	}
}
