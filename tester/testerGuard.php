<?php
// config/testerGuard.php
require_once __DIR__ . '/../config/config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define redirect URLs
$_SESSION['redirect_urls'] = [
    'staff'   => URL_DASH_STAFF,
    'patient' => URL_DASH_PATIENT,
    'clerk'   => URL_DASH_CLERK,
    'default' => URL_FRONT
];

/**
 * Simple role tester — no logging, no redirection.
 *
 * @param string $expectedRole The role required to access the page.
 */
function testRole($expectedRole) {
    $actualRole = $_SESSION['user_role'] ?? 'none';

    echo "<h3>Role Check</h3>";
    echo "<p>Expected Role: <strong>$expectedRole</strong></p>";
    echo "<p>Actual Role: <strong>$actualRole</strong></p>";

    if ($actualRole === $expectedRole) {
        echo "<p style='color:green;'>✅ Access granted.</p>";
    } else {
        echo "<p style='color:red;'>❌ Access denied.</p>";
    }
}
