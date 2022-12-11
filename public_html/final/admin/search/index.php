<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Therapists';
include_once __DIR__ .'/../../_components/header.php';
$therapists = get_therapists();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM therapists';
$query .= " WHERE therapist_name LIKE '%{$search}%'";
$query .= " OR therapist_job LIKE '%{$search}%'";
$query .= " OR therapist_pronoun LIKE '%{$search}%'";
$query .= " OR therapist_email LIKE '%{$search}%'";
$query .= " OR therapist_phone LIKE '%{$search}%'";
$query .= " OR therapist_about LIKE '%{$search}%'";
$query .= " OR therapist_specialties LIKE '%{$search}%'";
$query .= " OR therapist_issues LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);


// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $therapists_results = true;
} else {
    $therapists_results = false;
}

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900 search-results">Search Results</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET" class="search-bar">
          <input class="search-input border-black border-2" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit" class="submit-button">Search</button>
        </form>
        <h2 class="search-text">You searched for"<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$therapists_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
  }?>
      </div>
    </div>

    <?php
    $site_url = site_url();
    // If we have results, show them
      if ($therapists_results) {
          while ($therapists_results = mysqli_fetch_assoc($results)) {
            echo "
            <a href='{$site_url}/detail.php?id={$therapists_results['id']}' class='therapist-card2-link'>
                <div class='therapist-card2 flex flex-row justify-center items-center'>
                 <img class='therapist-card2-img' src='{$site_url}{$therapists_results['image_path']}' alt=''>
                    <div class=''>
                        <h2 class='therapist-card2-name'>{$therapists_results['therapist_name']}</h2>
                    </div> 
                </div>
            </a>
        ";
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>