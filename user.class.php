<?
	header("Content-type:text/html;charset=utf-8");
	include_once 'helper.class.php';

	$helper = new Helper();
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
				Array[login, password, passwordConfirm, secondName, firstName, surName, email]
			*/
			$login = escape($params[0]) ?? NULL;
			$password = escape($params[1]) ?? NULL;
			$passwordConfirm = escape($params[2]) ?? NULL;
			$secondName = escape($params[3]) ?? NULL;
			$firstName = escape($params[4]) ?? NULL;
			$surName = escape($params[5]) ?? NULL;
			$email = escape($params[6]) ?? NULL;
			if(!$login || !$password || !$passwordConfirm || !$secondName || !$firstName || !$surName || !$email) 
				exit($helper->echoResponse("Введены не все данные!"));
			if($password != $passwordConfirm)
				exit($helper->echoResponse("Пароли не совпадают"));
			//q("INSERT INTO");
		}
	}