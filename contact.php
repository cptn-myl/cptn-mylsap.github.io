<?php
/**
 * Simple secure contact form handler
 * Ready for any PHP host (not usable on GitHub Pages)
 *
 * Security features:
 * - CSRF token check
 * - Rate limiting (session-based)
 * - Input sanitization + length limits
 * - Honeypot field
 * - Strict headers
 */

declare(strict_types=1);

session_start();

// Security headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Content-Type: application/json; charset=utf-8');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

// Simple rate limit (max 5 submissions per 10 minutes)
$now = time();
if (!isset($_SESSION['contact_attempts'])) {
    $_SESSION['contact_attempts'] = [];
}
$_SESSION['contact_attempts'] = array_filter(
    $_SESSION['contact_attempts'],
    fn($t) => ($now - $t) < 600
);
if (count($_SESSION['contact_attempts']) >= 5) {
    http_response_code(429);
    echo json_encode(['ok' => false, 'error' => 'Too many requests. Try again later.']);
    exit;
}

// Honeypot (bots fill this)
if (!empty($_POST['website'] ?? '')) {
    // Silently accept but do nothing
    echo json_encode(['ok' => true]);
    exit;
}

// CSRF
$token = $_POST['csrf'] ?? '';
if (!hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
    http_response_code(403);
    echo json_encode(['ok' => false, 'error' => 'Invalid token']);
    exit;
}

// Sanitize + validate
$name    = trim(strip_tags($_POST['name'] ?? ''));
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$message = trim(strip_tags($_POST['message'] ?? ''));

if ($name === '' || strlen($name) > 100) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid name']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 150) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid email']);
    exit;
}
if ($message === '' || strlen($message) > 2000) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid message']);
    exit;
}

// Record attempt
$_SESSION['contact_attempts'][] = $now;

// Here you would normally send email or store in DB
// mail('you@example.com', "Message from $name", $message, "From: $email");

echo json_encode(['ok' => true, 'message' => 'Thanks! Message received.']);
