<?php
session_start();

// Function to check if a user is logged in
function isUserLoggedIn() {
    return isset($_SESSION['user']);
}

// Function to authenticate a user
function authenticateUser($username, $password) {
    // You can replace this with your own authentication logic
    // For simplicity, we'll hardcode a username and password
    $validUsername = 'admin';
    $validPassword = 'password';

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['user'] = $username;
        return true;
    } else {
        return false;
    }
}

// Function to log out a user
function logoutUser() {
    unset($_SESSION['user']);
    session_destroy();
}

// Check if the user submitted the login form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticateUser($username, $password)) {
        header('Location: protected_page.php');
        exit();
    } else {
        $errorMessage = 'Invalid username or password';
    }
}

// Check if the user clicked the logout button
if (isset($_GET['logout'])) {
    logoutUser();
    header('Location: login.php');
    exit();
}
?>

