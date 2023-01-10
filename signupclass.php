<?php
class RegisterUser{
    // Class properties
    private $email;
    private $raw_password;
    private $encrypted_password;
    public $error;
    public $success;
    private $storage = "login.json";
    private $stored_users;
    private $new_user; // array


    public function __construct($email, $password){

        $this->email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
        $this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
        $this->encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
        $this->new_user = [
            "email" => $this->email,
            "password" => $this->encrypted_password
        ];

        if($this->checkFieldValues()){
             $this->insertUser();
        }
    }

    private function checkFieldValues(){
        if(empty($this->email) || empty($this->raw_password)){
            $this->error = "Both fields are required.";
            return false;
        }
        else{
            return true;
        }
    }


    private function usernameExists(){
        if(!isset($this->stored_users) ){
            $this->stored_users = [];
        }
        foreach($this->stored_users as $user){
            if($this->email == $user['email']){
                $this->error = "Email already taken, please choose a different one.";
                return true;
            }
        }
    }


    private function insertUser(){
        if($this->usernameExists() == FALSE){
            array_push($this->stored_users, $this->new_user);
            if(file_put_contents('login.json', json_encode($this->stored_users, JSON_PRETTY_PRINT))){
                return $this->success = "Your registration was successful";
            }
            else{
                return $this->error = "Something went wrong, please try again";
            }
        }
    }



} // end of class