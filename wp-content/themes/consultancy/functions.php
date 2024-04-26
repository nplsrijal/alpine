<?php
    include (get_template_directory() . '/includes/front/enqueue.php');
    include (get_template_directory() . '/includes/front/setup.php');

    if(!session_id()){
        session_start();
    }
    function submit_contact_form()
    {
        if (isset($_POST['btncontactform'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $my_post = array(
               'post_type' => 'contactform',
               'post_title' => 'New appointment from '.$name,
               'post_name'=>$name,
               'post_status' => 'pending', // and more status like publish,draft,private
           );
            $postID = wp_insert_post($my_post);
            if ($postID == 0) {
                session_start();
                $inactive = 10;
                ini_set('session.gc_maxlifetime', $inactive);
                $_SESSION["appointment_form__saved"] = "false";
                wp_redirect(home_url('/contact-us'));
                exit;

            } else {
                add_post_meta($postID, 'name', $name, false);
                add_post_meta($postID, 'email', $email, false);
                session_start();
                $inactive = 10;
                ini_set('session.gc_maxlifetime', $inactive);
                $_SESSION["appointment_form__saved"] = "true";
                wp_redirect(home_url('/contact-us'));
                exit;
            }
        }
    }
    add_action('init', 'submit_contact_form');


    
// Add custom columns to custom post type
function my_custom_columns($columns) {
    $columns['name'] = 'Name';
    $columns['email'] = 'Email';
    return $columns;
}
add_filter('manage_contactform_posts_columns', 'my_custom_columns');

// Display content in the custom columns
function my_custom_column_content($column_name, $post_id) {
    if ($column_name === 'name') {
        // Display 'Name' content here
        echo get_post_meta($post_id, 'name', true); // Replace 'name_meta_key' with the actual meta key
    }
    if ($column_name === 'email') {
        // Display 'Email' content here
        echo get_post_meta($post_id, 'email', true); // Replace 'email_meta_key' with the actual meta key
    }
}
add_action('manage_contactform_posts_custom_column', 'my_custom_column_content', 10, 2);


?>
