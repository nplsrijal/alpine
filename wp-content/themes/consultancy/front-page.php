<?php 
 /*
Template Name: Home Page Template
*/
get_header();
 ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

      <?php 
       $args = array(
        'post_type' => 'slider',
        'posts_per_page' => -1,
        'orderby' => 'date', 
        'order' => 'ASC', 
    );
    $sliders = new WP_Query($args);
    $i=0;
    while($sliders->have_posts()) : $sliders->the_post(); $i++;

    $image_info = get_field('slider_image');

     ?>


        <!-- Slide 1 -->
        <div class="carousel-item <?= ($i=='1')?'active':'';?>" style="background-image: url(<?php echo esc_url($image_info['url']) ?>)">
          <div class="carousel-container">
            <div class="container">
              <!-- <h2 class="animate__animated animate__fadeInDown"> -->
                <?php //echo the_title(); ?>
              <!-- </h2> -->
            </div>
          </div>
        </div>

       

           <?php endwhile; wp_reset_postdata(); ?>


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <h2>Introduction</h2>
        <h3>
          <?php 
          $image_info = get_field('home_image');

          if ($image_info) {
         
            echo '<img src="' . esc_url($image_info['url']) . '" style="width:90%" alt="' . esc_attr(get_the_title()) . '">';
            
        }?>
      </h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 " style="    margin-top: 80px;text-align:justify">
         <?php the_field('home_short_intro');?>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
  <div class="container">

    <div class="row">

       <?php 
                // $client_args = array(
                //   'post_type' => 'clients',
                //   'posts_per_page' => -1,
                //   'order_by' => 'ASC',
                //   );
                //   $clients = new WP_Query($client_args);
                //   while($clients->have_posts()) : $clients->the_post();
                //   $image_info = get_field('logo');

                  ?>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="<?php  //echo esc_url($image_info['url']) ?>" class="img-fluid" alt="<?php //echo the_title(); ?>">
      </div>

      <?php //endwhile; wp_reset_postdata();?>


    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services frontpage-services">
  <!-- <div class="container">

    <div class="row">

      <div class="col-md-6">
        <div class="icon-box">
          <i class="bi bi-briefcase"></i>
          <h4><a href="<?php //echo site_url('/');?>services/consulting">Consulting Service</a></h4>
          <p>
          <?php
          // $text = get_field('texteditor', 47); 

          // $character_limit =30;

          // $trimmed_text = wp_trim_words($text, $character_limit, '...');

          // echo $trimmed_text; 
          ?>
          <br/>
          <a href="<?php //echo site_url('/');?>services/consulting" class="pull-right-i" style="float:right">Know More <span ><i class="bi bi-arrow-right pull-right-i" style="float: right;margin-top: -7px!important;"></i></span></a>
          </p>
        </div>
      </div>

      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-card-checklist"></i>
          <h4><a href="<?php //echo site_url('/');?>services/technology">Technology</a></h4>
          <p>
          <?php 
          // $text = get_field('texteditor', 49); 

          // $character_limit =30;

          // $trimmed_text = wp_trim_words($text, $character_limit, '...');

          // echo $trimmed_text; 
          ?>
          <br/>
          <a href="<?php // echo site_url('/');?>services/technology" class="pull-right-i" style="float:right">Know More <span ><i class="bi bi-arrow-right pull-right-i" style="float: right;margin-top: -7px!important;"></i></span></a>

          </p>
        </div>
      </div>
     
    </div>

  </div> -->
</section>
<!-- End Services Section -->

<!-- News Section -->
<section id="blog" class="blog frontpage-blog">
  <div class="container">
     <div class="row">

      <h2 class="title-section">Latest News
      <span class="navigation-link"> <a href="<?=site_url('/');?>news" class="pull-right-i" style="float:right">View All <span ><i class="bi bi-arrow-right pull-right-i" ></i></span></a></span>

      </h2>
     <?php 
    
   
      $args = array(
          'post_type' => 'news',
          'orderby' => 'date', 
          'order' => 'ASC', 
          'posts_per_page' => 6,
          'paged' => $paged,
      );
      $news = new WP_Query($args);
      while($news->have_posts()) : $news->the_post(); 


      ?>

      <div class="col-lg-4 entries">
        <article class="entry">


            <h2 class="entry-title">
              <a href="<?php the_permalink() ?>">
              <?php echo the_title(); ?>
              </a>
            </h2>


            <div class="entry-content">
              <p>
              <?php
              $text = get_field('description'); 

              $character_limit =20;

              $trimmed_text = wp_trim_words($text, $character_limit, '...');

              echo $trimmed_text; ?>
              </p>
              <div class="read-more">
                <a href="<?php the_permalink() ?>">Read More</a>
              </div>
            </div>

            </article>
          </div>
      <?php endwhile; wp_reset_postdata();?>

      </div>
   </div>
</section>

<!-- End News Section -->

<!-- Projects Section -->
<section id="services" class="services frontpage-blog">
  <div class="container">
     <div class="row">

      <h2 class="title-section">Recent Projects
        <span class="navigation-link"> <a href="<?=site_url('/');?>project_categories/completed/" class="pull-right-i" style="float:right">View All <span ><i class="bi bi-arrow-right pull-right-i" ></i></span></a></span>
      </h2>
     <?php 
    
   
      $args = array(
          'post_type' => 'project',
          'orderby' => 'meta_value',
          'meta_key' => 'start_date',
          'order' => 'DESC', 
          'posts_per_page' => 6,
          'paged' => $paged,
      );
      $project = new WP_Query($args);
      while($project->have_posts()) : $project->the_post(); 

      $date = get_post_meta(get_the_ID(), 'start_date', true); 

      ?>
       <div class="col-md-4">
              <div class="icon-box">
                <i class="bi bi-files"></i>
                <h4><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h4>
                <p>Completed On: <?= ($date!='')?date('F, Y', strtotime($date)):$date;?></p>
                <p>Location: <?php the_field('location');?></p>
                <p>Client: <?php the_field('clientname');?></p>
                <div class="read-more">
                  <a href="<?php the_permalink() ?>">Read More</a>
                </div>
              </div>
            </div>


     <?php endwhile; wp_reset_postdata();?>

      </div>
   </div>
</section>

<!-- End Projects Section -->



<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="row">
    <h2 class="title-section">Find Us At</h2>
    </div>
    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="<?= the_field('location_map',7);?>" frameborder="0" allowfullscreen></iframe>
    </div>


  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
 get_footer(); ?>