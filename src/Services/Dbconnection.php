<?php
namespace App\Services;
use \PDO;
use \PDOException;

class Dbconnection{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='fouDeSeries=';   		
      	private static $user='brady' ;    		
      	private static $mdp='P@ssw0rd' ;	
		private static $monPdo= null;

	
private function __construct(){
	}

	public  static function getPdoJo(){
		if(is_null (Dbconnection::$monPdo)) {
			try{
				Dbconnection::$monPdo = new PDO(Dbconnection::$serveur.';port=3307;'.Dbconnection::$bdd, Dbconnection::$user, Dbconnection::$mdp); 
				Dbconnection::$monPdo->query("SET CHARACTER SET utf8");
				Dbconnection::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			   }
			catch (PDOException $e)
			{
				die($e->getMessage());
			}
			}		
		return Dbconnection::$monPdo;  
	}
}
?>
