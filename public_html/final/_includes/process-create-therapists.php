<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$therapist_name = $_POST['therapist_name'];
$therapist_job = $_POST['therapist_job'];
$therapist_pronoun = $_POST['therapist_pronoun'];
$therapist_email = $_POST['therapist_email'];
$therapist_phone = $_POST['therapist_phone'];
$therapist_about = $_POST['therapist_about'];
$therapist_specialties = $_POST['therapist_specialties'];
$therapist_issues = $_POST['therapist_issues'];

$result = add_therapist($therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'Sorry there was an error creating the therapist';
    redirect_to('/admin/users?error=' . $error_message);
}