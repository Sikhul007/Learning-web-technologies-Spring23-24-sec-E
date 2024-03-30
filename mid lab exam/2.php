<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $dobDay = $_POST["dobDay"];
    $dobMonth = $_POST["dobMonth"];
    $dobYear = $_POST["dobYear"];
    $gender = $_POST["gender"];
    $phone = trim($_POST["phone"]);
    $emailID = trim($_POST["emailID"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    $errors = [];

    // Name validation
    if (empty($firstName) || empty($lastName)) {
        $errors[] = "First name and last name cannot be empty.";
    } else {
        if (!ctype_alpha(str_replace(['.', '-'], '', $firstName)) || !ctype_alpha(str_replace(['.', '-'], '', $lastName))) {
            $errors[] = "Names must contain letters, dots, or dashes only and start with a letter.";
        }
        if (strlen($firstName) < 2 || strlen($lastName) < 2) {
            $errors[] = "Each part of your name must be at least 2 characters long.";
        }
    }

    // Email validation
    if (empty($emailID)) {
        $errors[] = "Email cannot be empty.";
    } else if (!filter_var($emailID, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Gender validation
    if (empty($gender)) {
        $errors[] = "Please select a gender.";
    }

    // Date of Birth validation
    if (empty($dobDay) || empty($dobMonth) || empty($dobYear)) {
        $errors[] = "Date of birth cannot be empty.";
    } else {
        if (!checkdate($dobMonth, $dobDay, $dobYear)) {
            $errors[] = "Invalid date of birth.";
        }
    }

    // Password validation
    if (empty($password) || empty($confirmPassword)) {
        $errors[] = "Password and confirm password cannot be empty.";
    } else if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // Output errors or process the form
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "<p>Registration successful.</p>";
        // Process the registration here (e.g., save to database)
    }
}

?>
