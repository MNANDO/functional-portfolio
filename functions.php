<?php 

function site_files() 
{
    // CSS
    wp_enqueue_style('site_main_styles', get_theme_file_uri('/css/styles.css'));
    // JS
    wp_enqueue_script('main_site_js', get_theme_file_uri('/js/bootstrap.bundle.min.js'), array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'site_files');

// About Section Category
$category_args = array(
    'description' => 'About Section.',
    'slug' => 'about',
    'parent' => 0
);

// Insert the About Section Category
$category_id = wp_insert_term('About', 'category', $category_args);

// Footer Section Category
$category_args = array(
    'description' => 'Footer Section.',
    'slug' => 'footer',
    'parent' => 0
);

// Insert the Footer Section Category
$category_id = wp_insert_term('Footer', 'category', $category_args);

// Footer Section Category
$category_args = array(
    'description' => 'Contact Section.',
    'slug' => 'contact',
    'parent' => 0
);

// Insert the Contact Section Category
$category_id = wp_insert_term('Contact', 'category', $category_args);

// Portfolio Section Category
$category_args = array(
    'description' => 'Portfolio Section.',
    'slug' => 'portfolio',
    'parent' => 0
);

// Insert the Portfolio Section Category
$category_id = wp_insert_term('Portfolio', 'category', $category_args);

// Header Section Category
$category_args = array(
    'description' => 'Header Section.',
    'slug' => 'header',
    'parent' => 0
);

// Insert the Portfolio Section Category
$category_id = wp_insert_term('Header', 'category', $category_args);

function disable_dashboard() {
    if (!is_user_logged_in()) {
        return null;
    }
    if (!current_user_can('administrator') && is_admin()) {
		$link = get_author_posts_url( get_current_user_id() );
		
        wp_redirect($link);
        exit;
    }
}

add_action('admin_init', 'disable_dashboard');

// Email setup
add_action('admin_post_submit_custom_form', 'send_email_on_form_submission');
add_action('admin_post_nopriv_submit_custom_form', 'send_email_on_form_submission');

function send_email_on_form_submission() {
    if(isset($_POST['submit'])) {
        // Get form data
        $name = sanitize_text_field($_POST['name']);
        $to = sanitize_text_field($_POST['to']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_email($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Email parameters
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        // Compose the email content
        $email_content = "Name: $name<br>";
        $email_content .= "Email: $email<br>";
        $email_content .= "Subject: $subject<br>";
        $email_content .= "Message: $message<br>";
        
        // Send the email
        $mail_sent = wp_mail($to, $subject, $email_content, $headers);
        
        // Check if email was sent successfully
        if ($mail_sent) {
            echo 'Email sent successfully!';
        } else {
            echo 'Error sending email.';
        }
    }
}
