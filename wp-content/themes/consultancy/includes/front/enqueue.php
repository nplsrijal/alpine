<?php
    function include_styles(){


        $css_array['animate']='vendor/animate.css/animate.min.css';
        $css_array['bootstrap']='vendor/bootstrap/css/bootstrap.min.css';
        $css_array['bootstrapicons']='vendor/bootstrap-icons/bootstrap-icons.css';
        $css_array['boxicons']='vendor/boxicons/css/boxicons.min.css';
        $css_array['glightbox']='vendor/glightbox/css/glightbox.min.css';
        $css_array['remixicon']='vendor/remixicon/remixicon.css';
        $css_array['boxicons']='vendor/swiper/swiper-bundle.min.css';
        $css_array['style']='css/style.css';
  

        foreach($css_array as $key =>$li)
        {
            wp_register_style($key, get_template_directory_uri() . '/assets/'.$li);
            wp_enqueue_style($key);

  
        }
     
        $js_array['bootstrapjs']='vendor/bootstrap/js/bootstrap.bundle.min.js';
        $js_array['glightboxjs']='vendor/glightbox/js/glightbox.min.js';
        $js_array['isotope']='vendor/isotope-layout/isotope.pkgd.min.js';
        $js_array['swiper']='vendor/swiper/swiper-bundle.min.js';
        $js_array['noframework']='vendor/waypoints/noframework.waypoints.js';
        $js_array['validate']='vendor/php-email-form/validate.js';
        $js_array['main']='js/main.js';

        foreach($js_array as $key =>$li)
        {
            wp_register_script($key, get_template_directory_uri() . '/assets/'.$li, array('jquery'), false, true);
            wp_enqueue_script($key);

        }

      
    }

    


    add_action('wp_enqueue_scripts', 'include_styles');
?>
