<?php
session_start();
header('Content-Type: application/json');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// CSRF check
$token = $_POST['csrf_token'] ?? '';
if (!hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
    echo json_encode(['success' => false, 'message' => 'Invalid request. Please refresh the page and try again.']);
    exit;
}

// Rate limiting: max 3 submissions per 10 minutes
$_SESSION['mail_timestamps'] = $_SESSION['mail_timestamps'] ?? [];
$_SESSION['mail_timestamps'] = array_filter($_SESSION['mail_timestamps'], fn($t) => $t > time() - 600);
if (count($_SESSION['mail_timestamps']) >= 3) {
    echo json_encode(['success' => false, 'message' => 'Too many messages sent. Please try again later.']);
    exit;
}

// Sanitize inputs
$name    = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

// Validate
if (!$name || !$email || !$phone || !$message) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

// Build email
$to = 'info@optimumautocare.co.uk';
$subject = "Website Enquiry from $name";
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n\n";
$body .= "Message:\n$message\n";

$headers = "From: noreply@optimumautocare.co.uk\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send
if (mail($to, $subject, $body, $headers)) {
    $_SESSION['mail_timestamps'][] = time();
    echo json_encode(['success' => true, 'message' => "Thanks $name! We'll get back to you shortly."]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to send message. Please call us on 07933 853 640.']);
}
