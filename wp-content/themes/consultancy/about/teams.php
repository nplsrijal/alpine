<?php 
 /*
Template Name: Teams Page Template
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
    

   <!-- ======= Team Section ======= -->
   <section id="team" class="team ">
      <div class="container">

        <div class="row">
        <?php 
       $args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'orderby' => 'date', 
        'order' => 'ASC', 
        );
        $teams = new WP_Query($args);
        while($teams->have_posts()) : $teams->the_post();
        $image_info = get_field('employee_image');

        ?>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php  echo esc_url($image_info['url']) ?>" class="img-fluid" alt="<?php echo the_title(); ?>"></div>
              <div class="member-info">
                <h4><?php echo the_title(); ?></h4>
                <span><?=the_field('designation');?></span>
                <p><?=the_field('short_description');?></p>
                <div class="social">
                  <a href="<?=the_field('twitter_link');?>"><i class="ri-twitter-fill"></i></a>
                  <a href="<?=the_field('facebook_link');?>"><i class="ri-facebook-fill"></i></a>
                  <a href="<?=the_field('linkedin_link');?>"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <?php endwhile; wp_reset_postdata(); ?>

        </div>

      </div>
    </section><!-- End Team Section -->

</main>
<?php
 get_footer(); ?>