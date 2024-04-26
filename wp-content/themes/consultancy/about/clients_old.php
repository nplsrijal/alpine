<?php 
 /*
Template Name: Clients Page Template
*/
get_header(); 

 // Get the related categories 
 $terms = get_terms(array(
  'taxonomy' => 'clients_categories',
  'hide_empty' => false,
));
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
          <div class="col-lg-4">
            <ul class="nav nav-tabs flex-column">
            <?php $i=0; foreach ($terms as $term) {  $i++; ?>

              <li class="nav-item">
                <a class="nav-link <?= ($i=='1')?'active show':'';?>" data-bs-toggle="tab" href="#tab-<?=$term->slug;?>"><?=$term->name;?></a>
              </li>
            <?php } ?>
             
            </ul>
          </div>
          <div class="col-lg-8 mt-4 mt-lg-0">
            <div class="tab-content">

            <?php $i=0; foreach ($terms as $term) {  $i++; ?>

              <div class="tab-pane <?= ($i=='1')?'active show':'';?>" id="tab-<?=$term->slug;?>">
                <div class="row testimonials">
                  
                <?php 
                $client_args = array(
                  'post_type' => 'clients',
                  'posts_per_page' => -1,
                  'order_by' => 'ASC',
                  'tax_query'=> array(
                    array(
                        'taxonomy' => 'clients_categories',
                        'field'=>'id',
                        'terms' => array($term->term_id),
                    )
                )
                  );
                  $clients = new WP_Query($client_args);
                  while($clients->have_posts()) : $clients->the_post();
                  $image_info = get_field('logo');

                  ?>
                  <div class="col-lg-6 details order-2 order-lg-1">
                  <div class="testimonial-item">
                    <img src="<?php  echo esc_url($image_info['url']) ?>" class="testimonial-img" alt="<?php echo the_title(); ?>">
                    <h3><?php echo the_title(); ?></h3>
                    <h4><?php the_field('address'); ?></h4>
                    
                  </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>

             
                 </div>
              </div>
            <?php } ?>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

</main>
<?php
 get_footer(); ?>