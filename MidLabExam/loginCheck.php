<?php
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if (empty($username) || empty($password)) {
        echo "Null data found!";
        header('location: login.html');
        exit();
    }

    
    if (!isset($_SESSION['users']) || count($_SESSION['users']) == 0) {
        echo "No users registered yet!";
        header('location: registration.html');
        exit();
    }

    
    $validUser = false;
    foreach ($_SESSION['users'] as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $validUser = true;
            
            
            if (empty($user['name']) || empty($user['email']) || empty($user['gender'])) {
                echo "Incomplete registration data!";
                header('location: registration.html');
                exit();
            }

            
            $_SESSION['flag'] = true;
            $_SESSION['username'] = $username;
            header('location: home.php');
            exit();
        }
    }

    if (!$validUser) {
        echo "Invalid username or password!";
        header('location: login.html');
        exit();
    }
} else {
    
    header('location: login.html');
    exit();
}
?>
