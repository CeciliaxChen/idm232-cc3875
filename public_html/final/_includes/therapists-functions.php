<?php

/**
 * Insert a therapists into the database
 * @param  string $name - therapist name of the therapist
 * @param  string $description - therapist description of the therapist
 * @param  string $price - therapist price of the therapist
 * @return object - mysqli_result
 */
function add_therapists($therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues)
{
    global $db_connection;
    $query = 'INSERT INTO therapists';
    $query .= ' (therapist_name, therapist_job, therapist_pronoun, therapist_email, therapist_phone, therapist_about, therapist_specialties, therapist_issues)';
    $query .= " VALUES ('$therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_therapists()
{
    global $db_connection;
    $query = 'SELECT * FROM therapists';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

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

function edit_therapist($name, $price, $description, $id)
{
    global $db_connection;
    $query = 'UPDATE therapists';
    $query .= " SET therapist_name = '{$therapist_name}', therapist_job = '{$therapist_job}', therapist_pronoun = '{$therapist_pronoun}', therapist_email = '{$therapist_email}', therapist_phone = '{$therapist_phone}', therapist_about = '{$therapist_about}', therapist_specialties = '{$therapist_specialties}', therapist_issues = '{$therapist_issues}'";
    $query .= " WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function delete_therapist_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM therapists WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

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


?>



<!-- $therapist_name = $_POST['therapist_name'];
$therapist_job = $_POST['therapist_job'];
$therapist_pronoun = $_POST['therapist_pronoun'];
$therapist_email = $_POST['therapist_email'];
$therapist_phone = $_POST['therapist_phone'];
$therapist_about = $_POST['therapist_about'];
$therapist_specialties = $_POST['therapist_specialties'];
$therapist_issues = $_POST['therapist_issues']; -->