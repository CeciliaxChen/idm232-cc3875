<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Create Therapists';
include_once __DIR__ . '/../../_components/header.php';
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
        <h1 class="add-therapist text-xl font-semibold text-gray-900">Add Therapists</h1>
      </div>
    </div>
    <div class="add-form-section mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-create-therapists.php" method="POST" class="form-filling">
              <div class="block">
                <label for="">Therapist Name </label>
                <input class="input-box border-black border-2" type="text" name="therapist_name">
              </div>
              <div class="block">
                <label for="">Therapist Job</label>
                <input class="input-box border-black border-2" type="text" name="therapist_job">
              </div>
              <div class="block">
                <label for="">Therapist Pronoun</label>
                <input class="input-box border-black border-2" type="text" name="therapist_pronoun">
              </div>
              <div class="block">
                <label for="">Therapist Image Path</label>
                <input class="input-box border-black border-2" type="text" name="image_path">
              </div>
              <div class="block">
                <label for="">Therapist Email</label>
                <input class="input-box border-black border-2" type="text" name="therapist_email">
              </div>
              <div class="block">
                <label for="">Therapist Phone</label>
                <input class="input-box border-black border-2" type="number" name="therapist_phone">
              </div>
              <div class="block">
                <label for="">Therapist About</label>
                <br>
                <textarea class="input-box border-black border-2 js-tinymce" name="therapist_about" id="" cols="30"
                  rows="10"></textarea>
              </div>
              <div class="block">
                <label for="">Therapist Specialties</label>
                <br>
                <textarea class="input-box border-black border-2 js-tinymce" name="therapist_specialties" id="" cols="30"
                  rows="10"></textarea>
              </div>
              <div class="block">
                <label for="">Therapist Issues</label>
                <br>
                <textarea class="input-box border-black border-2 js-tinymce" name="therapist_issues" id="" cols="30" id="" cols="30"
                  rows="10"></textarea>
              </div>


              <input
                class="add-submit nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';?>