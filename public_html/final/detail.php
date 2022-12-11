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
        <div class=''>
            <div class=''>
                <div class=''>
                    <div>
                        <img class='' width='500px' height='500px' src='{$site_url}/{$therapists['image_path']}' alt=''>
                        <h2 class='therapist-name'>{$therapists['therapist_name']}</h2>
                        <p class=''> Job Title: {$therapists['therapist_job']}</p>
                        <p class=''> Pronoun: {$therapists['therapist_pronoun']}</p>
                        <p class=''> Email: {$therapists['therapist_email']}</p>
                        <p class=''> Phone Number: {$therapists['therapist_phone']}</p>
                        <p class=''> About: {$therapists['therapist_about']}</p>
                        <p class=''> Specialties: {$therapists['therapist_specialties']}</p>
                        <p class=''> Issues: {$therapists['therapist_issues']}</p>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
?>



























<?php include_once __DIR__ . '/_components/footer.php';?> 