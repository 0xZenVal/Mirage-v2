# Mirage System

## Overview
Mirage is a simple and minimalistic user registration and login system built with PHP and MySQL. It provides a secure way for users to register, log in, and access a protected dashboard.

## Features
- User registration with validation
- Secure password storage using hashing
- User login with session management
- Dashboard for logged-in users
- Dark-themed UI using Tailwind CSS

## Technology Stack
- **Frontend**: HTML, CSS (Tailwind CSS), JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Installation
1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd mirage
   ```

2. Create the MySQL database:
   ```sql
   CREATE DATABASE mirage_db;
   ```

3. Update the database configuration in `includes/config.php` with your MySQL credentials.

4. Run the database initialization script:
   ```bash
   php init_db.php
   ```

5. Start the Apache server and navigate to `index.php` in your browser.

## Usage
- Visit the landing page to register a new account or log in.
- After logging in, users will be redirected to their dashboard.

## License
© 2025 Mirage. All rights reserved.
