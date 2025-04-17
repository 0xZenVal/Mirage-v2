<?php
require_once 'includes/config.php';
require_once 'includes/db.php';

$error = '';
$success = '';

if (isset($_GET['code'])) {
    $verification_code = $_GET['code'];

    // Here you would typically check the verification code against the database
    // For now, we'll just simulate a successful verification
    $success = 'Your email has been verified successfully! You can now log in.';
} else {
    $error = 'Invalid verification code.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification - Mirage</title>
    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎓</text></svg>">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-dark-400 text-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full bg-dark-200 rounded-xl shadow-2xl overflow-hidden fade-in">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold">Email Verification</h2>
                </div>

                <?php if ($error): ?>
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500/50 rounded-lg">
                    <p class="text-red-500 text-sm"><?php echo htmlspecialchars($error); ?></p>
                </div>
                <?php endif; ?>

                <?php if ($success): ?>
                <div class="mb-6 p-4 bg-green-500/10 border border-green-500/50 rounded-lg">
                    <p class="text-green-500 text-sm"><?php echo htmlspecialchars($success); ?></p>
                </div>
                <?php endif; ?>

                <div class="text-center">
                    <a href="login.php" class="text-primary hover:text-blue-400">Go to Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
