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
$id_value = sanitize_value($_POST['id']);

// var_dump($therapist_job);
// die();
// var_dump($therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues);
// die();

// Check there are no errors with our SQL statement
$query = "UPDATE therapists SET therapist_name = '{$therapist_name}',
therapist_job = '{$therapist_job}',
therapist_pronoun = '{$therapist_pronoun}',
therapist_email = '{$therapist_email}',
therapist_phone = '{$therapist_phone}',
therapist_about = '{$therapist_about}',
therapist_specialties = '{$therapist_specialties}',
therapist_issues = '{$therapist_issues}'
 WHERE id = '{$id_value}'";

// var_dump($id_value);
// var_dump($query);
// die();

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'User was not updated';
    redirect_to('/admin/users?error=' . $error_message);
}
?>