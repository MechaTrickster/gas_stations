<?php
/*
 * Telegram Bot Sample
 * ===================
 * UWiClab, University of Urbino
 * ===================
 * Configuration file.
 */

define('TELEGRAM_BOT_TOKEN', '547583786:AAGQJ5wRGKcvXS7ifVuPAu0iXHh_89R7wIE');
define('TELEGRAM_API_URI_BASE', 'https://api.telegram.org/bot' . TELEGRAM_BOT_TOKEN . '/');
define('TELEGRAM_FILE_API_URI_BASE', 'https://api.telegram.org/file/bot' . TELEGRAM_BOT_TOKEN . '/');

// Optional configuration: fill in if you use a MySQL database
// and make use of the library functions in lib_database.php
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'Bot-Ticelli_db');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', 'root');

// PHP configuration
date_default_timezone_set('UTC'); // ensure UTC is used for all date functions
set_time_limit(0); // ensure scripts are not interrupted (e.g., long-polling or downloads)
