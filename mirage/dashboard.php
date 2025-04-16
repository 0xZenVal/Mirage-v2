<?php
require_once 'includes/config.php';

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mirage</title>
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
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#475569',
                        dark: {
                            100: '#334155',
                            200: '#1e293b',
                            300: '#0f172a',
                            400: '#020617'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-400 text-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-dark-200 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <i class="fas fa-graduation-cap text-3xl text-primary mr-3"></i>
                    <h1 class="text-xl font-bold">Mirage</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-400">
                        <i class="fas fa-user mr-2"></i>
                        <?php echo htmlspecialchars($user['username']); ?>
                    </span>
                    <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition duration-300">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="bg-dark-200 rounded-xl shadow-xl p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h2>
            <p class="text-gray-400">You have successfully logged into your account.</p>
        </div>

        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Course Card -->
            <div class="bg-dark-200 rounded-xl p-6 shadow-xl">
                <div class="flex items-center mb-4">
                    <i class="fas fa-book text-2xl text-primary mr-3"></i>
                    <h3 class="text-xl font-semibold">My Courses</h3>
                </div>
                <p class="text-gray-400 mb-4">View and manage your enrolled courses.</p>
                <a href="#" class="text-primary hover:text-blue-400 flex items-center">
                    View Courses <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Assignments Card -->
            <div class="bg-dark-200 rounded-xl p-6 shadow-xl">
                <div class="flex items-center mb-4">
                    <i class="fas fa-tasks text-2xl text-green-500 mr-3"></i>
                    <h3 class="text-xl font-semibold">Assignments</h3>
                </div>
                <p class="text-gray-400 mb-4">Track your pending assignments.</p>
                <a href="#" class="text-primary hover:text-blue-400 flex items-center">
                    View Assignments <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Messages Card -->
            <div class="bg-dark-200 rounded-xl p-6 shadow-xl">
                <div class="flex items-center mb-4">
                    <i class="fas fa-comments text-2xl text-purple-500 mr-3"></i>
                    <h3 class="text-xl font-semibold">Messages</h3>
                </div>
                <p class="text-gray-400 mb-4">Communicate with instructors and peers.</p>
                <a href="#" class="text-primary hover:text-blue-400 flex items-center">
                    View Messages <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark-300 py-4 mt-auto">
        <div class="container mx-auto px-4 text-center text-gray-400 text-sm">
            &copy; 2025 Mirage Education Management System. All rights reserved.
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
