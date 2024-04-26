<?php 
 /*
Template Name:News-Detail Single Page Template
*/
get_header(); 

$mainId = get_the_ID();

$permalink = get_permalink($mainId);

  // Get the related categories 
  $all_terms = get_terms(array(
    'taxonomy' => 'news_category',
    'hide_empty' => false,
));


include('news/single-news.php');


 get_footer(); ?>