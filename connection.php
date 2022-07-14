<?php

$dsn = "mysql:host=localhost;dbname=crud_sr";
$user = 'root';
$pass = '';

try {

    $db = new PDO($dsn, $user, $pass); // connexion avec le serveur

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "connect";
} catch (PDOException $e) {

    echo "ERROR" . $e->getMessage();
}

// Class Connection{
 
// 	private $server = "mysql:host=localhost;dbname=crud_sr";
// 	private $username = "root";
// 	private $password = "";
// 	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
// 	protected $conn;
 	
// 	public function open(){
//  		try{
//  			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
//  			return $this->conn;
//  		}
//  		catch (PDOException $e){
//  			echo "There is some problem in connection: " . $e->getMessage();
//  		}
 
//     }
 
// 	public function close(){
//    		$this->conn = null;
//  	}
 
// }
 
?>