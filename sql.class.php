<?
	header("Content-type:text/html;charset=utf-8");
	class SQL {

		public $mysqli;

		function __construct(){
			$mysqli = new mysqli("localhost", "USER", "PASSWORD", "TABLE");
			$mysqli->set_charset("utf8");
			$this->mysqli = $mysqli;
		}
		function connect(){
			$mysqli = new mysqli("localhost", "USER", "PASSWORD", "TABLE");
			$mysqli->set_charset("utf8");
			$this->mysqli = $mysqli;
		}
		function q($q, $returnedId = 0){
			$this->connect();
			$mysqli = $this->mysqli;
			$mysqli->query("SET NAMES UTF8");
			$response = $mysqli->query($q);
			$data = [];
			if(gettype($response) != "boolean")
				while($result = $response->fetch_assoc())
					$data[] = $result;
			if($returnedId)
				$data['returnedId'] = $mysqli->insert_id;
			$mysqli->close();
			return $data;
		}

	}

?>