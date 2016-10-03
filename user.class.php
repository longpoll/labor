<?
	header("Content-type:text/html;charset=utf-8");
	include_once 'helper.class.php';
	/**
	* 
	*/
	class User extends SQL
	{
		
		function __construct() {
			connect();
		}
		
		function login($params) {
			/*
				Array[login, password]
			*/

		}

		function registration($params) {
			/*
				Array[login, password, passwordConfirm, lastName, firstName, surName]
			*/
			$login = escape($params[0]) ?? NULL;
			$password = escape($params[1]) ?? NULL;
			$passwordConfirm = escape($params[2]) ?? NULL;
			$lastName = escape($params[3]) ?? NULL;
			$firstName = escape($params[4]) ?? NULL;
			$surName = escape($params[5]) ?? NULL;
			if(($password != $passwordConfirm) || !$password || !$passwordConfirm) 
				return 
		}
	}