<?php
// index.php

// Enable error reporting for debugging (not recommended for production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Example variables
$title = "Welcome to My PHP Page!";
$description = "This is a simple PHP example page.";
$year = date("Y");

// Example function
function greetUser($name) {
    return "Hello, " . htmlspecialchars($name) . "!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $description; ?></p>

    <h2>Greeting</h
