<?php 
 /*
Template Name: Company-Overview Page Template
*/
get_header(); 
?>

<main>
    <!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= get_queried_object()->post_title;?></h2>
      <ol>
        <li><a href="<?=site_url('/');?>">Home</a></li>
        <li>About</li>
        <li><?= get_queried_object()->post_title;?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
    
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
        <h3> Company In Brief</h3>
    </div>
    <div class="row content">
        <?php
        $rows = get_field('overview');

        if ($rows) {
            echo '<table class="table table-responsive table-bordered">';
            if(isset($rows['header']))
            {
              echo '<tr>';

              foreach($rows['header'] as $th)
              {
                echo '<th>'.$th['c'].'</th>';
              }
              echo '</tr>';

            }
            
            foreach ($rows['body'] as $row => $key) {
              
                echo '<tr>';
                foreach($key as $td):

                 echo '<td>' . esc_html($td['c']) . '</td>';
                endforeach;

                echo '</tr>';
            }
            
            echo '</table>';
        }
        ?>
    </div>
  </div>
</section>
</main>
<?php
 get_footer(); ?>