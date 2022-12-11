<?php
include_once __DIR__ . '/app.php';
$page_title = 'View All Therapists';
include_once __DIR__ . '/_components/header.php';

$query = 'SELECT * FROM therapists ORDER BY therapist_name ASC';
$result = mysqli_query($db_connection, $query);

?>

<h1> View all Therapists </h1> 
<?php     
$site_url = site_url();
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
        <div class='therapist-description'> 
            <a href='{$site_url}/detail.php?id={$therapists['id']}'>
                <div class=''>
                    <div class='therapist-description-image'> 
                        <img class='therapist-image' src='{$site_url}/{$therapists['image_path']}' alt=''>
                    </div> 
                    <div class='therapist-description-text'>
                        <p class=''>{$therapists['therapist_name']}</p>
                        <p class=''>{$therapists['therapist_job']}</p>
                        <p class=''>{$therapists['therapist_specialties']}</p>
                    </div> 
                </div>
            </a>
        </div> 
        ";
    }
?>


<?php include_once __DIR__ . '/_components/footer.php'; ?>