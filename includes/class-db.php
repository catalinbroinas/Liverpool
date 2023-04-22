<?php
/**
 * Database
 */
class Db
{
	public $connection = null;

	protected static $_instance = null;

	public static function instance()
	{
		if (is_null(self::$_instance)) {
			self::$_instance = new Db();
		}

		return self::$_instance;
	}

	public function __construct()
	{
		// Create connection
		$this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		// Check connection
		if ($this->connection->connect_error) 
		{
			die("Connection failed: " . $this->connection->connect_error);
		}
	}

	public static function select($data)
	{
	}

	public static function insert($data)
	{
	}
}

function Db()
{
	return Db::instance();
}

$db = Db()->connection;
