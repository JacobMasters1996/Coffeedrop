<?php
/**
 * WP Bootstrap Starter Theme Customizer
 *
 * @package WP_Bootstrap_Starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
function themeslug_sanitize_checkbox( $checked ) {
 */




function sec($attr, $content = ''){
    $attr = shortcode_atts(array(
      'class' => '',
      'id' => ''
    ), $attr);


        if($attr['id']){
          $html = '<section class="section '. $attr['class'] .'" id="'. $attr['class'] .'"><div class="container"><div class="row">';
        }else{
          $html = '<section class="section '. $attr['class'] .'"><div class="container"><div class="row">';
        }

            $html .= do_shortcode($content); 

        $html .= '</div></div></section>';
      


    return $html;
}
add_shortcode( 'sec', 'sec' );


function col($attr, $content = ''){
    $attr = shortcode_atts(array(
      'size' => '',
      'class' => ''
    ), $attr);


        if(!empty($attr['size'])){
          $html = '<div class="col-sm-'. $attr['size'] .' '. $attr['class'] .'">';
        }else{
          $html = '<div class="'. $attr['class'] .'">';
        }

            $html .= do_shortcode($content);

        $html .= '</div>';
      


    return $html;
}
add_shortcode( 'col', 'col' );











