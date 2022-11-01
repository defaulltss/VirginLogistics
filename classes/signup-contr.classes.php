<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class SignupContr extends Signup {

    private $firstname;
    private $lastname;
    private $pwd;
    private $pwdRepeat;
    private $uid;

    public function __construct($firstname, $lastname, $pwd, $pwdRepeat, $uid) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->uid = $uid;
    }

    public function signupUser() {
        // if($this->invalidUid() == false){
        //     // echo "Invalid username!"
        //     header("Location: ../register.php?error=username");
        //     exit();
        // }
        if($this->invalidEmail() == false){
            // echo "Invalid Email!"
            header("Location: ../register.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            // echo "Passwords don't match!"
            header("Location: ../register.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            // echo "Username or email taken!"
            header("Location: ../register.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->firstname, $this->lastname, $this->pwd, $this->uid);
    }

    // private function invalidUid()
    // {
    //     $result;
    //     if(!preg_match("/^[a-zA-Z0-9]*$/",$this->firstname))
    //     {
    //         $result = false;
    //     }
    //     else
    //     {
    //         $result = true;
    //     }
    //     return $result;
    // }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->uid, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    private function pwdMatch() {
        $result;
        if($this->pwd !== $this->pwdRepeat)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    private function uidTakenCheck() {
        $result;
        if(!$this->checkUser($this->firstname, $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}

?>