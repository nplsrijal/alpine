<?php 
 /*
Template Name: Contact Page Template
*/
get_header(); 
session_start();


?>

<main id="main">

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

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="<?= the_field('location_map');?>" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p><?= the_field('location');?></p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p><?= the_field('email');?></p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p><?= the_field('phone');?></p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form  method="post" role="form" class="php-email-form" action="">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <?php if (isset($_SESSION["appointment_form__saved"]) && $_SESSION["appointment_form__saved"]=='false') {
                $_SESSION["appointment_form__saved"] = null;
                ?>
            <div class="error-message d-block">Couldnot submit a Data.</div>
            <?php } ?>

             <?php if (isset($_SESSION["appointment_form__saved"]) && $_SESSION["appointment_form__saved"]=='true') {
                $_SESSION["appointment_form__saved"] = null;
                ?>
            <div class="sent-message d-block">Your message has been sent. Thank you!</div>
            <?php } ?>
          </div>
          <div class="text-center"><button type="submit" name="btncontactform">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
<?php
 get_footer(); ?>