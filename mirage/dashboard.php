<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

require_once 'includes/db.php';

// Fetch user information
$stmt = $db->prepare("SELECT username FROM users WHERE id = :id");
$stmt->execute([':id' => $_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard - Mirage</title>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
        <p class="mb-4">This is your dashboard.</p>
        <a href="logout.php" class="bg-red-500 p-2 rounded">Logout</a>
    </div>
</body>
</html>
