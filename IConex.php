<?php

interface IConex{

	const DB = "pgsql";
	const DB_NAME = "sispol";
	const DB_HOST = "localhost";
	const DB_USER = "postgres";
	const DB_PASS = "postgres";
	const DB_PORT = "5432";

	public static function doConnect();
	
}

?>
