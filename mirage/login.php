<?php
require_once 'includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameOrEmail = $_POST['username_or_email'];
    $password = $_POST['password'];

    $user = loginUser($usernameOrEmail, $password);
    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php"); // Redirect to dashboard on success
        exit();
    } else {
        $error = "Invalid username/email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login - Mirage</title>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Login</h1>
        <?php if (isset($error)): ?>
            <div class="bg-red-500 p-2 mb-4"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" class="bg-gray-800 p-5 rounded">
            <div class="mb-4">
                <label for="username_or_email" class="block">Username or Email</label>
                <input type="text" name="username_or_email" required class="w-full p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block">Password</label>
                <input type="password" name="password" required class="w-full p-2 rounded">
            </div>
            <button type="submit" class="bg-blue-500 p-2 rounded">Login</button>
        </form>
        <p class="mt-4">Don't have an account? <a href="register.php" class="text-blue-400">Register here</a>.</p>
    </div>
</body>
</html>
