<?php
/*
Plugin Name: MarketPress Statistics
Plugin URI: magazi.org
Description: Shows MarketPrerss Statistics using the GooGle Charts Library (https://google-developers.appspot.com/chart/)
Version: 0.2
Author: Aristeides Stathopoulos
*/

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'business_marketpress_stats_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'business_marketpress_stats_remove' );

function business_marketpress_stats_install() {
}

function business_marketpress_stats_remove() {
}

add_action('admin_menu', 'business_marketpress_stats_admin_menu');

function business_marketpress_stats_admin_menu() {
  add_menu_page('Sales Statistics', 'Sales Statistics', 'administrator', 'business_marketpress_stats', 'business_marketpress_stats_page');
}

function business_marketpress_stats_page() {
  
  if ( class_exists( 'MarketPress' ) ) {
    if ( function_exists('current_user_can') && !current_user_can('manage_options') )
  	  die(__('Cheatin&#8217; uh?'));

  global $wpdb, $mp;
  $year = date('Y');
  $month = date('m');
  $month0 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");

  $year = date('Y', strtotime('-1 months'));
  $month = date('m', strtotime('-1 months'));
  $month1 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-2 months'));
  $month = date('m', strtotime('-2 months'));
  $month2 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-3 months'));
  $month = date('m', strtotime('-3 months'));
  $month3 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-4 months'));
  $month = date('m', strtotime('-4 months'));
  $month4 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-5 months'));
  $month = date('m', strtotime('-5 months'));
  $month5 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-6 months'));
  $month = date('m', strtotime('-6 months'));
  $month6 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-7 months'));
  $month = date('m', strtotime('-7 months'));
  $month7 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-8 months'));
  $month = date('m', strtotime('-8 months'));
  $month8 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-9 months'));
  $month = date('m', strtotime('-9 months'));
  $month9 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-10 months'));
  $month = date('m', strtotime('-10 months'));
  $month10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-11 months'));
  $month = date('m', strtotime('-11 months'));
  $month11 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-12 months'));
  $month = date('m', strtotime('-12 months'));
  $month12 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $totality = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total'");  
  

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('d'));
  $day0 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-1 days'));
  $day1 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-2 days'));
  $day2 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-3 days'));
  $day3 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-4 days'));
  $day4 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-5 days'));
  $day5 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-6 days'));
  $day6 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-7 days'));
  $day7 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-8 days'));
  $day8 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-9 days'));
  $day9 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-10 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-11 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-12 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-13 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-14 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-15 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-16 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-17 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-18 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-19 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-20 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-21 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-22 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-23 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-24 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-25 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-26 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-27 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-28 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-29 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('Y'));
  $month = date('m', strtotime('m'));
  $day = date('d', strtotime('-30 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  if (!empty($month0->count)){$month0count = $month0->count;} else {$month0count = 0;}
  if (!empty($month1->count)){$month1count = $month1->count;} else {$month1count = 0;}
  if (!empty($month2->count)){$month2count = $month2->count;} else {$month2count = 0;}
  if (!empty($month3->count)){$month3count = $month3->count;} else {$month3count = 0;}
  if (!empty($month4->count)){$month4count = $month4->count;} else {$month4count = 0;}
  if (!empty($month5->count)){$month5count = $month5->count;} else {$month5count = 0;}
  if (!empty($month6->count)){$month6count = $month6->count;} else {$month6count = 0;}
  if (!empty($month7->count)){$month7count = $month7->count;} else {$month7count = 0;}
  if (!empty($month8->count)){$month8count = $month8->count;} else {$month8count = 0;}
  if (!empty($month9->count)){$month9count = $month9->count;} else {$month9count = 0;}
  if (!empty($month10->count)){$month10count = $month10->count;} else {$month10count = 0;}
  if (!empty($month11->count)){$month11count = $month11->count;} else {$month11count = 0;}
  if (!empty($month12->count)){$month12count = $month12->count;} else {$month12count = 0;}
  if (!empty($totality->count)){$totalitycount = $totality->count;} else {$totalitycount = 0;}
      
  if (!empty($month0->total)){$month0total = $month0->total;} else {$month0total = 0;}
  if (!empty($month1->total)){$month1total = $month1->total;} else {$month1total = 0;}
  if (!empty($month2->total)){$month2total = $month2->total;} else {$month2total = 0;}
  if (!empty($month3->total)){$month3total = $month3->total;} else {$month3total = 0;}
  if (!empty($month4->total)){$month4total = $month4->total;} else {$month4total = 0;}
  if (!empty($month5->total)){$month5total = $month5->total;} else {$month5total = 0;}
  if (!empty($month6->total)){$month6total = $month6->total;} else {$month6total = 0;}
  if (!empty($month7->total)){$month7total = $month7->total;} else {$month7total = 0;}
  if (!empty($month8->total)){$month8total = $month8->total;} else {$month8total = 0;}
  if (!empty($month9->total)){$month9total = $month9->total;} else {$month9total = 0;}
  if (!empty($month10->total)){$month10total = $month10->total;} else {$month10total = 0;}
  if (!empty($month11->total)){$month11total = $month11->total;} else {$month11total = 0;}
  if (!empty($month12->total)){$month12total = $month12->total;} else {$month12total = 0;}
  if (!empty($totality->total)){$totalitytotal = $totality->total;} else {$totalitytotal = 0;}
      
  if (!empty($month0->average)){$month0average = $month0->average;} else {$month0average = 0;}
  if (!empty($month1->average)){$month1average = $month1->average;} else {$month1average = 0;}
  if (!empty($month2->average)){$month2average = $month2->average;} else {$month2average = 0;}
  if (!empty($month3->average)){$month3average = $month3->average;} else {$month3average = 0;}
  if (!empty($month4->average)){$month4average = $month4->average;} else {$month4average = 0;}
  if (!empty($month5->average)){$month5average = $month5->average;} else {$month5average = 0;}
  if (!empty($month6->average)){$month6average = $month6->average;} else {$month6average = 0;}
  if (!empty($month7->average)){$month7average = $month7->average;} else {$month7average = 0;}
  if (!empty($month8->average)){$month8average = $month8->average;} else {$month8average = 0;}
  if (!empty($month9->average)){$month9average = $month9->average;} else {$month9average = 0;}
  if (!empty($month10->average)){$month10average = $month10->average;} else {$month10average = 0;}
  if (!empty($month11->average)){$month11average = $month11->average;} else {$month11average = 0;}
  if (!empty($month12->average)){$month12average = $month12->average;} else {$month12average = 0;}
  if (!empty($totality->average)){$totalityaverage = $totality->average;} else {$totalityaverage = 0;}
      
  
  ?>

  <table style="width: 100%;">
    <tr>
      <td>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
          google.load("visualization", "1", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Month', 'Total'],
              ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php echo $month12total; ?>],
              ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php echo $month11total; ?>],
              ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php echo $month10total; ?>],
              ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php echo $month9total; ?>],
              ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php echo $month8total; ?>],
              ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php echo $month7total; ?>],
              ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php echo $month6total; ?>],
              ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php echo $month5total; ?>],
              ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php echo $month4total; ?>],
              ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php echo $month3total; ?>],
              ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php echo $month2total; ?>],
              ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php echo $month1total; ?>],
              ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php echo $month0total; ?>]
            ]);
            var options = {
              title: 'Total Sales',
              colors: ['#000000'],
              hAxis: {title: 'Year', titleTextStyle: {color: '#000000'}}
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('total_chart'));
            chart.draw(data, options);
          }
        </script>
        <div id="total_chart" style="width: 100%; height: 350px;"></div>

        <script type="text/javascript">
          google.load("visualization", "1", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Month', 'Average'],
              ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php echo $month12average; ?>],
              ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php echo $month11average; ?>],
              ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php echo $month10average; ?>],
              ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php echo $month9average; ?>],
              ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php echo $month8average; ?>],
              ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php echo $month7average; ?>],
              ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php echo $month6average; ?>],
              ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php echo $month5average; ?>],
              ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php echo $month4average; ?>],
              ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php echo $month3average; ?>],
              ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php echo $month2average; ?>],
              ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php echo $month1average; ?>],
              ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php echo $month0average; ?>]
            ]);
            var options = {
              title: 'Sales Average',
              colors: ['#000000'],
              hAxis: {title: 'Year', titleTextStyle: {color: '#000000'}}
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('average_chart'));
            chart.draw(data, options);
          }
        </script>
        <div id="average_chart" style="width: 100%; height: 200px;"></div>

        <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Month', 'Count'],
            ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php echo $month12count; ?>],
            ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php echo $month11count; ?>],
            ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php echo $month10count; ?>],
            ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php echo $month9count; ?>],
            ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php echo $month8count; ?>],
            ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php echo $month7count; ?>],
            ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php echo $month6count; ?>],
            ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php echo $month5count; ?>],
            ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php echo $month4count; ?>],
            ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php echo $month3count; ?>],
            ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php echo $month2count; ?>],
            ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php echo $month1count; ?>],
            ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php echo $month0count; ?>]
          ]);
          var options = {
            title: 'Number of Sales',
            colors: ['#000000'],
            hAxis: {title: 'Year', titleTextStyle: {color: '#000000'}}
          };
          var chart = new google.visualization.LineChart(document.getElementById('count_chart'));
          chart.draw(data, options);
        }
        </script>
        <div id="count_chart" style="width: 100%; height: 200px;"></div>
        </div>
      </td>
      <td style="width: 400px; vertical-align: top; text-align: center;">
          <table>
            <tr style="border-bottom: 1px solid #dedede;">
              <td colspan="2" style="border-bottom: 1px solid #dedede; padding: 15px 0;">
                <h2 style="font-size: 30px;">Total Revenue:</h2><br / >
                <span style="font-size: 60px; font-weight: bold;"><?php echo $mp->format_currency('', $totalitytotal); ?></span>
              </td>
            </tr>
            <tr>
              <td style="border-bottom: 1px solid #dedede; padding: 5px;">
                <p style="font-size: 15px;">Total Sales:</h2></p>
                <p style="font-size: 20px; font-weight: bold;"><?php echo $totalitycount; ?></p>
              </td>
              <td style="border-bottom: 1px solid #dedede; padding: 5px;">
                <p style="font-size: 15px;">Total Average/Sale:</p>
                <p style="font-size: 20px; font-weight: bold;"><?php echo $mp->format_currency('', $totalityaverage); ?></p>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="border-bottom: 1px solid #dedede; padding: 5px;">
                <p style="font-size: 20px;">This Month's Revenue:</p>
                <p style="font-size: 40px; font-weight: bold;"><?php echo $mp->format_currency('', $month0total); ?></p>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <script type="text/javascript">
                  google.load("visualization", "1", {packages:["corechart"]});
                  google.setOnLoadCallback(drawChart);
                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['Month', 'Total'],
                      ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php echo $month12total; ?>],
                      ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php echo $month11total; ?>],
                      ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php echo $month10total; ?>],
                      ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php echo $month9total; ?>],
                      ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php echo $month8total; ?>],
                      ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php echo $month7total; ?>],
                      ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php echo $month6total; ?>],
                      ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php echo $month5total; ?>],
                      ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php echo $month4total; ?>],
                      ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php echo $month3total; ?>],
                      ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php echo $month2total; ?>],
                      ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php echo $month1total; ?>],
                      ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php echo $month0total; ?>]
                    ]);
                    var options = {
                      title: 'Total Sales',
                      hAxis: {title: 'Year', titleTextStyle: {color: '#000000'}}
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('total_pie'));
                    chart.draw(data, options);
                  }
                </script>
                <div id="total_pie" style="width: 400px; height: 400px;"></div>
              </td>
            </tr>
          </table>
      </td>
    </tr>
  </table>
  <?php
  }
}
?>