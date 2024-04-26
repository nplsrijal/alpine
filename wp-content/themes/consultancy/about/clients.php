<?php 
 /*
Template Name: Clients Page Template
*/
get_header(); 

$client_args = array(
  'post_type' => 'clients',
  'posts_per_page' => -1,
  'orderby' => 'date', 
  'order' => 'ASC', 

  );
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
        <li><a href="javascript:void(0)"><?= get_queried_object()->post_title;?></a></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
    


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2><?= get_queried_object()->post_title;?></h2>
          <p>Some of Our Valuable Clients</p>
        </div>

        <div class="row">
        
          <div class="col-lg-12 mt-4 mt-lg-0">
            <div class="tab-content">

      
                <div class="row testimonials">
                  
                <?php 
                
                  $clients = new WP_Query($client_args);
                  while($clients->have_posts()) : $clients->the_post();
                  $image_info = get_field('logo');

                  ?>
                  <div class="col-lg-6 details order-2 order-lg-1">
                  <div class="testimonial-item">
                    <h3><?php echo the_title(); ?></h3>
                    <h4><?php the_field('address'); ?></h4>
                    
                  </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>

             
                 </div>
              </div>
          
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

</main>
<?php
 get_footer(); ?>