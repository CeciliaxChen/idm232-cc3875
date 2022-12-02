<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Therapists';
include_once __DIR__ . '/../../_components/header.php';
$therapists = get_therapists();
?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900"> Therapists </h1>
        <p class="mt-2 text-sm text-gray-700">A list of all the therapists in your account including their name, title, email
          and role.</p>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class="border-black border-2" 
          type="text" 
          name="search" 
          id="search" 
          placeholder="Search">
          <button type="submit"> Search</button> 
        </form>

        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
          }
        ?>
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button type="button"
          class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
          <a href="<?php echo site_url() . '/admin/users/create.php' ?>">
            Add Therapist</a></button>
      </div>
    </div>
    <table class="table text-white">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Therapist Name</th>
          <th scope="col">Therapist Job</th>
          <th scope="col">Therapist Pronoun</th>
          <th scope="col">Therapist Email</th>
          <th scope="col">Therapist Phone Number</th>
          <th scope="col">Therapist About</th>
          <th scope="col">Therapist Specialties</th>
          <th scope="col">Therapist Issues</th>
          <th scope="col">
            <span class="sr-only">Edit</span>
          </th>
        </tr>
      </thead>

  <tbody>
    <?php
    include __DIR__ . '/../../_components/block.php';
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    
    while ($therapist = mysqli_fetch_array($therapists)) {
        // var_dump($therapist);
        // die();
        echo "
          <tr>
            <td>{$therapist['id']}</td>
            <td>{$therapist['therapist_name']}</td>
            <td>{$therapist['therapist_job']}</td>
            <td>{$therapist['therapist_pronoun']}</td>
            <td>{$therapist['therapist_email']}</td>
            <td>{$therapist['therapist_phone']}</td>
            <td>{$therapist['therapist_about']}</td>
            <td>{$therapist['therapist_specialties']}</td>
            <td>{$therapist['therapist_issues']}</td>
            <td>
              <a href='{$site_url}/admin/users/edit.php?id={$therapist['id']}'>Edit</a>
              <a href='{$site_url}/admin/therapists/delete.php?id={$therapist['id']}'>Delete</a>
            </td>
          </tr>";
    }
    ?>
  </tbody>
</table> 
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <?php 
            include __DIR__ . '/../../_components/table-therapists.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';?> 