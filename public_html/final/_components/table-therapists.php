<?php
if (!isset($therapists)) {
    echo '$therapists variable is not defined. Please check the code.';
}
?>
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
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($therapist = mysqli_fetch_array($therapists)) {
        echo "
          <tr>
            <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$therapist['id']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_name']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_job']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_pronoun']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_email']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_phone']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_about']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_specialties']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$therapist['therapist_issues']}</td>
            <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'><td>
              <a href='{$site_url}/admin/therapists/edit.php?id={$therapist['id']}'>Edit</a>
              <a href='{$site_url}/admin/therapists/delete.php?id={$therapist['id']}'>Delete</a>
            </td>
          </tr>";
    }
    ?>
  </tbody>
</table>
