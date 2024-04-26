<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= get_queried_object()->post_title;?></h2>
      <ol>
        <li><a href="<?= site_url('/');?>">Home</a></li>
        <?php  foreach ($terms as $term) { ?>
          <li><a href="<?= site_url('/');?>project_categories/<?=$term->slug;?>"><?=$term->name;?></a></li>
         <?php } ?>
        <li><?= get_queried_object()->post_title;?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

 <!-- =======  Single Section ======= -->
 <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <h2 class="entry-title">
                <a href="javascript:void(0)"><?php echo get_the_title() ?></a>
              </h2>

              <div class="row">

              <div class="entry-meta col-md-7 col-lg-7">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="javascript:void(0)"><time datetime="2020-01-01"><?php the_field('start_date'); ?></time></a></li>
                 <?php  foreach ($terms as $term) { ?>
                  <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="javascript:void(0)"><?=$term->name;?></a></li>
                 <?php } ?>
                </ul>

              
              </div>

              <div class="entry-meta col-md-5 col-lg-5 pull-right">
                <ul>
                <li class="d-flex align-items-center">Share On:</li>

                  <li class="d-flex align-items-center"><i class="bi bi-facebook"></i> <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$permalink;?>&display=popup&ref=plugin&src=share_button">Facebook</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-twitter"></i> <a href="https://www.twitter.com/share?url=<?=$permalink;?>&text=<?php echo get_the_title() ?>">Twitter</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-linkedin"></i> <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$permalink;?>">Linkedin</a></li>
                </ul>
              </div>
              </div>

              <div class="entry-content">
              <?php the_field('introduction'); ?>

               

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


        </div>

      </div>
    </section><!-- End  Single Section -->

</main><!-- End #main -->