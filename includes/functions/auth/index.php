<?php
session_start(); // Start session

/*
Name: validateInput
Description: Validate input
Parameters: $value - Input value
Return: 
    false - Invalid input
    $value - Valid input
virsion: 1.0
*/

function validateInput($value) {
    if($value != '') {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    } else {
        return false;
    }
}

/*

Name: login
Description: Login function
Parameters: $conn - Database connection, $email - User email, $password - User password
Return:
    0 - Invalid input
    1 - No user with that email
    2 - Wrong password
    3 - Success
virsion: 1.0

*/

function login($conn, $email, $password) {
    if(validateInput($email) && validateInput($password)) {
        $email = validateInput($email);
        $password = validateInput($password);
        $hashedPassword = sha1($password);
        $sql = "SELECT id, email, password, isAdmin from users WHERE email = '" . $email . "'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if($hashedPassword == $user["password"]) {
                $_SESSION["id"] = $user["id"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["admin"] = $user["isAdmin"];
                return 3;
            } else {
                return 2;
            }
        } else {
            return 1;
        }
    } else {
        return 0;
    }
}
?>