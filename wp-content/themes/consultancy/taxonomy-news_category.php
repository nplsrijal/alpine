<?php
//Template Name: News Categories List Page Template

    get_header();
     $category = get_queried_object();

     // Get the related categories 
     $terms = get_terms(array(
        'taxonomy' => 'news_category',
        'hide_empty' => false,
    ));

     include('news/taxonomy-news.php');

     get_footer();
 ?>
 