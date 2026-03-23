<?php
require_once __DIR__ . '/config/config.php';
// url.php — central place for all route strings

// Auth routes
define('testSignup',      BASE_PATH . '/tester/test_update_user.php');

// Dashboard routes
define('URL_DASH_PHYSICIAN', BASE_PATH . '/pdash.php');

// Home
define('URL_HOME', BASE_PATH . '/index.php');
