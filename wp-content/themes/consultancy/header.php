<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= get_bloginfo('name');?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico" rel="icon">
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <?php wp_head(); 
  $current_url = home_url( $wp->request );
  //echo $current_url;
  $base_url = home_url();

// Remove the base URL from the current URL to get the path after the base URL
$path_after_base = str_replace( $base_url, '', $current_url );

$link_called=explode('/',$path_after_base);
  ?>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo site_url('/') ?>">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="<?= get_bloginfo('name');?>" />
       </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="<?php echo site_url('/') ?>" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo site_url('/') ?>" class="<?= ($current_url==site_url(''))?'active':'';?>">Home</a></li>

          <li class="dropdown"><a href="#" class="<?= ($link_called[1]=='about')?'active':'';?>"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo site_url('/') ?>about/introduction" class="<?= ($current_url==site_url('/about/introduction'))?'active':'';?>">Introduction</a></li>
              <li><a href="<?php echo site_url('/') ?>about/company-overview" class="<?= ($current_url==site_url('/about/company-overview'))?'active':'';?>">Company Overview</a></li>
              <li><a href="<?php echo site_url('/') ?>about/guiding-principles" class="<?= ($current_url==site_url('/about/guiding-principles'))?'active':'';?>">Guiding Principles</a></li>
              <li><a href="<?php echo site_url('/') ?>about/organisation-structure" class="<?= ($current_url==site_url('/about/organisation-structure'))?'active':'';?>">Organisation Structure</a></li>
              <li class="dropdown"><a href="#" class="<?= ($link_called[2]=='our-team')?'active':'';?>">Our Team <i class="bi bi-chevron-right"></i></a>
              <ul>
                 
                  <li class="<?= ($link_called[3]=='core-team')?'active':'';?>"><a href="<?php echo site_url('/') ?>our-team/core-team/">Executive Board Members</a></li>
                  <li class="<?= ($link_called[3]=='experts')?'active':'';?>"><a href="<?php echo site_url('/') ?>our-team/experts/">Experts</a></li>
                </ul>
              </li>
              </li>
              <li><a href="<?php echo site_url('/') ?>about/clients" class="<?= ($current_url==site_url('/about/clients'))?'active':'';?>">Our Clients</a></li>
              <!-- <li><a href="<?php echo site_url('/') ?>about/corporate-social-responsibility" class="<?= ($current_url==site_url('/about/corporate-social-responsibility'))?'active':'';?>">Corporate Social Responsibility</a></li> -->

             
            </ul>
          </li>
          <li ><a href="<?php echo site_url('/') ?>services/working-sector" class="<?= ($link_called[1]=='services')?'active':'';?>"><span>Working Sectors</span></a>
           
          </li>
          
          <li class="dropdown"><a href="#" class="<?= ($link_called[1]=='project_categories' || $link_called[1]=='project' )?'active':'';?>"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

            <?php
                    $args = array(
                        'taxonomy' => 'project_categories',
                        'hide_empty' => false,
                        'posts_per_page' => -1,
                        'orderby'=>'id',
                        'order'=>'ASC',

                    );
                    $terms = get_terms($args);
                    
                    $parent_Dropdown=[];
                    $subparent_Dropdown=[];
                    foreach($terms as $term)
                    {
                       if($term->parent=='0')
                       {
                        $parent_Dropdown[$term->term_id]=array('id'=>$term->term_id,'term'=>get_term_link($term),'name'=>$term->name);
                       }
                       else
                       {
                        $subparent_Dropdown[$term->parent][]=array('id'=>$term->term_id,'term'=>get_term_link($term),'name'=>$term->name);
                       }
                    }
                    ?>
              
              <?php foreach($parent_Dropdown as $li):?>
              <li class="dropdown"><a href="<?= $li['term'];?>"><span><?=$li['name'];?></span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <?php foreach($subparent_Dropdown[$li['id']] as $subli):?>
                  <li><a href="<?= $subli['term'];?>"><?=$subli['name'];?></a></li>
                   <?php endforeach;?>                 
                </ul>
              </li>

              <?php endforeach;?>
            </ul>
            </li>
          <li><a href="<?php echo site_url('/') ?>news" class="<?= ($link_called[1]=='news' || $link_called[1]=='news_category')?'active':'';?>">News</a></li>
          <li class="dropdown"><a href="#" class="<?= ($link_called[1]=='career')?'active':'';?>"><span>Career</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo site_url('/') ?>career/internship" class="<?= ($link_called[2]=='internship')?'active':'';?>">Internship</a></li>
              <li><a href="<?php echo site_url('/') ?>career/vacancy" class="<?= ($link_called[2]=='vacancy')?'active':'';?>">Vacancy</a></li>
              <!-- <li><a href="<?php echo site_url('/') ?>career/employee-benefits" class="<?= ($link_called[2]=='employee-benefits')?'active':'';?>">Employee Benefits</a></li> -->
             
            </ul>
          </li>

          <li><a href="<?php echo site_url('/') ?>contact-us" class="<?= ($link_called[1]=='contact-us')?'active':'';?>">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



 
