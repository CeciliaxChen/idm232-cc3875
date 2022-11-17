<?php
include_once __DIR__ . '/../../app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}

// get therapists data from database
$query = "DELETE FROM therapists WHERE id = {$id}";
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/therapists');
} else {
    $error_message = 'Could Not Delete Therapist';
    redirect_to('/admin/therapists?error=' . $error_message);
}
?>