<?php 
 /*
Template Name: Working-Sector Page Template
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
        <li>Services</li>
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
    <div class="row content features">
    <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column" role="tablist">
            <?php 
    
   
          $args = array(
        'post_type' => 'workingsector',
        'orderby' => 'id', 
        'order' => 'ASC', 
       
          );
         $sector = new WP_Query($args);
         $i=0; while($sector->have_posts()) : $sector->the_post();  $i++;


       ?>
              <li class="nav-item" role="presentation">
                <a class="nav-link <?= ($i=='1')?'active show':'';?>" data-bs-toggle="tab" href="#tab-<?php echo $i; ?>" aria-selected="true" role="tab"><?php echo the_title(); ?></a>
              </li>
              <?php endwhile; ?>

            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

            <?php 
    
   
    $args = array(
  'post_type' => 'workingsector',
  'orderby' => 'id', 
  'order' => 'ASC', 
 
    );
   $sector = new WP_Query($args);
   $i=0; while($sector->have_posts()) : $sector->the_post();  $i++;


 ?>

              <div class="tab-pane <?= ($i=='1')?'active show':'';?>" id="tab-<?php echo $i; ?>" role="tabpanel">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3><?php echo the_title(); ?></h3>
                    <p class="fst-italic"><?php the_field('description');?></p>
                  </div>
                  
                </div>
              </div>
              <?php endwhile; wp_reset_postdata(); ?>

             
            </div>
          </div>
        </div>
       
        
    </div>
  </div>
</section>
</main>
<?php
 get_footer(); ?>