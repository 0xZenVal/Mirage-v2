<?php
require_once 'config.php';

function get_db_connection() {
    try {
        $db = new PDO(DB_DSN, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        error_log("Database connection failed: " . $e->getMessage());
        return null;
    }
}

function create_user($name, $email, $password) {
    try {
        $db = get_db_connection();
        if (!$db) {
            return ['success' => false, 'message' => 'Database connection failed'];
        }

        // Check if email already exists
        $stmt = $db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            return ['success' => false, 'message' => 'Email already registered'];
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $hashed_password]);

        return ['success' => true, 'message' => 'Registration successful'];
    } catch (PDOException $e) {
        error_log("Registration failed: " . $e->getMessage());
        return ['success' => false, 'message' => 'Registration failed'];
    }
}

function verify_login($email, $password) {
    try {
        $db = get_db_connection();
        if (!$db) {
            return ['success' => false, 'message' => 'Database connection failed'];
        }

        $stmt = $db->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return [
                'success' => true,
                'user' => [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $email
                ]
            ];
        }

        return ['success' => false, 'message' => 'Invalid email or password'];
    } catch (PDOException $e) {
        error_log("Login verification failed: " . $e->getMessage());
        return ['success' => false, 'message' => 'Login failed'];
    }
}
?>
