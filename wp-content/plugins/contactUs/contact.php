<?php
/** 
 * Plugin Name: Example Form Plugin
*/

function example_form_plugin()
{
    $content= '';
    $content .='<h2>Contact Us</h2>';

    $content .='<form method="post" action="http://localhost/ecomWordPress/wordpress/thank-you/">';

    $content .='<label for="your_name">Name</label><br/>';
    $content .='<input type="text" name="your_name" class="form_control w-100" placeholder="Enter your name" /><br/>';

    $content .='<label for="your_email">Email</label><br/>';
    $content .='<input type="email" name="your_email" class="form_control w-100" placeholder="Enter your email" /><br/>';

    $content .='<label for="your_comments">Questions or comments</label><br/>';
    $content .='<textarea name="your_comments" class="form_control w-100" placeholder="Enter your questions or comments"></textarea><br/>';

    $content .='<br/><input type="submit" name="example_form_submit" class="btn btn-md btn-primary" placeholder="Enter your name" />';
    $content .='</form>';
    return $content;
}

add_shortcode('example_form','example_form_plugin');

function example_form_capture()
{
    if(isset($_POST['example_form_submit']))
    {
        // echo "<pre>";print_r($_POST);echo "</pre>";
        $name = sanitize_text_field($_POST['your_name']);
        $email = sanitize_text_field($_POST['your_email']);
        $comments = sanitize_textarea_field($_POST['your_comments']);


        $to ='test@youcode.com';
        $subject ='test form submission';
        $message =''.$name.' _ '.$email.' _ '.$comments;
        wp_mail($to,$subject,$message);
    }
}
add_action('wp_head','example_form_capture');

?>