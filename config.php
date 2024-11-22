<?php

/// Folder Structure Configuration
define('BASE_PATH', '/projectforge'); // Adjust based on your file's location
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/projectForge');

// Views
define('VIEWS', BASE_PATH . '/views/');
define('ADMIN_VIEWS', BASE_PATH . '/views/admin/');
define('STUDENT_VIEWS', BASE_PATH . '/views/student/');

// Assets
define('CSS', BASE_PATH . '/Asset/CSS/');
define('JS', BASE_PATH . '/asset/js/');
define('IMAGES', BASE_PATH . '/asset/images/');
define('FONTS', BASE_PATH . '/asset/fonts/');
define('ICONS', BASE_PATH . '/asset/icons/');

// Auth Files
define('AUTH', BASE_PATH . '/auth/auth.php');
define('LOGIN', BASE_PATH . '/auth/login.php');

// Config Path Folders
define('CONSTANTS', BASE_PATH . '/config/constants.php');

?>