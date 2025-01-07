<?php
require 'classes/connect.php';
class process extends connection{
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
    public function login_process(){
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
       
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $user = $stmt->fetch();
            if($user){
                if(password_verify($password, $user['password'])){
                    echo '<script>alert("Login successful")</script>';
                }else{
                    echo '<script>alert("Invalid password")</script>';
                }
            }
        }
    }

}