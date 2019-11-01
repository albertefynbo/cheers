<?php

/*
* Plugin Name: Partyvibes Plugin 
* Plugin URI: https://mads-webdesign.dk/cheers/
* Description: This is a WordPress Newsletter Plugin based on HTML5, CSS, JS and PHP
* Version: 1.5.6
* Author: Mads Pedersen
* Author URI: https://mads-webdesign.dk/cheers/
* License: GPL2
*/

function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="velkommen">Velkommen til</h3>';
    $content .= '<img id="logo" src=" '.plugins_url("partyvibesplugin/img/logo.png").' " ';
    $content .= 'alt="Cheers Logo">';
  	$content .= '<h5 id="tilmeld">Tilmeld dig de ugentlige partyvibes</h5>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Skriv din email her..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="LET THE GAME BEGIN!" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="button" value="Nej, jeg er kedelig" name="submitBtn" id="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '<section>';
  	$content .= '<h6 id="min">BE THE BEST HOST</h3>';
  	$content .= '</section>';
  	$content .= '<img id="hand1" src=" '.plugins_url("partyvibesplugin/img/hand1.png").' " ';
    $content .= 'alt="Hånd Logo 1">';
  	$content .= '<img id="hand2" src=" '.plugins_url("partyvibesplugin/img/hand2.png").' " ';
    $content .= 'alt="Hånd Logo 2">';
  	$content .= '</div>';
    
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_partyvibesplugin','newsletter_form');
    # Come back later
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('partyvibesplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://code.jquery.com/jquery-1.7.1.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('partyvibesplugin/js/script.js'), array('jquery'), null, true);
    }
