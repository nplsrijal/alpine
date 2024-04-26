<?php 
 /*
Template Name: Organisation-Structure Page Template
*/
get_header(); 
?>

<main>
    <!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= get_queried_object()->post_title;?></h2>
      <ol>
        <li><a href="<?=site_url('/');?>">Home</a></li>
        <li>About</li>
        <li><?= get_queried_object()->post_title;?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
    
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
        <h3> <?= get_queried_object()->post_title;?></h3>
    </div>
    <div class="row content">
        <?= the_field('texteditor');?>
       
        
    </div>
  </div>
</section>
</main>
<?php
 get_footer(); ?>