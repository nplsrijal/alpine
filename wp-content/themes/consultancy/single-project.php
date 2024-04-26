<?php 
 /*
Template Name: Project-Detail Single Page Template
*/
get_header(); 

$mainId = get_the_ID();


$taxonomy = 'project_categories';
$terms = get_the_terms($mainId, $taxonomy);

$permalink = get_permalink($mainId);


include('project/single-project.php');


?>


<?php
 get_footer(); ?>