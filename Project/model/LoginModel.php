<?php
/**
 * Created by PhpStorm.
 * User: Seraphin
 * Date: 14.03.2016
 * Time: 19:04
 */
/**
 * Model für die Anmeldung
 */
class LoginModel
{
    public function load(string $username)
    {
		if($username == "test"){
			
			$stmt = [
				"password" => "SecurePW",
				"username" => "test",
			];
			
			return $stmt;
		}
    }
}