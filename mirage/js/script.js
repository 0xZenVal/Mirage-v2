// Fade-in animation for elements
document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    fadeElements.forEach(element => {
        observer.observe(element);
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Form validation - SPECIFIC TO LOGIN FORM ONLY
const loginForm = document.querySelector('form[action*="login"]'); // More specific selector
if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        
        if (!email || !password) {
            e.preventDefault();
            alert('Please fill in all fields');
            return;
        }
        
        // Form will submit normally if validation passes
    });
}

// Add similar specific validation for registration form if needed
const registerForm = document.querySelector('form[action*="register"]');
if (registerForm) {
    registerForm.addEventListener('submit', function(e) {
        // Add any client-side validation you want here
        // Don't preventDefault unless validation fails
        
        // Example validation:
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;
        
        if (password !== confirmPassword) {
            e.preventDefault();
            alert('Passwords do not match');
            return;
        }
        
        // Form will submit normally if validation passes
    });
}