<?php
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mirage</title>
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
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full bg-dark-200 rounded-xl shadow-2xl overflow-hidden fade-in">
            <div class="p-8">
                <div class="text-center mb-8">
                    <i class="fas fa-user-circle text-5xl text-primary mb-4"></i>
                    <h2 class="text-2xl font-bold">Login to Your Account</h2>
                </div>
                
                <form action="login.php" method="post">
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-500"></i>
                            </div>
                            <input type="email" id="email" name="email" autocomplete="email" class="form-input pl-10 w-full py-2 px-3 bg-dark-300 border border-dark-100 rounded-lg focus:outline-none focus:border-primary" placeholder="Enter your email" required>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-500"></i>
                            </div>
                            <input type="password" id="password" name="password" autocomplete="current-password" class="form-input pl-10 w-full py-2 px-3 bg-dark-300 border border-dark-100 rounded-lg focus:outline-none focus:border-primary" placeholder="Enter your password" required>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-primary focus:ring-primary border-gray-600 rounded bg-dark-300">
                            <label for="remember" class="ml-2 block text-sm text-gray-400">Remember me</label>
                        </div>
                        
                        <a href="#" class="text-sm text-primary hover:text-blue-400">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="w-full bg-primary hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                    </button>
                </form>
                
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-400">
                        Don't have an account? <a href="register.php" class="text-primary hover:text-blue-400">Register here</a>
                    </p>
                </div>

                <div class="mt-4 text-center">
                    <a href="index.php" class="text-sm text-gray-400 hover:text-primary">
                        <i class="fas fa-arrow-left mr-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
