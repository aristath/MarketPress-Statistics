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
  


  $year = date('Y');
  $month = date('m');
  $month0items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");

  $year = date('Y', strtotime('-1 months'));
  $month = date('m', strtotime('-1 months'));
  $month1items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-2 months'));
  $month = date('m', strtotime('-2 months'));
  $month2items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-3 months'));
  $month = date('m', strtotime('-3 months'));
  $month3items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-4 months'));
  $month = date('m', strtotime('-4 months'));
  $month4items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-5 months'));
  $month = date('m', strtotime('-5 months'));
  $month5items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-6 months'));
  $month = date('m', strtotime('-6 months'));
  $month6items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-7 months'));
  $month = date('m', strtotime('-7 months'));
  $month7items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-8 months'));
  $month = date('m', strtotime('-8 months'));
  $month8items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-9 months'));
  $month = date('m', strtotime('-9 months'));
  $month9items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-10 months'));
  $month = date('m', strtotime('-10 months'));
  $month10items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-11 months'));
  $month = date('m', strtotime('-11 months'));
  $month11items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

  $year = date('Y', strtotime('-12 months'));
  $month = date('m', strtotime('-12 months'));
  $month12items = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  

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
      

  if (!empty($month0items->total)){$month0totalitems = $month0items->total;} else {$month0totalitems = 0;}
  if (!empty($month1items->total)){$month1totalitems = $month1items->total;} else {$month1totalitems = 0;}
  if (!empty($month2items->total)){$month2totalitems = $month2items->total;} else {$month2totalitems = 0;}
  if (!empty($month3items->total)){$month3totalitems = $month3items->total;} else {$month3totalitems = 0;}
  if (!empty($month4items->total)){$month4totalitems = $month4items->total;} else {$month4totalitems = 0;}
  if (!empty($month5items->total)){$month5totalitems = $month5items->total;} else {$month5totalitems = 0;}
  if (!empty($month6items->total)){$month6totalitems = $month6items->total;} else {$month6totalitems = 0;}
  if (!empty($month7items->total)){$month7totalitems = $month7items->total;} else {$month7totalitems = 0;}
  if (!empty($month8items->total)){$month8totalitems = $month8items->total;} else {$month8totalitems = 0;}
  if (!empty($month9items->total)){$month9totalitems = $month9items->total;} else {$month9totalitems = 0;}
  if (!empty($month10items->total)){$month10totalitems = $month10items->total;} else {$month10totalitems = 0;}
  if (!empty($month11items->total)){$month11totalitems = $month11items->total;} else {$month11totalitems = 0;}
  if (!empty($month12items->total)){$month12totalitems = $month12items->total;} else {$month12totalitems = 0;}
      
  if (!empty($month0items->average)){$month0averageitems = $month0items->average;} else {$month0averageitems = 0;}
  if (!empty($month1items->average)){$month1averageitems = $month1items->average;} else {$month1averageitems = 0;}
  if (!empty($month2items->average)){$month2averageitems = $month2items->average;} else {$month2averageitems = 0;}
  if (!empty($month3items->average)){$month3averageitems = $month3items->average;} else {$month3averageitems = 0;}
  if (!empty($month4items->average)){$month4averageitems = $month4items->average;} else {$month4averageitems = 0;}
  if (!empty($month5items->average)){$month5averageitems = $month5items->average;} else {$month5averageitems = 0;}
  if (!empty($month6items->average)){$month6averageitems = $month6items->average;} else {$month6averageitems = 0;}
  if (!empty($month7items->average)){$month7averageitems = $month7items->average;} else {$month7averageitems = 0;}
  if (!empty($month8items->average)){$month8averageitems = $month8items->average;} else {$month8averageitems = 0;}
  if (!empty($month9items->average)){$month9averageitems = $month9items->average;} else {$month9averageitems = 0;}
  if (!empty($month10items->average)){$month10averageitems = $month10items->average;} else {$month10averageitems = 0;}
  if (!empty($month11items->average)){$month11averageitems = $month11items->average;} else {$month11averageitems = 0;}
  if (!empty($month12items->average)){$month12averageitems = $month12items->average;} else {$month12averageitems = 0;}
      
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

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
          google.load("visualization", "1", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Month', 'Total', 'Average'],
              ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php echo $month12totalitems; ?>, <?php echo $month12averageitems; ?>],
              ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php echo $month11totalitems; ?>, <?php echo $month11averageitems; ?>],
              ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php echo $month10totalitems; ?>, <?php echo $month10averageitems; ?>],
              ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php echo $month9totalitems; ?>, <?php echo $month9averageitems; ?>],
              ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php echo $month8totalitems; ?>, <?php echo $month8averageitems; ?>],
              ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php echo $month7totalitems; ?>, <?php echo $month7averageitems; ?>],
              ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php echo $month6totalitems; ?>, <?php echo $month6averageitems; ?>],
              ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php echo $month5totalitems; ?>, <?php echo $month5averageitems; ?>],
              ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php echo $month4totalitems; ?>, <?php echo $month4averageitems; ?>],
              ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php echo $month3totalitems; ?>, <?php echo $month3averageitems; ?>],
              ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php echo $month2totalitems; ?>, <?php echo $month2averageitems; ?>],
              ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php echo $month1totalitems; ?>, <?php echo $month1averageitems; ?>],
              ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php echo $month0totalitems; ?>, <?php echo $month0averageitems; ?>]
            ]);
            var options = {
              title: 'Total Sales, 12 Months',
              colors: ['#000000', '#D44413'],
              theme: {legend: {position: 'in'}, axisTitlesPosition: 'in'},
              hAxis: {title: 'Year', titleTextStyle: {color: '#999999'}},
              seriesType: "line",
              curveType: "function",
              series: {1: {type: "line"}}
            };
            var chart = new google.visualization.ComboChart(document.getElementById('total_chart_items'));
            chart.draw(data, options);
          }
        </script>
        <div id="total_chart_items" style="width: 100%; height: 350px;"></div>

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
          title: 'Sales by product Price',
          hAxis: {title: 'Price'},
          vAxis: {title: 'Sales'},
          pointSize: '9',
          colors: ['#000000'],
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('sales_per_price'));
        chart.draw(data, options);
      }
    </script>
    <div id="sales_per_price" style="width: 47%; height: 300px; display: inline-block;"></div>

<?php
function business_marketpress_stats_products_income_price_all( $echo = true ) {
  global $mp;
  //The Query
  $custom_query = new WP_Query('post_type=product&post_status=publish&meta_key=mp_sales_count&meta_compare=>&meta_value=0&orderby=meta_value&order=DESC');
  if (count($custom_query->posts)) {
    foreach ($custom_query->posts as $post) {
      echo "[" . business_marketpress_stats_product_income_by_price(false, $post->ID) . "], ";
    ;}
  }
}

function business_marketpress_stats_product_income_by_price( $echo = true, $post_id = NULL, $label = true ) {
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
  $stats = $price . ', ' . $revenue;
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
          <?php business_marketpress_stats_products_income_price_all(); ?>
          ]);

        var options = {
          title: 'Revenue by product Price',
          hAxis: {title: 'Price'},
          vAxis: {title: 'Revenue'},
          colors: ['#D44413'],
          pointSize: '9',
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('income_price'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="income_price" style="width: 48%; height: 300px; display: inline-block;"></div>

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

function business_marketpress_stats_popular_products_revenue( $echo = true) {
  global $mp;
  //The Query
  $custom_query = new WP_Query('post_type=product&post_status=publish&meta_key=mp_sales_count&meta_compare=>&meta_value=0&orderby=meta_value&order=DESC');
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