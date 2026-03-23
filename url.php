<?php
//TEST URLS ONLYYYYY

require_once __DIR__ . '/config/config.php';

// Auth routes (User/Patient))
defined('URL_SIGNUP') or define('URL_SIGNUP', BASE_PATH . '/auth/signup.php');
defined('URL_LOGIN') or define('URL_LOGIN', BASE_PATH . '/auth/login.php');
defined('URL_LOGOUT') or define('URL_LOGOUT', BASE_PATH . '/logout.php');
// Auth function routes
defined('URL_UPDATE_USER') or define('URL_UPDATE_USER', BASE_PATH . '/auth/update_user.php');
defined('URL_UPDATE_PATIENT') or define('URL_UPDATE_PATIENT', BASE_PATH . '/auth/handle_update_patient.php');

// Auth routes (Medical Staff)
defined('URL_STAFF_LOGIN') or define('URL_STAFF_LOGIN', BASE_PATH . '/auth/mslogin.php');
defined('URL_STAFF_SIGNUP') or define('URL_STAFF_SIGNUP', BASE_PATH . '/msdash.php');
defined('URL_STAFF_DASH') or define('URL_STAFF_DASH', BASE_PATH . '/dashboard.php');
// Dashboard routes
defined('URL_DASH_PATIENT') or define('URL_DASH_PATIENT', BASE_PATH . '/pdash.php');

// Home
defined('URL_HOME') or define('URL_HOME', BASE_PATH . '/front.php');
defined('URL_OTP_PAGE') or define('URL_OTP_PAGE', BASE_PATH . '/auth/otp_page.php');
