<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Signup extends Dbh {

    protected function setUser($firstname, $lastname, $pwd, $uid) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_firstname, users_lastname, users_pwd, users_uid) VALUES (?, ?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($firstname, $lastname, $hashedPwd, $uid))) {
            $stmt = null;            
            header("location: ../register.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
        
    }

    protected function checkUser($uid) {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ?;');
        
        if(!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: ../register.php?error=stmtfailed");
            exit();
        }
        
        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
        
    }

}
