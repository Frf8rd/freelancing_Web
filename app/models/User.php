<?php

class User
{
	private PDO $pdo;

	public function __construct(PDO $pdo){
		$this -> pdo = $pdo;
	}

	public function CreateUser (string $email, string $password){

		$stmt = $this -> pdo -> prepare(
			"INSERT INTO User (email, password) VALUES(:email, :password)"
		);

		$stmt -> execute([
			'email' => $email,
			'password' => $password
		]);
	}
	
}