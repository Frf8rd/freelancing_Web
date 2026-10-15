<?php
require_once __DIR__ . "/../../config/config.php";


class Database {
	private PDO $pdo;

	public function __construct(){

		try {
			$this -> pdo = new PDO(
				DATABASE_URL
			);
			$this -> pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			die("Eroare conectare DB: " . $e->getMessage());
		}
	}

	public function getConnection(){
		return $this -> pdo;
	}

};