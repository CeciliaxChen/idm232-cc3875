<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../_components/header.php';
// If someone lands on /admin, redirect them to /admin/users/ as the default page 
redirect_to('/admin/users.php')
?>