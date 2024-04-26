<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= get_queried_object()->post_title;?></h2>
      <ol>
        <li><a href="<?= site_url('/');?>">Home</a></li>
        <li><a href="javascript:void(0)">News</a></li>
        
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

 <!-- =======  Single Section ======= -->
 <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <h2 class="entry-title">
                <a href="javascript:void(0)"><?php echo get_the_title() ?></a>
              </h2>

              <div class="row">

              <div class="entry-meta col-md-4 col-lg-4">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="javascript:void(0)"><time datetime="2020-01-01"><?= get_the_date();?></time></a></li>
                 
                </ul>

              
              </div>

              <div class="entry-meta col-md-8 col-lg-8 pull-right">
                <ul>
                <li class="d-flex align-items-center">Share On:</li>

                  <li class="d-flex align-items-center"><i class="bi bi-facebook"></i> <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$permalink;?>&display=popup&ref=plugin&src=share_button">Facebook</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-twitter"></i> <a href="https://www.twitter.com/share?url=<?=$permalink;?>&text=<?php echo get_the_title() ?>">Twitter</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-linkedin"></i> <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$permalink;?>">Linkedin</a></li>
                </ul>
              </div>
              </div>

              <div class="entry-content">
              <?php the_field('description');?>

               

              </div>

             

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <div>
                <h4>Share on Social Media</h4>
                <div class="social-links">
                  <a href="https://www.twitter.com/share?url=<?=$permalink;?>&text=<?php echo get_the_title() ?>"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$permalink;?>&display=popup&ref=plugin&src=share_button"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$permalink;?>"><i class="bi bi-linkedin"></i></a>
                </div>
                <p>
                  You can directly share this on your social media posts.This article belongs to Site Owner.
                </p>
              </div>
            </div><!-- End blog author bio -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">



            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
                <ul>
                    <?php  foreach ($all_terms as $term) { ?>

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
    </section><!-- End  Single Section -->

</main><!-- End #main -->