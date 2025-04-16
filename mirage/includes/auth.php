<?php
require_once 'db.php';

// Function to register a new user
function registerUser($username, $email, $password) {
    global $db;

    // Check for existing user
    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
    $stmt->execute([':username' => $username, ':email' => $email]);
    if ($stmt->fetch()) {
        return false; // User already exists
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into the database
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    return $stmt->execute([':username' => $username, ':email' => $email, ':password' => $hashedPassword]);
}

// Function to login a user
function loginUser($usernameOrEmail, $password) {
    global $db;

    // Fetch user by username or email
    $stmt = $db->prepare("SELECT * FROM users WHERE username = :usernameOrEmail OR email = :usernameOrEmail");
    $stmt->execute([':usernameOrEmail' => $usernameOrEmail]);
    $user = $stmt->fetch();

    // Verify password
    if ($user && password_verify($password, $user['password'])) {
        return $user; // Successful login
    }
    return false; // Failed login
}
?>
