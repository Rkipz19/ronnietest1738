<?php

class process{
    public function signup_process(){
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users (firstname, lastname, email, password, verification_code,email_verified_at) VALUES ( '$firstname', '$lastname', '$email', '$encrypted_password', '$verification_code',NULL)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
        }
    }
}