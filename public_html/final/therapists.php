<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<h1> Therapists </h1> 
<?php     $site_url = site_url();
 ?>

<!-- <a href="<?php echo site_url(); ?>/therapists.php" class="therapist"> Therapist 1 </a>  -->

<div class="therapist1_details"> 
    <h2 class="therapist-name"> <a href="<?php echo $site_url; ?>/detail.php?id=2">Ashley Annestedt</a> </h2> 
    <div class="therapist-job"> 
        <h3> Therapist Job </h3> 
        <p class="therapist-job"> Clinical Social Work / Therapist, LCSW </p>
    </div> 
    <div class="therapist-pronoun"> 
        <h3> Therapist Pronoun </h3> 
        <p class="therapist-pronoun"> She / Her / Hers </p>
    </div> 
    <div class="therapist-email"> 
        <h3> Therapist Email </h3> 
        <p class="therapist-email"> Ashley.Annestedt@psychologytoday.com </p>
    </div> 
    <div class="therapist-phone"> 
        <h3> Therapist Phone Number </h3> 
        <p class="therapist-phone"> (501) 365 - 8510 </p>
    </div> 
    <div class="therapist-about"> 
        <h3> Therapist About </h3> 
        <p class="therapist-about"> Perhaps you've been struggling with complex OCD, a Body Focused Repetitive Behavior like Trichotillomania or Skin Picking, or a Tic disorder or Tourette and have been to numerous therapists that just don't seem to get it or provide the treatment you are looking for. Sound familiar? We want to help you get back to the big, beautiful life you deserve, and we have the expertise, training, and experience to help you get there. We are a team of therapists licensed to serve 20+ states who utilize practical evidence-based treatments to help you not just survive but thrive. 
 </p>
    </div> 
    <div class="therapist-specialties"> 
        <h3> Therapist Specialties </h3> 
        <p class="therapist-specialties"> Obsessive Compulsive Disorder (OCD), Tic Disorders / Tourette, Body Focused Repetitive Behaviours (Trich / SPD) </p>
    </div> 
    <div class="therapist-issues"> 
        <h3> Therapist Issues </h3> 
        <p class="therapist-issues"> Anxiety, Women's Issues </p>
    </div> 
</div>


<?php include_once __DIR__ . '/_components/home-hero.php'; ?>
<?php include_once __DIR__ . '/_components/footer.php'; ?>