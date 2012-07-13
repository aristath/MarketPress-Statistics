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

  $year = date('Y', strtotime('-1 days'));
  $month = date('m', strtotime('-1 days'));
  $day = date('d', strtotime('-1 days'));
  $day1 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-2 days'));
  $month = date('m', strtotime('-2 days'));
  $day = date('d', strtotime('-2 days'));
  $day2 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-3 days'));
  $month = date('m', strtotime('-3 days'));
  $day = date('d', strtotime('-3 days'));
  $day3 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-4 days'));
  $month = date('m', strtotime('-4 days'));
  $day = date('d', strtotime('-4 days'));
  $day4 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-5 days'));
  $month = date('m', strtotime('-5 days'));
  $day = date('d', strtotime('-5 days'));
  $day5 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-6 days'));
  $month = date('m', strtotime('-6 days'));
  $day = date('d', strtotime('-6 days'));
  $day6 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-7 days'));
  $month = date('m', strtotime('-7 days'));
  $day = date('d', strtotime('-7 days'));
  $day7 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-8 days'));
  $month = date('m', strtotime('-8 days'));
  $day = date('d', strtotime('-8 days'));
  $day8 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-9 days'));
  $month = date('m', strtotime('- days'));
  $day = date('d', strtotime('-9 days'));
  $day9 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-10 days'));
  $month = date('m', strtotime('-10 days'));
  $day = date('d', strtotime('-10 days'));
  $day10 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-11 days'));
  $month = date('m', strtotime('-11 days'));
  $day = date('d', strtotime('-11 days'));
  $day11 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-12 days'));
  $month = date('m', strtotime('-12 days'));
  $day = date('d', strtotime('-12 days'));
  $day12 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-13 days'));
  $month = date('m', strtotime('-13 days'));
  $day = date('d', strtotime('-13 days'));
  $day13 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-14 days'));
  $month = date('m', strtotime('-14 days'));
  $day = date('d', strtotime('-14 days'));
  $day14 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-15 days'));
  $month = date('m', strtotime('-15 days'));
  $day = date('d', strtotime('-15 days'));
  $day15 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-16 days'));
  $month = date('m', strtotime('-16 days'));
  $day = date('d', strtotime('-16 days'));
  $day16 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-17 days'));
  $month = date('m', strtotime('-17 days'));
  $day = date('d', strtotime('-17 days'));
  $day17 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-18 days'));
  $month = date('m', strtotime('-18 days'));
  $day = date('d', strtotime('-18 days'));
  $day18 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-19 days'));
  $month = date('m', strtotime('-19 days'));
  $day = date('d', strtotime('-19 days'));
  $day19 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-20 days'));
  $month = date('m', strtotime('-20 days'));
  $day = date('d', strtotime('-20 days'));
  $day20 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-21 days'));
  $month = date('m', strtotime('-21 days'));
  $day = date('d', strtotime('-21 days'));
  $day21 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-22 days'));
  $month = date('m', strtotime('-22 days'));
  $day = date('d', strtotime('-22 days'));
  $day22 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-23 days'));
  $month = date('m', strtotime('-23 days'));
  $day = date('d', strtotime('-23 days'));
  $day23 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-24 days'));
  $month = date('m', strtotime('-24 days'));
  $day = date('d', strtotime('-24 days'));
  $day24 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-25 days'));
  $month = date('m', strtotime('-25 days'));
  $day = date('d', strtotime('-25 days'));
  $day25 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-26 days'));
  $month = date('m', strtotime('-26 days'));
  $day = date('d', strtotime('-26 days'));
  $day26 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-27 days'));
  $month = date('m', strtotime('-27 days'));
  $day = date('d', strtotime('-27 days'));
  $day27 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-28 days'));
  $month = date('m', strtotime('-28 days'));
  $day = date('d', strtotime('-28 days'));
  $day28 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-29 days'));
  $month = date('m', strtotime('-29 days'));
  $day = date('d', strtotime('-29 days'));
  $day29 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

  $year = date('Y', strtotime('-30 days'));
  $month = date('m', strtotime('-30 days'));
  $day = date('d', strtotime('-30 days'));
  $day30 = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month AND DAY(p.post_date) = $day");

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
      
  if (!empty($day0->count)){$day0count = $day0->count;} else {$day0count = 0;}
  if (!empty($day1->count)){$day1count = $day1->count;} else {$day1count = 0;}
  if (!empty($day2->count)){$day2count = $day2->count;} else {$day2count = 0;}
  if (!empty($day3->count)){$day3count = $day3->count;} else {$day3count = 0;}
  if (!empty($day4->count)){$day4count = $day4->count;} else {$day4count = 0;}
  if (!empty($day5->count)){$day5count = $day5->count;} else {$day5count = 0;}
  if (!empty($day6->count)){$day6count = $day6->count;} else {$day6count = 0;}
  if (!empty($day7->count)){$day7count = $day7->count;} else {$day7count = 0;}
  if (!empty($day8->count)){$day8count = $day8->count;} else {$day8count = 0;}
  if (!empty($day9->count)){$day9count = $day9->count;} else {$day9count = 0;}
  if (!empty($day10->count)){$day10count = $day10->count;} else {$day10count = 0;}
  if (!empty($day11->count)){$day11count = $day11->count;} else {$day11count = 0;}
  if (!empty($day12->count)){$day12count = $day12->count;} else {$day12count = 0;}
  if (!empty($day13->count)){$day13count = $day13->count;} else {$day13count = 0;}
  if (!empty($day14->count)){$day14count = $day14->count;} else {$day14count = 0;}
  if (!empty($day15->count)){$day15count = $day15->count;} else {$day15count = 0;}
  if (!empty($day16->count)){$day16count = $day16->count;} else {$day16count = 0;}
  if (!empty($day17->count)){$day17count = $day17->count;} else {$day17count = 0;}
  if (!empty($day18->count)){$day18count = $day18->count;} else {$day18count = 0;}
  if (!empty($day19->count)){$day19count = $day19->count;} else {$day19count = 0;}
  if (!empty($day20->count)){$day20count = $day20->count;} else {$day20count = 0;}
  if (!empty($day21->count)){$day21count = $day21->count;} else {$day21count = 0;}
  if (!empty($day22->count)){$day22count = $day22->count;} else {$day22count = 0;}
  if (!empty($day23->count)){$day23count = $day23->count;} else {$day23count = 0;}
  if (!empty($day24->count)){$day24count = $day24->count;} else {$day24count = 0;}
  if (!empty($day25->count)){$day25count = $day25->count;} else {$day25count = 0;}
  if (!empty($day26->count)){$day26count = $day26->count;} else {$day26count = 0;}
  if (!empty($day27->count)){$day27count = $day27->count;} else {$day27count = 0;}
  if (!empty($day28->count)){$day28count = $day28->count;} else {$day28count = 0;}
  if (!empty($day29->count)){$day29count = $day29->count;} else {$day29count = 0;}
  if (!empty($day30->count)){$day30count = $day30->count;} else {$day30count = 0;}
  
  if (!empty($day0->average)){$day0average = $day0->average;} else {$day0average = 0;}
  if (!empty($day1->average)){$day1average = $day1->average;} else {$day1average = 0;}
  if (!empty($day2->average)){$day2average = $day2->average;} else {$day2average = 0;}
  if (!empty($day3->average)){$day3average = $day3->average;} else {$day3average = 0;}
  if (!empty($day4->average)){$day4average = $day4->average;} else {$day4average = 0;}
  if (!empty($day5->average)){$day5average = $day5->average;} else {$day5average = 0;}
  if (!empty($day6->average)){$day6average = $day6->average;} else {$day6average = 0;}
  if (!empty($day7->average)){$day7average = $day7->average;} else {$day7average = 0;}
  if (!empty($day8->average)){$day8average = $day8->average;} else {$day8average = 0;}
  if (!empty($day9->average)){$day9average = $day9->average;} else {$day9average = 0;}
  if (!empty($day10->average)){$day10average = $day10->average;} else {$day10average = 0;}
  if (!empty($day11->average)){$day11average = $day11->average;} else {$day11average = 0;}
  if (!empty($day12->average)){$day12average = $day12->average;} else {$day12average = 0;}
  if (!empty($day13->average)){$day13average = $day13->average;} else {$day13average = 0;}
  if (!empty($day14->average)){$day14average = $day14->average;} else {$day14average = 0;}
  if (!empty($day15->average)){$day15average = $day15->average;} else {$day15average = 0;}
  if (!empty($day16->average)){$day16average = $day16->average;} else {$day16average = 0;}
  if (!empty($day17->average)){$day17average = $day17->average;} else {$day17average = 0;}
  if (!empty($day18->average)){$day18average = $day18->average;} else {$day18average = 0;}
  if (!empty($day19->average)){$day19average = $day19->average;} else {$day19average = 0;}
  if (!empty($day20->average)){$day20average = $day20->average;} else {$day20average = 0;}
  if (!empty($day21->average)){$day21average = $day21->average;} else {$day21average = 0;}
  if (!empty($day22->average)){$day22average = $day22->average;} else {$day22average = 0;}
  if (!empty($day23->average)){$day23average = $day23->average;} else {$day23average = 0;}
  if (!empty($day24->average)){$day24average = $day24->average;} else {$day24average = 0;}
  if (!empty($day25->average)){$day25average = $day25->average;} else {$day25average = 0;}
  if (!empty($day26->average)){$day26average = $day26->average;} else {$day26average = 0;}
  if (!empty($day27->average)){$day27average = $day27->average;} else {$day27average = 0;}
  if (!empty($day28->average)){$day28average = $day28->average;} else {$day28average = 0;}
  if (!empty($day29->average)){$day29average = $day29->average;} else {$day29average = 0;}
  if (!empty($day30->average)){$day30average = $day30->average;} else {$day30average = 0;}
  
  if (!empty($day0->total)){$day0total = $day0->total;} else {$day0total = 0;}
  if (!empty($day1->total)){$day1total = $day1->total;} else {$day1total = 0;}
  if (!empty($day2->total)){$day2total = $day2->total;} else {$day2total = 0;}
  if (!empty($day3->total)){$day3total = $day3->total;} else {$day3total = 0;}
  if (!empty($day4->total)){$day4total = $day4->total;} else {$day4total = 0;}
  if (!empty($day5->total)){$day5total = $day5->total;} else {$day5total = 0;}
  if (!empty($day6->total)){$day6total = $day6->total;} else {$day6total = 0;}
  if (!empty($day7->total)){$day7total = $day7->total;} else {$day7total = 0;}
  if (!empty($day8->total)){$day8total = $day8->total;} else {$day8total = 0;}
  if (!empty($day9->total)){$day9total = $day9->total;} else {$day9total = 0;}
  if (!empty($day10->total)){$day10total = $day10->total;} else {$day10total = 0;}
  if (!empty($day11->total)){$day11total = $day11->total;} else {$day11total = 0;}
  if (!empty($day12->total)){$day12total = $day12->total;} else {$day12total = 0;}
  if (!empty($day13->total)){$day13total = $day13->total;} else {$day13total = 0;}
  if (!empty($day14->total)){$day14total = $day14->total;} else {$day14total = 0;}
  if (!empty($day15->total)){$day15total = $day15->total;} else {$day15total = 0;}
  if (!empty($day16->total)){$day16total = $day16->total;} else {$day16total = 0;}
  if (!empty($day17->total)){$day17total = $day17->total;} else {$day17total = 0;}
  if (!empty($day18->total)){$day18total = $day18->total;} else {$day18total = 0;}
  if (!empty($day19->total)){$day19total = $day19->total;} else {$day19total = 0;}
  if (!empty($day20->total)){$day20total = $day20->total;} else {$day20total = 0;}
  if (!empty($day21->total)){$day21total = $day21->total;} else {$day21total = 0;}
  if (!empty($day22->total)){$day22total = $day22->total;} else {$day22total = 0;}
  if (!empty($day23->total)){$day23total = $day23->total;} else {$day23total = 0;}
  if (!empty($day24->total)){$day24total = $day24->total;} else {$day24total = 0;}
  if (!empty($day25->total)){$day25total = $day25->total;} else {$day25total = 0;}
  if (!empty($day26->total)){$day26total = $day26->total;} else {$day26total = 0;}
  if (!empty($day27->total)){$day27total = $day27->total;} else {$day27total = 0;}
  if (!empty($day28->total)){$day28total = $day28->total;} else {$day28total = 0;}
  if (!empty($day29->total)){$day29total = $day29->total;} else {$day29total = 0;}
  if (!empty($day30->total)){$day30total = $day30->total;} else {$day30total = 0;}
  
  echo '<script type="text/javascript" src="' . plugins_url( 'bigtext.js' , __FILE__ ) . '" ></script>';
  
  ?>
  <div class="wrap" style="background: #fff;">
  <table style="width: 100%;">
    <tr>
      <td>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
          google.load("visualization", "1", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Month', 'Total', 'Average'],
              ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php echo $month12total; ?>, <?php echo $month12average; ?>],
              ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php echo $month11total; ?>, <?php echo $month11average; ?>],
              ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php echo $month10total; ?>, <?php echo $month10average; ?>],
              ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php echo $month9total; ?>, <?php echo $month9average; ?>],
              ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php echo $month8total; ?>, <?php echo $month8average; ?>],
              ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php echo $month7total; ?>, <?php echo $month7average; ?>],
              ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php echo $month6total; ?>, <?php echo $month6average; ?>],
              ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php echo $month5total; ?>, <?php echo $month5average; ?>],
              ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php echo $month4total; ?>, <?php echo $month4average; ?>],
              ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php echo $month3total; ?>, <?php echo $month3average; ?>],
              ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php echo $month2total; ?>, <?php echo $month2average; ?>],
              ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php echo $month1total; ?>, <?php echo $month1average; ?>],
              ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php echo $month0total; ?>, <?php echo $month0average; ?>]
            ]);
            var options = {
              title: 'Total Sales, 12 Months',
              colors: ['#000000', '#D44413'],
              theme: {legend: {position: 'in'}, axisTitlesPosition: 'in'},
              hAxis: {title: 'Year', titleTextStyle: {color: '#999999'}},
              seriesType: "bars",
              curveType: "function",
              series: {1: {type: "line"}}
            };
            var chart = new google.visualization.ComboChart(document.getElementById('total_chart'));
            chart.draw(data, options);
          }
        </script>
        <div id="total_chart" style="width: 100%; height: 350px;"></div>

        <script type="text/javascript">
          google.load("visualization", "1", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Day', 'Total', 'Average'],
              ['<?php echo date("M d",strtotime("-30 Days")) ?>', <?php echo $day30total; ?>, <?php echo $day30average; ?>],
              ['<?php echo date("M d",strtotime("-29 Days")) ?>', <?php echo $day29total; ?>, <?php echo $day29average; ?>],
              ['<?php echo date("M d",strtotime("-28 Days")) ?>', <?php echo $day28total; ?>, <?php echo $day28average; ?>],
              ['<?php echo date("M d",strtotime("-27 Days")) ?>', <?php echo $day27total; ?>, <?php echo $day27average; ?>],
              ['<?php echo date("M d",strtotime("-26 Days")) ?>', <?php echo $day26total; ?>, <?php echo $day26average; ?>],
              ['<?php echo date("M d",strtotime("-25 Days")) ?>', <?php echo $day25total; ?>, <?php echo $day25average; ?>],
              ['<?php echo date("M d",strtotime("-24 Days")) ?>', <?php echo $day24total; ?>, <?php echo $day24average; ?>],
              ['<?php echo date("M d",strtotime("-23 Days")) ?>', <?php echo $day23total; ?>, <?php echo $day23average; ?>],
              ['<?php echo date("M d",strtotime("-22 Days")) ?>', <?php echo $day22total; ?>, <?php echo $day22average; ?>],
              ['<?php echo date("M d",strtotime("-21 Days")) ?>', <?php echo $day21total; ?>, <?php echo $day21average; ?>],
              ['<?php echo date("M d",strtotime("-20 Days")) ?>', <?php echo $day20total; ?>, <?php echo $day20average; ?>],
              ['<?php echo date("M d",strtotime("-19 Days")) ?>', <?php echo $day19total; ?>, <?php echo $day19average; ?>],
              ['<?php echo date("M d",strtotime("-18 Days")) ?>', <?php echo $day18total; ?>, <?php echo $day18average; ?>],
              ['<?php echo date("M d",strtotime("-17 Days")) ?>', <?php echo $day17total; ?>, <?php echo $day17average; ?>],
              ['<?php echo date("M d",strtotime("-16 Days")) ?>', <?php echo $day16total; ?>, <?php echo $day16average; ?>],
              ['<?php echo date("M d",strtotime("-15 Days")) ?>', <?php echo $day15total; ?>, <?php echo $day15average; ?>],
              ['<?php echo date("M d",strtotime("-14 Days")) ?>', <?php echo $day14total; ?>, <?php echo $day14average; ?>],
              ['<?php echo date("M d",strtotime("-13 Days")) ?>', <?php echo $day13total; ?>, <?php echo $day13average; ?>],
              ['<?php echo date("M d",strtotime("-12 Days")) ?>', <?php echo $day12total; ?>, <?php echo $day12average; ?>],
              ['<?php echo date("M d",strtotime("-11 Days")) ?>', <?php echo $day11total; ?>, <?php echo $day11average; ?>],
              ['<?php echo date("M d",strtotime("-10 Days")) ?>', <?php echo $day10total; ?>, <?php echo $day10average; ?>],
              ['<?php echo date("M d",strtotime("-9 Days")) ?>', <?php echo $day9total; ?>, <?php echo $day9average; ?>],
              ['<?php echo date("M d",strtotime("-8 Days")) ?>', <?php echo $day8total; ?>, <?php echo $day8average; ?>],
              ['<?php echo date("M d",strtotime("-7 Days")) ?>', <?php echo $day7total; ?>, <?php echo $day7average; ?>],
              ['<?php echo date("M d",strtotime("-6 Days")) ?>', <?php echo $day6total; ?>, <?php echo $day6average; ?>],
              ['<?php echo date("M d",strtotime("-5 Days")) ?>', <?php echo $day5total; ?>, <?php echo $day5average; ?>],
              ['<?php echo date("M d",strtotime("-4 Days")) ?>', <?php echo $day4total; ?>, <?php echo $day4average; ?>],
              ['<?php echo date("M d",strtotime("-3 Days")) ?>', <?php echo $day3total; ?>, <?php echo $day3average; ?>],
              ['<?php echo date("M d",strtotime("-2 Days")) ?>', <?php echo $day2total; ?>, <?php echo $day2average; ?>],
              ['<?php echo date("M d",strtotime("-1 Days")) ?>', <?php echo $day1total; ?>, <?php echo $day1average; ?>],
              ['<?php echo date("M d",strtotime("-0 Days")) ?>', <?php echo $day0total; ?>, <?php echo $day0average; ?>]
            ]);
            var options = {
              title: 'Total and Average Sales in the past 30 days',
              colors: ['#000000', '#D44413'],
              theme: {legend: {position: 'in'}, axisTitlesPosition: 'in'},
              hAxis: {title: 'Year', titleTextStyle: {color: '#999999'}},
              seriesType: "bars",
              curveType: "function",
              series: {1: {type: "line"}}
            };
            var chart = new google.visualization.ComboChart(document.getElementById('total_day_chart'));
            chart.draw(data, options);
          }
        </script>
        <div id="total_day_chart" style="width: 100%; height: 300px;"></div>

<?php
function business_marketpress_stats_popular_products_sales_price_all( $echo = true ) {
  global $mp;
  //The Query
  $custom_query = new WP_Query('post_type=product&post_status=publish&meta_key=mp_sales_count&meta_compare=>&meta_value=0&orderby=meta_value&order=DESC');
  if (count($custom_query->posts)) {
    foreach ($custom_query->posts as $post) {
      echo "[" . business_marketpress_stats_product_sales_per_price(false, $post->ID) . "], ";
    ;}
  }
}

function business_marketpress_stats_product_sales_per_price( $echo = true, $post_id = NULL, $label = true ) {
  global $id, $mp;
  $post_id = ( NULL === $post_id ) ? $id : $post_id;

	$meta = get_post_custom($post_id);
  //unserialize
  foreach ($meta as $key => $val) {
	  $meta[$key] = maybe_unserialize($val[0]);
	  if (!is_array($meta[$key]) && $key != "mp_is_sale" && $key != "mp_track_inventory" && $key != "mp_product_link" && $key != "mp_file" && $key != "mp_price_sort")
	    $meta[$key] = array($meta[$key]);
	}
  if ((is_array($meta["mp_price"]) && count($meta["mp_price"]) >= 1) || !empty($meta["mp_file"])) {
    if ($meta["mp_is_sale"]) {
	    $price .= $meta["mp_sale_price"][0];
	  } else {
	    $price = $meta["mp_price"][0];
	  }
	} else {
		return '';
	}
  
  $sales = $meta["mp_sales_count"][0];
  $stats = $price . ', ' . $sales;
  if ($echo)
    echo $stats;
  else
    return $stats;
} ?>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Price', 'Sales'],
          <?php business_marketpress_stats_popular_products_sales_price_all(); ?>
          ]);

        var options = {
          title: 'Sales per product Price',
          hAxis: {title: 'Price'},
          vAxis: {title: 'Sales'},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('sales_per_price'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="sales_per_price" style="width: 100%; height: 300px; display: inline-block;"></div>

        <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Month', 'Sales'],
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
            title: 'Number of Sales, 12 Months',
            colors: ['#000000'],
            theme: {legend: {position: 'in'}, titlePosition: 'in', axisTitlesPosition: 'in'},
            hAxis: {title: 'Year', titleTextStyle: {color: '#999999'}}
          };
          var chart = new google.visualization.LineChart(document.getElementById('count_chart'));
          chart.draw(data, options);
        }
        </script>
        <div id="count_chart" style="width: 100%; height: 200px;"></div>
        </div>
      </td>
      <td style="width: 300px; vertical-align: top; text-align: center; color: #222;">
      	<div id="BigText" style="width: 300px; padding: 20px;">
      		<p>This Month's Revenue:</p>
      		<p><strong><?php echo $mp->format_currency('', $month0total); ?></strong></p>
      		<p style="border-top: 1px solid #dedede;">This Month's Sales:</p>
      		<p><strong><?php echo $month0count; ?></strong></p>
      		<p style="border-top: 1px solid #dedede;">This Month's Average:</p>
      		<p><strong><?php echo $mp->format_currency('', $totalityaverage); ?>/Sale</strong></p>

      		<p style="border-top: 1px solid #dedede;">Total Revenue:</p>
      		<p><strong><?php echo $mp->format_currency('', $totalitytotal); ?></strong></p>
      		<p style="border-top: 1px solid #dedede;">Total Sales:</p>
      		<p><strong><?php echo $totalitycount; ?></strong></p>
      		<p style="border-top: 1px solid #dedede;">Total Average/Sale:</p>
      		<p><strong><?php echo $mp->format_currency('', $totalityaverage); ?></strong></p>
      	</div>
      </td>
    </tr>
  </table>
  <?php
function business_marketpress_stats_popular_products_sales( $echo = true, $num = 10 ) {
  global $mp;
  //The Query
  $custom_query = new WP_Query('post_type=product&post_status=publish&posts_per_page='.intval($num).'&meta_key=mp_sales_count&meta_compare=>&meta_value=0&orderby=meta_value&order=DESC');
  if (count($custom_query->posts)) {
    foreach ($custom_query->posts as $post) {
      echo "['" . $post->post_title . "', " . business_marketpress_stats_product_sales(false, $post->ID) . "], ";
    ;}
  }
}

function business_marketpress_stats_popular_products_revenue( $echo = true, $num = 10 ) {
  global $mp;
  //The Query
  $custom_query = new WP_Query('post_type=product&post_status=publish&posts_per_page='.intval($num).'&meta_key=mp_sales_count&meta_compare=>&meta_value=0&orderby=meta_value&order=DESC');
  if (count($custom_query->posts)) {
    foreach ($custom_query->posts as $post) {
      echo "['" . $post->post_title . "', " . business_marketpress_stats_product_revenue(false, $post->ID) . "], ";
    ;}
  }
}

function business_marketpress_stats_popular_products_revenue_table( $echo = true, $num = 10 ) {
  global $mp;
  //The Query
  $custom_query = new WP_Query('post_type=product&post_status=publish&posts_per_page='.intval($num).'&meta_key=mp_sales_count&meta_compare=>&meta_value=0&orderby=meta_value&order=DESC');
  if (count($custom_query->posts)) {
    foreach ($custom_query->posts as $post) {
      echo "['" . $post->post_title . "', {v:" . business_marketpress_stats_product_revenue(false, $post->ID) . ", f:'" . business_marketpress_stats_product_revenue(false, $post->ID) . "'}, {v:" . business_marketpress_stats_product_sales(false, $post->ID) . ", f:'" . business_marketpress_stats_product_sales(false, $post->ID) . "'}], ";
    ;}
  }
}

function business_marketpress_stats_product_revenue( $echo = true, $post_id = NULL, $label = true ) {
  global $id, $mp;
  $post_id = ( NULL === $post_id ) ? $id : $post_id;

	$meta = get_post_custom($post_id);
  //unserialize
  foreach ($meta as $key => $val) {
	  $meta[$key] = maybe_unserialize($val[0]);
	  if (!is_array($meta[$key]) && $key != "mp_is_sale" && $key != "mp_track_inventory" && $key != "mp_product_link" && $key != "mp_file" && $key != "mp_price_sort")
	    $meta[$key] = array($meta[$key]);
	}
  if ((is_array($meta["mp_price"]) && count($meta["mp_price"]) >= 1) || !empty($meta["mp_file"])) {
    if ($meta["mp_is_sale"]) {
	    $price .= $meta["mp_sale_price"][0];
	  } else {
	    $price = $meta["mp_price"][0];
	  }
	} else {
		return '';
	}
  
  $sales = $meta["mp_sales_count"][0];
  $revenue = $sales*$price;
  if ($echo)
    echo $revenue;
  else
    return $revenue;
}

function business_marketpress_stats_product_sales( $echo = true, $post_id = NULL ) {
  global $id, $mp;
  $post_id = ( NULL === $post_id ) ? $id : $post_id;
  $meta = get_post_custom($post_id);
  $sales = $meta["mp_sales_count"][0];
  
  if ($echo)
    echo $sales;
  else
    return $sales;
}
?>
             <script type="text/javascript">
              google.load("visualization", "1", {packages:["corechart"]});
              google.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Product', 'Sales'],

                  <?php business_marketpress_stats_popular_products_sales(); ?>
                ]);
                var options = {
                  title: 'Top Products by number of sales',
                  is3D: 'true',
                };
                var chart = new google.visualization.PieChart(document.getElementById('top_products_pie'));
                chart.draw(data, options);
              }
            </script>
            <div id="top_products_pie" style="width: 45%; height: 500px; display: inline-block;"></div>
                
             <script type="text/javascript">
              google.load("visualization", "1", {packages:["corechart"]});
              google.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Product', 'Revenue'],

                  <?php business_marketpress_stats_popular_products_revenue(); ?>
                ]);
                var options = {
                  title: 'Top Products Revenue',
                };
                var chart = new google.visualization.PieChart(document.getElementById('top_products_revenue'));
                chart.draw(data, options);
              }
            </script>
            <div id="top_products_revenue" style="width: 50%; height: 500px; display: inline-block;"></div>
                
             <script type="text/javascript">
              google.load('visualization', '1', {packages:['table']});
              google.setOnLoadCallback(drawTable);
              function drawTable() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Product Name');
                data.addColumn('number', 'Total Revenue');
                data.addColumn('number', 'Product Sales');
                data.addRows([

                  <?php business_marketpress_stats_popular_products_revenue_table(); ?>
                ]);
                var options = {
                };
                var table = new google.visualization.Table(document.getElementById('top_products_table'));
                table.draw(data, {showRowNumber: true});
              }
            </script>
            <div id="top_products_table" style="width: 100%; height: 500px; display: block;"></div>
                
  </div>
  <script>
    (function ($) {
      $('#BigText').bigtext({
  	    childSelector: '> p',
  	    maxfontsize: 110
      });
    })(jQuery);
  </script>
  <style>
  	#BigText p strong{text-shadow: 2px 2px 2px #ccc; filter: dropshadow(color=#ccc, offx=2, offy=2);}
  </style>
  <?php
  }
}
?>