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
            <td>{$therapist['id']}</td>
            <td>{$therapist['therapist_name']}</td>
            <td>{$therapist['therapist_job']}</td>
            <td>{$therapist['therapist_pronoun']}</td>
            <td>{$therapist['therapist_email']}</td>
            <td>{$therapist['therapist_phone']}</td>
            <td>{$therapist['therapist_about']}</td>
            <td>{$therapist['therapist_specialities']}</td>
            <td>{$therapist['therapist_issues']}</td>
            <td>
              <a href='{$site_url}/admin/users/edit.php?id={$therapist['id']}'>Edit</a>
              <a href='{$site_url}/admin/users/delete.php?id={$therapist['id']}'>Delete</a>
            </td>
          </tr>";
    }
    ?>
  </tbody>
</table>