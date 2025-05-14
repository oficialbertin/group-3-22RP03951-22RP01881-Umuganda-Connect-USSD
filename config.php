<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'umuganda_connect_db');

// Africa's Talking API configuration
define('AT_API_KEY', 'YOUR_API_KEY');
define('AT_USERNAME', 'sandbox'); // Change to your Africa's Talking username
define('AT_SENDER_ID', 'UMUGANDA');

// USSD Configuration
define('USSD_SESSION_TIMEOUT', 60); // Session timeout in seconds
define('MAX_RETRIES', 3); // Maximum number of retries for invalid input 