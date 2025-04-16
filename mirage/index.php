<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirage - Education Management System</title>
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
            darkMode: 'class',
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
    <!-- Rest of the content remains the same -->
    <!-- Main Container -->
    <div class="min-h-screen flex flex-col">
        
        <!-- Header -->
        <header class="fade-in bg-gradient-to-r from-dark-300 to-dark-200 shadow-xl">
            <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center mb-4 md:mb-0">
                    <i class="fas fa-graduation-cap text-4xl text-primary mr-3"></i>
                    <h1 class="text-2xl md:text-3xl font-bold text-white">Mirage</h1>
                </div>
                <nav class="flex items-center space-x-6">
                    <a href="#features" class="nav-link">Features</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="login.php" class="bg-primary hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="fade-in py-16 md:py-24 bg-gradient-to-b from-dark-300 to-dark-400">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h2 class="text-3xl md:text-5xl font-bold mb-6 text-white leading-tight">
                        Revolutionize Your <span class="text-primary">Academic Experience</span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-300 mb-8">
                        A comprehensive education management system designed to enhance the academic journey for students and lecturers alike.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#features" class="btn-primary">
                            <i class="fas fa-info-circle mr-2"></i>Learn More
                        </a>
                    </div>

                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                         alt="Students collaborating" 
                         class="rounded-lg shadow-2xl max-w-full h-auto" 
                         style="max-height: 400px;">
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-16 bg-dark-400">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16 fade-in">
                    <h2 class="text-3xl font-bold mb-4">Key Features</h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Our system addresses key challenges in course management, communication, and organization.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature Cards -->
                    <div class="feature-card fade-in">
                        <div class="feature-icon bg-blue-500">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Course Registration</h3>
                        <p class="text-gray-400">
                            Easy and secure course registration with real-time availability.
                        </p>
                    </div>
                    
                    <div class="feature-card fade-in delay-100">
                        <div class="feature-icon bg-green-500">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Communication</h3>
                        <p class="text-gray-400">
                            Direct messaging between students and lecturers.
                        </p>
                    </div>
                    
                    <div class="feature-card fade-in delay-200">
                        <div class="feature-icon bg-purple-500">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Task Management</h3>
                        <p class="text-gray-400">
                            Organize and track your academic tasks efficiently.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-16 bg-dark-300">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12 fade-in">
                        <h2 class="text-3xl font-bold mb-4">About Our System</h2>
                        <p class="text-xl text-gray-400">
                            Designed to revolutionize the academic experience
                        </p>
                    </div>
                    
                    <div class="bg-dark-200 rounded-xl p-8 shadow-xl fade-in">
                        <p class="text-lg mb-6 text-gray-300">
                            Mirage is designed to revolutionize the academic experience by providing a comprehensive, integrated platform that streamlines course management, enhances communication, and improves organization.
                        </p>
                        <p class="text-lg text-gray-300">
                            Our system helps reduce administrative burden and ensures that students and lecturers can focus on what matters most - education.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark-300 py-8 mt-auto">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex items-center mb-4 md:mb-0">
                        <i class="fas fa-graduation-cap text-3xl text-primary mr-3"></i>
                        <h2 class="text-xl font-bold text-white">Mirage</h2>
                    </div>
                    
                    <div class="flex space-x-6">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <hr class="border-dark-100 my-6">
                
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">
                        &copy; 2025 Mirage Education Management System. All rights reserved.
                    </p>
                    
                    <div class="flex space-x-4">
                        <a href="#" class="text-sm text-gray-400 hover:text-primary">Privacy Policy</a>
                        <a href="#" class="text-sm text-gray-400 hover:text-primary">Terms of Service</a>
                        <a href="#" class="text-sm text-gray-400 hover:text-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
