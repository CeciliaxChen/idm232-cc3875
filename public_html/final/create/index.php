<?php

include_once __DIR__ . '/../app.php';
$page_title = 'Create Recipes';
include_once __DIR__ . '/../_components/header.php';
?>

<?php
// get therapists data from database
$query = 'SELECT * FROM therapists';
$result = mysqli_query($db_connection, $query);

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Create Therapist</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-create-therapists.php" method="POST">
              <div class="block">
                <label for="">First Name</label>
                <input class="border-black border-2" type="text" name="first_name">
              </div>

              <div class="block">
                <label for="">Last Name</label>
                <input class="border-black border-2" type="text" name="last_name">
              </div>


              <div class="block">
                <label for="">Email</label>
                <input class="border-black border-2" type="email" name="email">
              </div>
              <div class="block">
                <label for="">Phone Number</label>
                <input class="border-black border-2" type="text" name="phone">
              </div>
              <input
                class="nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once __DIR__ . '/../_components/footer.php';?>