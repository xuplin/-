<?php
// check.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'libs/SmartyInti.php';

    // Replace '1111' with your actual password
    $correctPassword = '1111';

    $enteredPassword = $_POST['password'];

    if ($enteredPassword === $correctPassword) {
        // Password is correct, set the passwordChecked cookie to true
        setcookie('passwordChecked', 'true', time() + (86400 * 30), "/"); // set for 30 days
        header('Location: main.php');
        exit();
    } else {
        // Password is incorrect, show error message or redirect back to check.html
        echo "Incorrect password. Please try again.";
    }
}
?>