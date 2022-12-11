<?php
include_once __DIR__ . '/app.php';
$page_title = 'Detail of Therapists';
include_once __DIR__ . '/_components/header.php';
// get recipe data from database
$query = "SELECT * FROM therapists WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?>


<?php
if (!isset($result)) {
    echo '$therapists variable is not defined. Please check the code.';
}
?>

<?php
    $site_url = site_url();
    while ($therapists = mysqli_fetch_array($result)) {
        echo "
        <div class='therapist-detail-page'>
        <img class='therapist-detail-image' src='{$site_url}/{$therapists['image_path']}' alt=''>
            <div class='therapist-detail-general'>
                <h2 class='detail_therapist-name'>{$therapists['therapist_name']}</h2>
                <p class='detail_therapist-job'> Job Title: {$therapists['therapist_job']}</p>
                <p class='detail_therapist-pronoun'> Pronoun: {$therapists['therapist_pronoun']}</p>
                <div class='therapist-detail-contact'>
                    <p class='detail_therapist-email'> Email: {$therapists['therapist_email']}</p>
                    <p class='detail_therapist-phone'> Phone Number: {$therapists['therapist_phone']}</p>
                        <div class='therapist-detail-spec'>
                            <p class='detail_therapist-about'> About: {$therapists['therapist_about']}</p>
                            <p class='detail_therapist-specialties'> Specialties: {$therapists['therapist_specialties']}</p>
                            <p class='detail_therapist-issues'> Issues: {$therapists['therapist_issues']}</p>
                        </div>
                </div>
            </div>
        </div>
        ";
    }
?>



























<?php include_once __DIR__ . '/_components/footer.php';?> 