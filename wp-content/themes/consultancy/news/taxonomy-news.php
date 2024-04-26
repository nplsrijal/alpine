<main>
    <!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= get_queried_object()->post_title;?></h2>
      <ol>
        <li><a href="<?=site_url('/');?>">Home</a></li>
        <li><?= get_queried_object()->post_title;?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
    

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

          <?php 
          $paged = isset($_GET['page']) ? intval($_GET['page']) : 1;

            $args = array(
                'post_type' => 'news',
                 'tax_query'=> array(
                    array(
                        'taxonomy' => 'news_category',
                        'field'=>'id',
                        'terms' => array($category->term_id),
                    )
                    ),
                    'orderby' => 'date', 
                    'order' => 'ASC', 
                    'posts_per_page' => 5,
                    'paged' => $paged,
              );
              $news = new WP_Query($args);
            while($news->have_posts()) : $news->the_post(); 


            ?>

            <article class="entry">


              <h2 class="entry-title">
                <a href="<?php the_permalink() ?>">
                <?php echo the_title(); ?>
                </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="javascript:void(0)"><?= get_bloginfo('name');?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="javascript:void(0)"><time ><?= get_the_date();?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                <?php
                  $text = get_field('description'); 

                  $character_limit =50;

                  $trimmed_text = wp_trim_words($text, $character_limit, '...');

                  echo $trimmed_text; ?>
                </p>
                <div class="read-more">
                  <a href="<?php the_permalink() ?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <?php endwhile;   ?>
            

            <div class="blog-pagination">
              <ul class="justify-content-center">
              <?php
              $total_pages = $news->max_num_pages;


              for ($i = 1; $i <= $total_pages; $i++) {
              if($paged==$i)
              {
                $active_btn_pagination='active';
              }
              else
              {
                $active_btn_pagination='';

              }
              echo '<li class="'.$active_btn_pagination.'"><a href="'.site_url('/').'news_category/'.$category->slug.'/?page='.$i.'">' . $i . '</a></li>';
              }
              wp_reset_postdata();
              ?>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

            

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                     <?php  foreach ($terms as $term) { ?>
        
                  <li><a href="<?=get_term_link($term);?>"><i class="bi bi-folder"></i> <?=$term->name;?> <span>(<?=$term->count;?>)</span></a></li>
               
                   <?php } ?>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">

                <?php 
        
    
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 6,
                    'orderby' => 'date', // Order by latest publish date
                    'order' => 'DESC',
                );
                $news = new WP_Query($args);
                while($news->have_posts()) : $news->the_post(); 


                ?>

                <div class="post-item clearfix">
                  <h4><a href="<?php the_permalink() ?>"> <?php echo the_title(); ?></a></h4>
                  <time datetime="2020-01-01"><?= get_the_date();?></time>
                </div>


                <?php endwhile;  wp_reset_postdata(); ?>
              

              </div><!-- End sidebar recent posts-->


            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

</main>