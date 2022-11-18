<?php

/**
 * get all users from the database
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
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @return object - mysqli_result
 */
function add_therapist($therapist_name, $therapist_job, $therapist_pronoun, $therapist_email, $therapist_phone, $therapist_about, $therapist_specialties, $therapist_issues)

{
    global $db_connection;

    // $default_password = 'idm232';
    // $password = password_hash($default_password, PASSWORD_DEFAULT);


    $query = 'INSERT INTO therapists';
    $query .= ' (therapist_name, therapist_job, therapist_pronoun, therapist_email, therapist_phone, therapist_about, therapist_specialties, therapist_issues)';
    $query .= " VALUES ('$therapist_name', '$therapist_job', '$therapist_pronoun', '$therapist_email', '$therapist_phone', '$therapist_about', '$therapist_specialties', '$therapist_issues')";
    // var_dump($query);
    // die();

    $result = mysqli_query($db_connection, $query);
    return $result;
}
?>