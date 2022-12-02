<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Therapists';
include_once __DIR__ .'/../../_components/header.php';
$therapists = get_therapists();

// Check if search exist in query
if (isset($GET['search'])) {
    $search = $GET['search'];
} else {
    search = '';
}

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';
// die;


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
    <?php include __DIR__ . '/../../_components/navigation-admin.php'; ?>
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Search Results</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
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
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button type="button"
          class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
          <a href="<?php echo site_url() . '/admin/therapists/create.php' ?>">
            Add Therapist</a></button>
      </div>
    </div>

    <?php
    // If we have results, show them
      if ($therapists_results) {
          while ($therapists_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<h2>' . $therapists_results['first_name'] . ' ' . $therapists_results['last_name'] . '</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>