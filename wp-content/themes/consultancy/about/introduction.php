<?php 
 /*
Template Name: Introduction Page Template
*/
get_header(); 
?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= get_queried_object()->post_title;?></h2>
      <ol>
        <li><a href="<?= site_url('/');?>">Home</a></li>
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
      <div class="col-lg-6">
        <h2><?= get_bloginfo('name');?></h2>
        <h3>
          <?php 
          $image_info = get_field('about_image');

          if ($image_info) {
         
            echo '<img src="' . esc_url($image_info['url']) . '" style="width:90%" alt="' . esc_attr(get_the_title()) . '">';
            
        }?>
      </h3>
     </div>
      <div class="col-lg-6 pt-4 pt-lg-0" style="text-align:justify">
      <?php the_field('about_short_intro');?>
      </div>
    </div>

    <div class="row content">
      <div class="col-lg-12" style="text-align:justify">
      <?php the_field('about_additional_information');?>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Mission Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Mission</h2>
      <p>Our Mission</p>
    </div>

    <div class="row">

      <div class="col-lg-12">
           <p>
            <blockquote>
           <?php the_field('mission');?>
            </blockquote>

              </p>
      </div>


    </div>

  </div>
</section><!-- End Mission Section -->


<!-- ======= Vision Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Vision</h2>
      <p>Our Vision</p>
    </div>

    <div class="row">

      <div class="col-lg-12">
           <p>
           <?php the_field('vision');?>

              </p>
      </div>


    </div>

  </div>
</section><!-- End Vision Section -->


<!-- ======= Objectives Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Objectives</h2>
      <p>Our Objectives</p>
    </div>

    <div class="row">

      <div class="col-lg-12">
           <p>
           <?php the_field('objectives');?>

              </p>
      </div>


    </div>

  </div>
</section><!-- End Vision Section -->


</main><!-- End #main -->

<?php
 get_footer(); ?>