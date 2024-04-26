<?php
//Template Name: Project Categories List Page Template

    get_header();
     $category = get_queried_object();

     include('project/taxonomy-project.php');

     get_footer();
 ?>
 