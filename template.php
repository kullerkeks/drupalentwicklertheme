<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 
 /**
 *  by Simon: Adds Site-Slogan as Meta Tag description only to front-page
 *            Adds Google Webmaster Tools Google Site Verification
 */
function drupalentwickler_page_alter($page) {
   if (drupal_is_front_page()) {
     $meta_desc = array(
       '#type' => 'html_tag',
       '#tag' => 'meta',
       '#attributes' => array(
          'name' => 'description',
          'content' => variable_get("site_slogan"),
       ) // end array
     ); // end array
     drupal_add_html_head( $meta_desc, 'meta_description' );
     
     // Google Webmasters Tools Verification Code
     $meta_desc = array(
       '#type' => 'html_tag',
       '#tag' => 'meta',
       '#attributes' => array(
         'name' => 'google-site-verification',
         'content' => 'EM1UDU-1FsQ07JVIMWW-Eh0_K_7Bh8G9WWYuXPBUcE4',
       )
     );      
     drupal_add_html_head( $meta_desc, 'google-site-verification' );
     
   } // endif is_frontpage
} // end page alter