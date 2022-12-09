<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = 'Home';
}
$site_title = 'Couch Therapy';
$document_title = $page_title . ' | ' . $site_title; // Home | Couch Therapy

?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Including TinyMCE Library -->
  <script src="https://cdn.tiny.cloud/1/7rpnj47it93x8jhvzo8vbgdulo0j4qdj5xdmud6xc46gy8fb/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>
  <!-- Main Content Begins -->
  <div class="header-container"> 
    <div class="nav-container"> 
      <div class="logo-container"> 
        <a href="<?php echo site_url(); ?>/index.php" class="logo"> 
          <img src="<?php echo site_url(); ?>/dist/images/couch.png" alt="couch" class="therapyLogo"> 
      </a> 
      </div> 

      <ul id="navbar" class="navbar"> 
        <li>
          <a href="<?php echo site_url(); ?>/admin/therapists/index.php" class="nav-link"> Admin </a> 
        </li> 
        <li>
          <a href="<?php echo site_url(); ?>/therapists.php" class="nav-link"> Therapists </a>
        </li> 
        <li>
          <a href="<?php echo site_url(); ?>/admin/search/index.php" class="nav-link"> Search </a>
        </li> 
      </ul>
    </div> 
  </div> 