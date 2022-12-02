<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$therapist_name = sanitize_value($_POST['therapist_name']);
$therapist_job = sanitize_value($_POST['therapist_job']);
$therapist_pronoun = sanitize_value($_POST['therapist_pronoun']);
$therapist_email = sanitize_value($_POST['therapist_email']);
$therapist_phone = sanitize_value($_POST['therapist_phone']);
$therapist_about = sanitize_value($_POST['therapist_about']);
$therapist_specialties = sanitize_value($_POST['therapist_specialties']);
$therapist_issues = sanitize_value($_POST['therapist_issues']);

$result = add_user($therapist_name_value, $therapist_job_value, $therapist_pronoun_value, $therapist_email_value, $therapist_phone_value, $therapist_about_value, $therapist_specialties_value, $therapist_issues_value);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'Sorry there was an error creating the user ' . mysqli_error($db_connection);
    redirect_to('/admin/users?error=' . $error_message);
}