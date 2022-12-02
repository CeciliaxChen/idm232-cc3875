<?php
/**
 * get all therapists from the database
 * @return object - mysqli_result
 */
function get_therapists()
{
    global $db_connection;
    $query = 'SELECT * FROM therapists';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a therapist into the database
 * @param  string $first_name - first name of the therapist
 * @param  string $last_name - last name of the therapist
 * @param  string $email - email of the therapist
 * @param  string $phone - phone number of the therapist
 * @return object - mysqli_result
 */
function add_therapist($therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues)
{
    global $db_connection;
    $default_password = 'idm232';
    $password = password_hash($default_password, PASSWORD_DEFAULT);

    $query = 'INSERT INTO therapists';
    $query .= ' (therapist_name, therapist_job, therapist_pronoun, therapist_email, therapist_phone, therapist_about, therapist_specialties, therapist_issues)';
    $query .= " VALUES ('$therapist_name', '$therapist_job', '$therapist_pronoun', '$therapist_email', '$therapist_phone', '$therapist_about', '$therapist_specialties', '$therapist_issues')";
    // var_dump($query);
    // die();

    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Get therapist by id
 * @param integer $id
 * @return Array or false
 */
function get_therapist_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM therapists WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $therapist = mysqli_fetch_assoc($result);
        return $therapist;
    } else {
        return false;
    }
}

/**
 * Delete therapist by the therapist id
 *
 * @param integer $id
 * @return object - mysqli_result
 */
function delete_therapist_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM therapists WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Edit existing therapist
 * @param  string $first_name - first name of the therapist
 * @param  string $last_name - last name of the therapist
 * @param  string $email - email of the therapist
 * @param  string $phone - phone number of the therapist
 * @param string $id_value - therapist ID
 * @return object - mysqli_result
 */
function edit_therapist($therapist_name_value, $therapist_job_value, $therapist_pronoun_value, $therapist_email_value, $therapist_phone_value, $therapist_about_value, $therapist_specialties_value, $therapist_issues_value)
{
    global $db_connection;
    $query = 'UPDATE therapists';
    $query .= " SET therapist_name = '{$therapist_name}', therapist_job = '{$therapist_job}', therapist_pronoun = '{$therapist_pronoun}', therapist_email = '{$therapist_email}', therapist_phone = '{$therapist_phone}', therapist_about = '{$therapist_about}', therapist_specialties = '{$therapist_specialties}', therapist_issues = '{$therapist_issues}'";
    $query .= " WHERE id = {$id_value}";
    $result = mysqli_query($db_connection, $query);
    return   $result;
}

function verify_password($password)
{
    global $db_connection;
    $query = "SELECT password FROM therapists WHERE id = {$_SESSION['therapist']['id']}";
    $result = mysqli_query($db_connection, $query);
    $password = mysqli_fetch_assoc($result);
    return password_verify(sanitize_value($_POST['password']), $password['password']);
}

function get_therapist_by_email_and_password($email, $password)
{
    global $db_connection;
    $query = "SELECT * FROM therapists WHERE email = '$email'";
    $result = mysqli_query($db_connection, $query);

    if ($result->num_rows > 0) {
        $therapist = mysqli_fetch_assoc($result);
        $existing_hashed_password = $therapist['password'];
        $isPasswordCorrect = password_verify($password, $existing_hashed_password);
        if ($isPasswordCorrect) {
            return $therapist;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>