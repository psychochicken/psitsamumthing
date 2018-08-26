<?php
//// ==================================================================
// Theme options settings
//// ==================================================================
$themename  = 'Theme';
$shortname  = 'ace_';
$options    = array (

array(
  'name'  =>  'Theme',
  'type'  =>  'header'
),

//// ==================================================================
// General
//// ==================================================================
array( 'type'=>'class', 'class'=>'<div id="general">' ),
array(
  'name'    =>  'Header layout',
  'id'      =>  $shortname.'header_layout',
  'type'    =>  'image',
  'std'     =>  'left-header',
  'options' =>  array(
    array('name'  => 'left-header', 'value' => 'header-left.gif', 'desc'=>'Header beside menu'),
    array('name'  => 'top-header', 'value' => 'header-top.gif', 'desc'=>'Header on top menu'),
    array('name'  => 'below-header', 'value' => 'header-below.gif', 'desc'=>'Header below menu'),
  ),
),
array(
  'name'  => 'Sticky menu',
  'id'    => $shortname.'sticky_menu',
  'type'  => 'checkbox',
  'note'  => 'Check to stick menu on top.',
),
array(
  'name'  => 'Full width blog page',
  'id'    => $shortname.'full_blog',
  'type'  => 'checkbox',
  'note'  => 'Check to use full-width blog page.',
),
/*
array(
  'name'  => 'Infinite scrolling',
  'id'    => $shortname.'infinite_scroll',
  'type'  => 'checkbox',
  'note'  => 'Check to use infinite scroll loading of posts.',
),
*/
array(
  'name'  => 'Open new windows',
  'id'    => $shortname.'new_window',
  'type'  => 'checkbox',
  'note'  => 'Check to open posts in new window on post listing page.',
),
array(
  'name'    =>  'Blog layout',
  'id'      =>  $shortname.'blog_layout',
  'type'    =>  'image',
  'std'     =>  'blog-content-sidebar',
  'options' =>  array(
    array('name'  => 'blog-content-sidebar', 'value' => 'blog-content-sidebar.gif', 'desc'=>'Content - Sidebar'),
    array('name'  => 'blog-sidebar-content', 'value' => 'blog-sidebar-content.gif', 'desc'=>'Sidebar - Content'),
  ),
),
array(
  'name'    =>  'Featured widget location',
  'id'      => $shortname.'featured_location',
  'type'    => 'select',
  'std'     => '',
  'options' => array( 'Top', 'Bottom' ),
  'note'    => '',
),
array(
  'name'  =>  'Footer credit',
  'id'    =>  $shortname.'footer_credit',
  'type'  =>  'textarea',
  'note'  =>  '',
),
array( 'type'=>'class', 'class'=>'</div>' ),

//// ==================================================================
// Colors
//// ==================================================================
array( 'type'=>'class', 'class'=>'<div id="colors">' ),
// ============================== Overall
array(
  'type'  => 'title',
  'note'  => 'Overall',
),
array(
  'name'  => 'Text color',
  'id'    => $shortname.'text_color',
  'type'  => 'color',
  'note'  => 'text_color',
  'std'   => '#666666',
),
array(
  'name'  => 'Border color',
  'id'    => $shortname.'border_color',
  'type'  => 'color',
  'note'  => 'border_color',
  'std'   => '#eeeeee',
),
// ============================== Newsletter
array(
  'type'  => 'title',
  'note'  => 'Newsletter',
),
array(
  'name'  => 'Background color',
  'id'    => $shortname.'newsletter_bg',
  'type'  => 'color',
  'note'  => 'newsletter_bg',
  'std'   => '#ffffff',
),
array(
  'name'  => 'Text color',
  'id'    => $shortname.'newsletter_text',
  'type'  => 'color',
  'note'  => 'newsletter_text',
  'std'   => '#666666',
),
// ============================== Menu
array(
  'type'  => 'title',
  'note'  => 'Menu',
),
array(
  'name'  => 'Menu link color',
  'id'    => $shortname.'nav_link',
  'type'  => 'color',
  'note'  => 'nav_link',
  'std'   => '#000000',
),
array(
  'name'  => 'Menu link hover color',
  'id'    => $shortname.'nav_link_hover',
  'type'  => 'color',
  'note'  => 'nav_link_hover',
  'std'   => '#ffa794',
),
// ============================== Slider
array(
  'type'  => 'title',
  'note'  => 'Slider',
),
array(
  'name'  => 'Sldier background color',
  'id'    => $shortname.'slider_bg',
  'type'  => 'color',
  'note'  => 'slider_bg',
  'std'   => '#fff1ee',
),
array(
  'name'  => 'Arrow background color',
  'id'    => $shortname.'arrow_bg',
  'type'  => 'color',
  'note'  => 'arrow_bg',
  'std'   => '#000000',
),
array(
  'name'  => 'Caption text color',
  'id'    => $shortname.'caption_text',
  'type'  => 'color',
  'note'  => 'caption_text',
  'std'   => '#000000',
),
array(
  'name'  => 'Caption background color',
  'id'    => $shortname.'caption_bg',
  'type'  => 'color',
  'note'  => 'caption_bg',
  'std'   => '#ffffff',
),
// ============================== Page/Post Title
array(
  'type'  => 'title',
  'note'  => 'Page/Post Title',
),
array(
  'name'  => 'Page title color',
  'id'    => $shortname.'page_page_title',
  'type'  => 'color',
  'note'  => 'page_page_title',
  'std'   => '#000000',
),
array(
  'name'  => 'Post title link color',
  'id'    => $shortname.'page_post_title_link',
  'type'  => 'color',
  'note'  => 'page_post_title_link',
  'std'   => '#000000',
),
array(
  'name'  => 'Post title link hover color',
  'id'    => $shortname.'page_post_title_link_hover',
  'type'  => 'color',
  'note'  => 'page_post_title_link_hover',
  'std'   => '#fc4754',
),
// ============================== Comment
array(
  'type'  => 'title',
  'note'  => 'Comment Button',
),
array(
  'name'  => 'Comment button color',
  'id'    => $shortname.'comment_button',
  'type'  => 'color',
  'note'  => 'comment_button',
  'std'   => '#000000',
),
array(
  'name'  => 'Comment button text color',
  'id'    => $shortname.'comment_button_text',
  'type'  => 'color',
  'note'  => 'comment_button_text',
  'std'   => '#ffffff',
),
array(
  'name'  => 'Comment hover button color',
  'id'    => $shortname.'comment_button_hover',
  'type'  => 'color',
  'note'  => 'comment_button_hover',
  'std'   => '#ffa794',
),
array(
  'name'  => 'Comment hover button text color',
  'id'    => $shortname.'comment_button_text_hover',
  'type'  => 'color',
  'note'  => 'comment_button_text_hover',
  'std'   => '#ffffff',
),
// ============================== Sidebar
array(
  'type'  => 'title',
  'note'  => 'Sidebar Widget',
),
array(
  'name'  => 'Sidebar widget title color',
  'id'    => $shortname.'sidebar_widget_title',
  'type'  => 'color',
  'note'  => 'sidebar_widget_title',
  'std'   => '#000000',
),
// ============================== Footer
array(
  'type'  => 'title',
  'note'  => 'Footer',
),
array(
  'name'  => 'Footer background color',
  'id'    => $shortname.'footer_background',
  'type'  => 'color',
  'note'  => 'footer_background',
  'std'   => '#ffffff',
),
array(
  'name'  => 'Footer widget title color',
  'id'    => $shortname.'footer_widget_title',
  'type'  => 'color',
  'note'  => 'footer_widget_title',
  'std'   => '#000000',
),
array(
  'name'  => 'Footer text color',
  'id'    => $shortname.'footer_text',
  'type'  => 'color',
  'note'  => 'footer_text',
  'std'   => '#666666',
),
array(
  'name'  => 'Footer credit background color',
  'id'    => $shortname.'footer_credit_background',
  'type'  => 'color',
  'note'  => 'footer_credit_background',
  'std'   => '#fff1ee',
),
array(
  'name'  => 'Footer credit text color',
  'id'    => $shortname.'footer_credit_text',
  'type'  => 'color',
  'note'  => 'footer_credit_text',
  'std'   => '#666666',
),
// ============================== Links
array(
  'type'  => 'title',
  'note'  => 'Links',
),
array(
  'name'  => 'Link color',
  'id'    => $shortname.'link',
  'type'  => 'color',
  'note'  => 'link',
  'std'   => '#ffa794',
),
array(
  'name'  => 'Link hover color',
  'id'    => $shortname.'link_hover',
  'type'  => 'color',
  'note'  => 'link_hover',
  'std'   => '#000000',
),
// ============================== Heading
array(
  'type'  => 'title',
  'note'  => 'Heading',
),
array(
  'name'  => 'H1 color',
  'id'    => $shortname.'h1',
  'type'  => 'color',
  'note'  => 'h1',
  'std'   => '#000000',
),
array(
  'name'  => 'H2 color',
  'id'    => $shortname.'h2',
  'type'  => 'color',
  'note'  => 'h2',
  'std'   => '#000000',
),
array(
  'name'  => 'H3 color',
  'id'    => $shortname.'h3',
  'type'  => 'color',
  'note'  => 'h3',
  'std'   => '#000000',
),
array(
  'name'  => 'H4 color',
  'id'    => $shortname.'h4',
  'type'  => 'color',
  'note'  => 'h4',
  'std'   => '#555555',
),
array(
  'name'  => 'H5 color',
  'id'    => $shortname.'h5',
  'type'  => 'color',
  'note'  => 'h5',
  'std'   => '#555555',
),
array(
  'name'  => 'H6 color',
  'id'    => $shortname.'h6',
  'type'  => 'color',
  'note'  => 'h6',
  'std'   => '#555555',
),
// ============================== Button
array(
  'type'  => 'title',
  'note'  => 'Button',
),
array(
  'name'  => 'Background color',
  'id'    => $shortname.'button_bg',
  'type'  => 'color',
  'note'  => 'button_bg',
  'std'   => '#000000',
),
array(
  'name'  => 'Border color',
  'id'    => $shortname.'button_border',
  'type'  => 'color',
  'note'  => 'button_border',
  'std'   => '#000000',
),
array(
  'name'  => 'Text color',
  'id'    => $shortname.'button_text',
  'type'  => 'color',
  'note'  => 'button_text',
  'std'   => '#ffffff',
),
array(
  'name'  => 'Hover background color',
  'id'    => $shortname.'button_bg_hover',
  'type'  => 'color',
  'note'  => 'button_bg_hover',
  'std'   => '#ffa794',
),
array(
  'name'  => 'Hover border color',
  'id'    => $shortname.'button_border_hover',
  'type'  => 'color',
  'note'  => 'button_border_hover',
  'std'   => '#ffa794',
),
array(
  'name'  => 'Hover text color',
  'id'    => $shortname.'button_text_hover',
  'type'  => 'color',
  'note'  => 'button_text_hover',
  'std'   => '#ffffff',
),
// ============================== Accordion
array(
  'type'  => 'title',
  'note'  => 'Accordion',
),
array(
  'name'  => 'Background color',
  'id'    => $shortname.'accordion_bg',
  'type'  => 'color',
  'note'  => 'accordion_bg',
  'std'   => '#000000',
),
array(
  'name'  => 'Text color',
  'id'    => $shortname.'accordion_text',
  'type'  => 'color',
  'note'  => 'accordion_text',
  'std'   => '#ffffff',
),
array(
  'name'  => 'Hover background color',
  'id'    => $shortname.'accordion_bg_hover',
  'type'  => 'color',
  'note'  => 'accordion_bg_hover',
  'std'   => '#000000',
),
array(
  'name'  => 'Hover text color',
  'id'    => $shortname.'accordion_text_hover',
  'type'  => 'color',
  'note'  => 'accordion_text_hover',
  'std'   => '#ffffff',
),
// ============================== Social Media
array(
  'type'  => 'title',
  'note'  => 'Widget Social Media Icons',
),
array(
  'name'  => 'Twitter background color',
  'id'    => $shortname.'widget_twitter_bg',
  'type'  => 'color',
  'note'  => 'widget_twitter_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Twitter hover background color',
  'id'    => $shortname.'widget_twitter_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_twitter_bg_hover',
  'std'   => '#269dd5',
),
array(
  'name'  => 'Facebook background color',
  'id'    => $shortname.'widget_fb_bg',
  'type'  => 'color',
  'note'  => 'widget_fb_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Facebook hover background color',
  'id'    => $shortname.'widget_fb_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_fb_bg_hover',
  'std'   => '#0c42b2',
),
array(
  'name'  => 'Email background color',
  'id'    => $shortname.'widget_email_bg',
  'type'  => 'color',
  'note'  => 'widget_email_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Email hover background color',
  'id'    => $shortname.'widget_email_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_email_bg_hover',
  'std'   => '#aaaaaa',
),
array(
  'name'  => 'RSS Feed background color',
  'id'    => $shortname.'widget_rss_bg',
  'type'  => 'color',
  'note'  => 'widget_rss_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'RSS Feed hover background color',
  'id'    => $shortname.'widget_rss_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_rss_bg_hover',
  'std'   => '#f49000',
),
array(
  'name'  => 'Google Plus background color',
  'id'    => $shortname.'widget_google_bg',
  'type'  => 'color',
  'note'  => 'widget_google_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Google Plus hover background color',
  'id'    => $shortname.'widget_google_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_google_bg_hover',
  'std'   => '#fd3000',
),
array(
  'name'  => 'Flickr background color',
  'id'    => $shortname.'widget_flickr_bg',
  'type'  => 'color',
  'note'  => 'widget_flickr_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Flickr hover background color',
  'id'    => $shortname.'widget_flickr_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_flickr_bg_hover',
  'std'   => '#fc0077',
),
array(
  'name'  => 'Linkedin background color',
  'id'    => $shortname.'widget_linkedin_bg',
  'type'  => 'color',
  'note'  => 'widget_linkedin_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Linkedin hover background color',
  'id'    => $shortname.'widget_linkedin_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_linkedin_bg_hover',
  'std'   => '#0d5a7b',
),
array(
  'name'  => 'YouTube background color',
  'id'    => $shortname.'widget_youtube_bg',
  'type'  => 'color',
  'note'  => 'widget_youtube_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'YouTube hover background color',
  'id'    => $shortname.'widget_youtube_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_youtube_bg_hover',
  'std'   => '#ff0000',
),
array(
  'name'  => 'Vimeo background color',
  'id'    => $shortname.'widget_vimeo_bg',
  'type'  => 'color',
  'note'  => 'widget_vimeo_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Vimeo hover background color',
  'id'    => $shortname.'widget_vimeo_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_vimeo_bg_hover',
  'std'   => '#00c1f8',
),
array(
  'name'  => 'Instagram background color',
  'id'    => $shortname.'widget_instagram_bg',
  'type'  => 'color',
  'note'  => 'widget_instagram_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Instagram hover background color',
  'id'    => $shortname.'widget_instagram_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_instagram_bg_hover',
  'std'   => '#194f7a',
),
array(
  'name'  => 'BlogLovin background color',
  'id'    => $shortname.'widget_bloglovin_bg',
  'type'  => 'color',
  'note'  => 'widget_bloglovin_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'BlogLovin hover background color',
  'id'    => $shortname.'widget_bloglovin_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_bloglovin_bg_hover',
  'std'   => '#00c4fd',
),
array(
  'name'  => 'Pinterest background color',
  'id'    => $shortname.'widget_pinterest_bg',
  'type'  => 'color',
  'note'  => 'widget_pinterest_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Pinterest hover background color',
  'id'    => $shortname.'widget_pinterest_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_pinterest_bg_hover',
  'std'   => '#c70505',
),
array(
  'name'  => 'Tumblr background color',
  'id'    => $shortname.'widget_tumblr_bg',
  'type'  => 'color',
  'note'  => 'widget_tumblr_bg',
  'std'   => '#cccccc',
),
array(
  'name'  => 'Tumblr hover background color',
  'id'    => $shortname.'widget_tumblr_bg_hover',
  'type'  => 'color',
  'note'  => 'widget_tumblr_bg_hover',
  'std'   => '#304d6b',
),
array( 'type'=>'class', 'class'=>'</div>' ),

//// ==================================================================
// Newsletter
//// ==================================================================
array('type'=>'class','class'=>'<div id="newsletter">'),
array(
  'name'  => 'Enable newsletter form',
  'id'    => $shortname.'enable_newsletter',
  'type'  => 'checkbox',
  'note'  => 'Enable newsletter form area on header.',
),
array(
  'name'    =>  'Newsletter location',
  'id'      => $shortname.'newsletter_location',
  'type'    => 'select',
  'std'     => '',
  'options' => array( 'Top', 'Bottom' ),
  'note'    => '',
),
array(
  'name'  => 'Show newsletter on homepage only',
  'id'    => $shortname.'enable_newsletter_home',
  'type'  => 'checkbox',
  'note'  => 'Show newsletter on homepage <strong>ONLY</strong>',
),
array(
  'name'  => 'Newsletter',
  'id'    => $shortname.'newsletter',
  'type'  => 'textarea',
  'note'  => 'Kindly use appropriate class for your newsletter form, such as:<br />
  <strong>.header-newsletter</strong> for &lt;form&gt;<br />
  <strong>.header-newsletter-input</strong> for &lt;input&gt;<br />
  <strong>.header-newsletter-button</strong> for submit button<br />
  A quick example of form:<br />
  &lt;form action="" method="post" class="header-newsletter"&gt;<br />
  &lt;input type="text" class="header-newsletter-input" placeholder="Name" /&gt;<br />
  &lt;input type="email" class="header-newsletter-input" placeholder="Email" /&gt;<br />
  &lt;input type="submit" class="header-newsletter-button" value="Subscribe" /&gt;<br />
  &lt;/form&gt;',
),
array('type'=>'class','class'=>'</div>'),

//// ==================================================================
// Extra inputs
//// ==================================================================
array( 'type'=>'class', 'class'=>'<div id="extra">' ),
array(
  'name'  => 'Header script(s)',
  'id'    => $shortname.'header_scripts',
  'type'  => 'textarea',
  'note'  => 'Place your necessary code here, anything that needs to be placed before <strong>&#60;/head&#62;</strong>.',
),
array(
  'name'  => 'Footer script(s)',
  'id'    => $shortname.'footer_scripts',
  'type'  => 'textarea',
  'note'  => 'Place your necessary code here, anything that needs to be placed before <strong>&#60;/body&#62;</strong>.',
),
array(
  'name'  => 'Header banner',
  'id'    => $shortname.'header_banner',
  'type'  => 'textarea',
  'note'  => 'Show banner ad on top of the site.',
),
array(
  'name'  => 'Custom CSS',
  'id'    => $shortname.'css',
  'type'  => 'textarea',
  'note'  => 'Add some custom CSS to your theme.',
),
array('type'=>'class','class'=>'</div>'),

//// ==================================================================
// Slider
//// ==================================================================
array('type'=>'class','class'=>'<div id="slider">'),
array(
  'name'  => 'Enable slider',
  'id'    => $shortname.'feature_enable',
  'type'  => 'checkbox',
  'note'  => '<strong>Enable</strong> slider.',
),
array(
  'name'  => 'Show slider on homepage only',
  'id'    => $shortname.'feature_enable_home',
  'type'  => 'checkbox',
  'note'  => 'Show slider on homepage <strong>ONLY</strong>',
),
array(
  'name'  => 'Show Caption',
  'id'    => $shortname.'feature_title_enable',
  'type'  => 'checkbox',
  'note'  => 'Show <strong>caption</strong> on slider',
),
array(
  'name'    => 'Pause',
  'id'      => $shortname.'featured_slide_pause',
  'type'    => 'select',
  'std'     => '3000',
  'options' => array( '1000', '2000', '3000', '4000', '5000' ),
  'note'    => 'Time pause on each slide. 1000 = 1 second.',
),
array(
  'name'    => 'Speed',
  'id'      => $shortname.'featured_slide_speed',
  'type'    => 'select',
  'std'     => '300',
  'options' => array( '100', '200', '300', '400', '500', '1000', ),
  'note'    => 'Speed of transition. 1000 = 1 second.',
),
array(
  'name'  => 'Auto slider',
  'id'    => $shortname.'featured_slide_sliding',
  'type'  => 'checkbox',
  'note'  => 'Check to have an <strong>auto</strong> slider.',
),
array(
  'name'  => 'Pager navigation',
  'id'    => $shortname.'featured_slide_pager_nav',
  'type'  => 'checkbox',
  'note'  => 'Check to show <strong>pager navigation (<em>dots</em>)</strong> on slider.',
),
array(
  'name'  => 'Slider navigation',
  'id'    => $shortname.'featured_slide_nav',
  'type'  => 'checkbox',
  'note'  => 'Show <strong>left and right navigation</strong> on slider.',
),
array( 'type'=>'class', 'class'=>'</div>' ),

//// ==================================================================
// Entry
//// ==================================================================
array( 'type'=>'class', 'class'=>'<div id="entry">' ),
array(
  'name'  => 'Enable Breadcrumb navigation',
  'id'    => $shortname.'enable_breadcrumb',
  'type'  => 'checkbox',
  'note'  => 'Enable <strong>breadcrumb navigation</strong>',
),
array(
  'name'  => 'Post banner',
  'id'    => $shortname.'post_banner',
  'type'  => 'textarea',
  'note'  => 'Insert banner at the bottom of a blog post',
),
array(
  'name'  => 'Hide post date',
  'id'    => $shortname.'hide_date',
  'type'  => 'checkbox',
  'note'  => 'Check to <strong>hide date</strong> on blog post.',
),
array(
  'name'  => 'Hide post category',
  'id'    => $shortname.'hide_category',
  'type'  => 'checkbox',
  'note'  => 'Check to <strong>hide category</strong> on blog post.',
),
array(
  'name'  => 'Hide post comment',
  'id'    => $shortname.'hide_comment',
  'type'  => 'checkbox',
  'note'  => 'Check to <strong>hide disabled comment notification</strong> on blog post.',
),
array(
  'name'  => 'Show post tags',
  'id'    => $shortname.'show_tag',
  'type'  => 'checkbox',
  'note'  => 'Check to <strong>show post tags</strong> on blog post.',
),
array(
  'name'  => 'Show blog author',
  'id'    => $shortname.'blog_author',
  'type'  => 'checkbox',
  'note'  => 'Check to <strong>show blog author</strong> on blog post.',
),
array(
  'name'  => 'Show blog author biography',
  'id'    => $shortname.'blog_author_bio',
  'type'  => 'checkbox',
  'note'  => 'Check to <strong>show blog author biography</strong> on blog post.',
),
array(
  'name'  => 'Author signature',
  'id'    => $shortname.'post_signature',
  'std'   => '',
  'type'  => 'upload',
  'note'  => 'Upload a signature at the bottom of a blog post',
  'size'  => 'any appropriate',
),
array(
  'name'  => 'Use excerpt summary',
  'id'    => $shortname.'enable_excerpt',
  'type'  => 'checkbox',
  'note'  => 'Enable <strong>excerpt entry</strong>',
),
array(
  'name'  => 'Enable related post',
  'id'    => $shortname.'enable_related',
  'type'  => 'checkbox',
  'note'  => 'Enable <strong>related posts</strong>. <em>Works by relevant "Post Tag"</em>',
),
array(
  'name'  => 'Enable feature thumbnail',
  'id'    => $shortname.'enable_post_thumbnail',
  'type'  => 'checkbox',
  'note'  => 'Enable <strong>Post Thumbnail</strong>',
),
array(
  'id'    => $shortname.'thumb_width',
  'type'  => 'thumb',
  'std'   => '100',
  'note'  => 'Width',
),
array(
  'id'    => $shortname.'thumb_height',
  'type'  => 'thumb',
  'std'   => '100',
  'note'  => 'Height',
),
array( 'type'=>'class', 'class'=>'<div style=\"height: 10px; clear: both;\">&nbsp;</div>' ),
array( 'type'=>'class', 'class'=>'<hr />' ),
array( 'type'=>'class', 'class'=>'</div>' ),

//// ==================================================================
// Social media
//// ==================================================================
array( 'type'=>'class', 'class'=>'<div id="social-media">' ),
array(
  'name'  => 'Enable social media icons',
  'id'    => $shortname.'top_icons',
  'type'  => 'checkbox',
  'note'  => 'Show social media icons on top header',
),
array(
  'name'	=> 'Background color',
  'id'		=> $shortname.'icons_background',
  'type'	=> 'color',
  'note'	=> 'icons_background',
  'std'		=> '#000000',
),
array(
  'name'  => 'Links target',
  'id'    => $shortname.'icons_new_windows',
  'type'  => 'checkbox',
  'note'  => 'Open links in new windows',
),
array(
  'name'	=> 'Twitter profile URL',
  'id'		=> $shortname.'twitter',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Twitter icon background color',
  'id'		=> $shortname.'twitter_bg',
  'type'	=> 'color',
  'note'	=> 'twitter_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Twitter icon hover background color',
  'id'		=> $shortname.'twitter_bg_hover',
  'type'	=> 'color',
  'note'	=> 'twitter_bg',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Facebook profile URL',
  'id'		=> $shortname.'facebook',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Facebook icon background color',
  'id'		=> $shortname.'facebook_bg',
  'type'	=> 'color',
  'note'	=> 'facebook_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Facebook icon hover background color',
  'id'		=> $shortname.'facebook_bg_hover',
  'type'	=> 'color',
  'note'	=> 'facebook_bg_hover',
  'std'	=> '#000000',
),
array(
  'name'	=> 'Pinterest profile URL',
  'id'		=> $shortname.'pinterest',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Pinterest icon background color',
  'id'		=> $shortname.'pinterest_bg',
  'type'	=> 'color',
  'note'	=> 'pinterest_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Pinterest icon hover background color',
  'id'		=> $shortname.'pinterest_bg_hover',
  'type'	=> 'color',
  'note'	=> 'pinterest_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Instagram profile URL',
  'id'		=> $shortname.'instagram',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Instagram icon background color',
  'id'		=> $shortname.'instagram_bg',
  'type'	=> 'color',
  'note'	=> 'instagram_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Instagram icon hover background color',
  'id'		=> $shortname.'instagram_bg_hover',
  'type'	=> 'color',
  'note'	=> 'instagram_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Google Plus profile URL',
  'id'		=> $shortname.'google_plus',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Google Plus icon background color',
  'id'		=> $shortname.'google_plus_bg',
  'type'	=> 'color',
  'note'	=> 'google_plus_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Google Plus icon hover background color',
  'id'		=> $shortname.'google_plus_bg_hover',
  'type'	=> 'color',
  'note'	=> 'google_plus_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Flickr profile URL',
  'id'		=> $shortname.'flickr',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Flickr icon background color',
  'id'		=> $shortname.'flickr_bg',
  'type'	=> 'color',
  'note'	=> 'flickr_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Flickr icon hover background color',
  'id'		=> $shortname.'flickr_bg_hover',
  'type'	=> 'color',
  'note'	=> 'flickr_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Linkedin profile URL',
  'id'		=> $shortname.'linkedin',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Linkedin icon background color',
  'id'		=> $shortname.'linkedin_bg',
  'type'	=> 'color',
  'note'	=> 'linkedin_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Linkedin icon hover background color',
  'id'		=> $shortname.'linkedin_bg_hover',
  'type'	=> 'color',
  'note'	=> 'linkedin_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'YouTube profile URL',
  'id'		=> $shortname.'youtube',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'YouTube icon background color',
  'id'		=> $shortname.'youtube_bg',
  'type'	=> 'color',
  'note'	=> 'youtube_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'YouTube icon hover background color',
  'id'		=> $shortname.'youtube_bg_hover',
  'type'	=> 'color',
  'note'	=> 'youtube_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Vimeo profile URL',
  'id'		=> $shortname.'vimeo',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Vimeo icon background color',
  'id'		=> $shortname.'vimeo_bg',
  'type'	=> 'color',
  'note'	=> 'vimeo_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Vimeo icon hover background color',
  'id'		=> $shortname.'vimeo_bg_hover',
  'type'	=> 'color',
  'note'	=> 'vimeo_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Bloglovin URL',
  'id'		=> $shortname.'bloglovin',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Bloglovin icon background color',
  'id'		=> $shortname.'bloglovin_bg',
  'type'	=> 'color',
  'note'	=> 'bloglovin_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Bloglovin icon hover background color',
  'id'		=> $shortname.'bloglovin_bg_hover',
  'type'	=> 'color',
  'note'	=> 'bloglovin_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Tumblr URL',
  'id'		=> $shortname.'tumblr',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Tumblr icon background color',
  'id'		=> $shortname.'tumblr_bg',
  'type'	=> 'color',
  'note'	=> 'tumblr_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Tumblr icon hover background color',
  'id'		=> $shortname.'tumblr_bg_hover',
  'type'	=> 'color',
  'note'	=> 'tumblr_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'RSS Feed URL',
  'id'		=> $shortname.'rss',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'RSS Feed icon background color',
  'id'		=> $shortname.'rss_bg',
  'type'	=> 'color',
  'note'	=> 'rss_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'RSS Feed icon hover background color',
  'id'		=> $shortname.'rss_bg_hover',
  'type'	=> 'color',
  'note'	=> 'rss_bg_hover',
  'std'		=> '#000000',
),
array(
  'name'	=> 'Email address',
  'id'		=> $shortname.'email',
  'type'	=> 'text',
  'note'	=> '',
),
array(
  'name'	=> 'Email icon background color',
  'id'		=> $shortname.'email_bg',
  'type'	=> 'color',
  'note'	=> 'email_bg',
  'std'		=> '#ffffff',
),
array(
  'name'	=> 'Email icon hover background color',
  'id'		=> $shortname.'email_bg_hover',
  'type'	=> 'color',
  'note'	=> 'email_bg_hover',
  'std'		=> '#000000',
),
array( 'type'=>'class', 'class'=>'</div>' ),

//// ==================================================================
// 404 Error
//// ==================================================================
array( 'type'=>'class', 'class'=>'<div id="404">' ),
array(
  'name'  => '404 Page Content',
  'id'    => $shortname.'404_page',
  'type'  => 'editor',
  'note'  => '',
),
array( 'type'=>'class', 'class'=>'</div>' ),

//// ==================================================================
// WooCommerce
//// ==================================================================
array( 'type'=>'class', 'class'=>'<div id="woocommerce">' ),
array(
  'name'  => '',
  'id'    => $shortname.'woo_cart_float',
  'type'  => 'checkbox',
  'note'  => 'Show floating cart icon on top right',
),
array(
  'name'  => '',
  'id'    => $shortname.'woo_breadcrumb',
  'type'  => 'checkbox',
  'note'  => 'Display shop page breadcrumb',
),
array(
  'name'  => '',
  'id'    => $shortname.'woo_full_width',
  'type'  => 'checkbox',
  'note'  => 'Remove sidebar on product page',
),
array(
  'name'    => 'WooCommerce product per row',
  'id'      => $shortname.'woo_number_per_row',
  'type'    => 'select',
  'std'     => '',
  'options' => array( '1', '2', '3', '4' ),
  'note'    => 'Select a number for the number of product per row.',
),
array(
  'name'	=> 'WooCommerce product per page',
  'id'		=> $shortname.'woo_number_per_page',
  'type'	=> 'text',
  'note'	=> '',
),
array( 'type'=>'class', 'class'=>'</div>' ),


);