<?php
require_once 'includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate input
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } elseif (registerUser($username, $email, $password)) {
        header("Location: login.php"); // Redirect to login page on success
        exit();
    } else {
        $error = "Username or email already exists.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Register - Mirage</title>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Register</h1>
        <?php if (isset($error)): ?>
            <div class="bg-red-500 p-2 mb-4"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" class="bg-gray-800 p-5 rounded">
            <div class="mb-4">
                <label for="username" class="block">Username</label>
                <input type="text" name="username" required class="w-full p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block">Email</label>
                <input type="email" name="email" required class="w-full p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block">Password</label>
                <input type="password" name="password" required class="w-full p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="block">Confirm Password</label>
                <input type="password" name="confirm_password" required class="w-full p-2 rounded">
            </div>
            <button type="submit" class="bg-blue-500 p-2 rounded">Register</button>
        </form>
        <p class="mt-4">Already have an account? <a href="login.php" class="text-blue-400">Login here</a>.</p>
    </div>
</body>
</html>
