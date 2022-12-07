<?php
include_once __DIR__ . '/app.php';
$page_title = 'Detail of Therapists';
include_once __DIR__ . '/_components/header.php';
$therapist = get_therapist_by_id($_GET['id']);
?>

<h1><?php echo $therapist['therapist_name']; ?></h1>


<?php include_once __DIR__ . '/_components/footer.php';?> 