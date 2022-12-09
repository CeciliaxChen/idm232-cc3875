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
$image_path = sanitize_value($_POST['image_path']);
// var_dump($therapist_job);
// die();
$result = add_therapist($therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues, $image_path);
// var_dump($therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues);
// die();

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/therapists');
} else {
    $error_message = 'Sorry there was an error creating the therapist';
    redirect_to('/admin/therapists?error=' . $error_message);
}
?>