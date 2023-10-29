<?php 
get_header();

$header_section = new WP_Query(array(
    'post_type' => 'section',
    'category_name' => 'header',
));

while ($header_section->have_posts())  
{
    $header_section->the_post(); 
    get_template_part('includes/header-section');
    break;
}

wp_reset_postdata();

$about_section = new WP_Query(array(
    'post_type' => 'section',
    'category_name' => 'about',
));

while ($about_section->have_posts())  
{
    $about_section->the_post(); 
    get_template_part('includes/about-section');
    break;
}

wp_reset_postdata();

$portfolio_section = new WP_Query(array(
    'post_type' => 'section',
    'category_name' => 'portfolio',
));

while ($portfolio_section->have_posts())  
{
    $portfolio_section->the_post();
    get_template_part('includes/portfolio-section');
    break;
}

wp_reset_postdata();

$contact_section = new WP_Query(array(
    'post_type' => 'section',
    'category_name' => 'contact',
));

while ($contact_section->have_posts())  
{
    $contact_section->the_post();
    get_template_part('includes/contact-section');
    break;
}

wp_reset_postdata();

$footer_section = new WP_Query(array(
    'post_type' => 'section',
    'category_name' => 'footer',
));

while ($footer_section->have_posts())  
{
    $footer_section->the_post();
    get_template_part('includes/footer-section');
    break;
}

get_footer();