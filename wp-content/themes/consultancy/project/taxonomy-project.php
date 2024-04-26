<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?=$category->name;?> Projects</h2>
      <ol>
        <li><a href="<?=site_url('/');?>">Home</a></li>
        <li><?=$category->name;?> Projects</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<?php 
$paged = isset($_GET['page']) ? intval($_GET['page']) : 1;


$args = array(
  'post_type' => 'project',
  'tax_query'=> array(
      array(
          'taxonomy' => 'project_categories',
          'field'=>'id',
          'terms' => array($category->term_id),
      )
      ),
      'orderby' => 'meta_value',
      'meta_key' => 'start_date',
      'order' => 'DESC', 
  'posts_per_page' => 6,
   'paged' => $paged,
);
$projects = new WP_Query($args);
?>
 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
      <div class="container blog">

        <div class="row">

        <?php 
        if($projects->have_posts())
        {
          while ($projects->have_posts()) : $projects->the_post();

          $date = get_post_meta(get_the_ID(), 'start_date', true); 
          $client = get_post_meta(get_the_ID(), 'clientname', true); 

          ?>
            <div class="col-md-6">
              <div class="icon-box">
                <i class="bi bi-list-check"></i>
                <h4><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h4>
                <p>Completed on: <?= ($date!='')?date('F, Y', strtotime($date)):$date;?></p>
                <p>Location: <?php the_field('location');?></p>
                <p>Client: <?php the_field('clientname');?></p>
                <div class="read-more">
                  <a href="<?php the_permalink() ?>">Read More</a>
                </div>
              </div>
            </div>
            <?php 
            
            endwhile;
           

            ?>
              <div class="blog-pagination">
              <ul class="justify-content-center">

               <?php
               $total_pages = $projects->max_num_pages;


               for ($i = 1; $i <= $total_pages; $i++) {
                if($paged==$i)
                {
                  $active_btn_pagination='active';
                }
                else
                {
                  $active_btn_pagination='';

                }
                echo '<li class="'.$active_btn_pagination.'"><a href="'.site_url('/').'project_categories/'.$category->slug.'?page='.$i.'">' . $i . '</a></li>';
               }
                
                ?>

               </ul>
            </div>


            

       <?php  wp_reset_query(); wp_reset_postdata(); }
        else
        {?>
                    <div class="col-md-12">
                      <h3><a href="javascript:void(0)">No any projects available.</a></h3>
                     </div>



       <?php }
            ?>
         
        </div>

      </div>
    </section><!-- End Services Section -->



</main>

