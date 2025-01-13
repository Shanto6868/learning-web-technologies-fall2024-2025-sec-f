<?php
include('../model/usermodel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        if ($username === 'admin' && $password === 'admin123') {
            header('Location: ../view/dashboard.html');
            exit();
        } else {
            echo "You are a valid member!";
        }
    } else {
        echo "Invalid credentials!";
    }
}
?>
