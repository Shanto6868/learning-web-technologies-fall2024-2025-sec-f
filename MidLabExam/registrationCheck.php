<?php
    session_start();


    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = []; 
    }

    if (isset($_POST['submit'])) {

        $name = trim($_REQUEST['name']);
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);
        $email = trim($_REQUEST['email']);
        $gender = trim($_REQUEST['gender']);

        if (empty($name) || empty($username) || empty($password) || empty($email) || empty($gender)) {
            
            header('location: registration.html');
            exit();
        }

        
        if (count($_SESSION['users']) >= 100) {
            echo "User registration limit reached! No more registrations allowed.";
            exit();
        }

        
        $_SESSION['users'][] = [
            'name' => $name,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'gender' => $gender
        ];

        
        $_SESSION['flag'] = true;
        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        $_SESSION['gender'] = $gender;

        
        header('location: login.html');
        exit();
    } else {
        
        header('location: registration.html');
        exit();
    }
?>
