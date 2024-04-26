
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" style="max-height:70px!important" alt="<?= get_bloginfo('name');?>" /></h3>
              <p>
              <?= the_field('location',7);?> <br>
                
                <strong>Phone:</strong> <?= the_field('phone',7);?> <br>
                <strong>Email:</strong> <?= the_field('email',7);?><br>
              </p>
              <div class="social-links mt-3">
                <a href="<?= the_field('twitter_link',7);?>" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="<?= the_field('facebook_link',7);?>" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?= the_field('instagram_link',7);?>" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?= the_field('linkedin_link',7);?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>about/introduction">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>about/our-team/core-team">Executive Board Members</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>career/vacancy">Vacancy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>news">News</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>services/working-sector">Working Sectors</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>services/consulting">Consulting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>services/technology">Technology</a></li> -->
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Projects</h4>
            <ul>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>project_categories/ongping/">Ongoing</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url('/') ?>project_categories/completed/">Completed</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <?=date('Y');?> <strong><span><?= get_bloginfo('name');?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed & Developed by <a href="https://softcherry.com.np/" target="_blank">SoftCherry Pvt. Ltd.</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php wp_footer(); ?>

 
</body>

</html>