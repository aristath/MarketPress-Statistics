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

  $totality = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total'");  
  if (!empty($totality->count)){$totalitycount = $totality->count;} else {$totalitycount = 0;}
  if (!empty($totality->total)){$totalitytotal = $totality->total;} else {$totalitytotal = 0;}
  if (!empty($totality->average)){$totalityaverage = $totality->average;} else {$totalityaverage = 0;}
      
  $totalityitems = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items'");  
  if (!empty($totalityitems->count)){$totalityitemscount = $totalityitems->count;} else {$totalityitemscount = 0;}
  if (!empty($totalityitems->total)){$totalityitemstotal = $totalityitems->total;} else {$totalityitemstotal = 0;}
  if (!empty($totalityitems->average)){$totalityitemsaverage = $totalityitems->average;} else {$totalityitemsaverage = 0;}
      
  
  function marketpress_statistics_stat( $time = '-0 days' , $stat = count, $echo = true ){
    global $wpdb, $mp;
    $year = date('Y', strtotime($time));
    $month = date('m', strtotime($time));

    $monthquery = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM {$wpdb->posts} p JOIN {$wpdb->postmeta} m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_total' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");
    $monthstat = 0;
    if (!empty($monthquery->$stat)) $monthstat = $monthquery->$stat;

    if ($echo) echo $monthstat; 
    else return $monthstat; 
  }

  function marketpress_statistics_stat_items( $time = '-0 days' , $stat = count, $echo = true ){
    global $wpdb, $mp;
    $year = date('Y', strtotime($time));
    $month = date('m', strtotime($time));

    $monthquery = $wpdb->get_row("SELECT count(p.ID) as count, sum(m.meta_value) as total, avg(m.meta_value) as average FROM $wpdb->posts p JOIN $wpdb->postmeta m ON p.ID = m.post_id WHERE p.post_type = 'mp_order' AND m.meta_key = 'mp_order_items' AND YEAR(p.post_date) = $year AND MONTH(p.post_date) = $month");  
    $monthstat = 0;
    if (!empty($monthquery->$stat)) $monthstat = $monthquery->$stat;

    if ($echo) echo $monthstat; 
    else return $monthstat; 
  }

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
              ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php marketpress_statistics_stat('-12 months', total); ?>, <?php marketpress_statistics_stat('-12 months', average); ?>],
              ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php marketpress_statistics_stat('-11 months', total); ?>, <?php marketpress_statistics_stat('-12 months', average); ?>],
              ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php marketpress_statistics_stat('-10 months', total); ?>, <?php marketpress_statistics_stat('-02 months', average); ?>],
              ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php marketpress_statistics_stat('-9 months', total); ?>, <?php marketpress_statistics_stat('-9 months', average); ?>],
              ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php marketpress_statistics_stat('-8 months', total); ?>, <?php marketpress_statistics_stat('-8 months', average); ?>],
              ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php marketpress_statistics_stat('-7 months', total); ?>, <?php marketpress_statistics_stat('-7 months', average); ?>],
              ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php marketpress_statistics_stat('-6 months', total); ?>, <?php marketpress_statistics_stat('-6 months', average); ?>],
              ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php marketpress_statistics_stat('-5 months', total); ?>, <?php marketpress_statistics_stat('-5 months', average); ?>],
              ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php marketpress_statistics_stat('-4 months', total); ?>, <?php marketpress_statistics_stat('-4 months', average); ?>],
              ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php marketpress_statistics_stat('-3 months', total); ?>, <?php marketpress_statistics_stat('-3 months', average); ?>],
              ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php marketpress_statistics_stat('-2 months', total); ?>, <?php marketpress_statistics_stat('-2 months', average); ?>],
              ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php marketpress_statistics_stat('-1 months', total); ?>, <?php marketpress_statistics_stat('-1 months', average); ?>],
              ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php marketpress_statistics_stat('-0 months', total); ?>, <?php marketpress_statistics_stat('-0 months', average); ?>]
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
              ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php marketpress_statistics_stat_items('-12 months', total); ?>, <?php marketpress_statistics_stat_items('-12 months', average); ?>],
              ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php marketpress_statistics_stat_items('-11 months', total); ?>, <?php marketpress_statistics_stat_items('-11 months', average); ?>],
              ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php marketpress_statistics_stat_items('-10 months', total); ?>, <?php marketpress_statistics_stat_items('-10 months', average); ?>],
              ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php marketpress_statistics_stat_items('-9 months', total); ?>, <?php marketpress_statistics_stat_items('-9 months', average); ?>],
              ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php marketpress_statistics_stat_items('-8 months', total); ?>, <?php marketpress_statistics_stat_items('-8 months', average); ?>],
              ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php marketpress_statistics_stat_items('-7 months', total); ?>, <?php marketpress_statistics_stat_items('-7 months', average); ?>],
              ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php marketpress_statistics_stat_items('-6 months', total); ?>, <?php marketpress_statistics_stat_items('-6 months', average); ?>],
              ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php marketpress_statistics_stat_items('-5 months', total); ?>, <?php marketpress_statistics_stat_items('-5 months', average); ?>],
              ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php marketpress_statistics_stat_items('-4 months', total); ?>, <?php marketpress_statistics_stat_items('-4 months', average); ?>],
              ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php marketpress_statistics_stat_items('-3 months', total); ?>, <?php marketpress_statistics_stat_items('-3 months', average); ?>],
              ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php marketpress_statistics_stat_items('-2 months', total); ?>, <?php marketpress_statistics_stat_items('-2 months', average); ?>],
              ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php marketpress_statistics_stat_items('-1 months', total); ?>, <?php marketpress_statistics_stat_items('-1 months', average); ?>],
              ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php marketpress_statistics_stat_items('-0 months', total); ?>, <?php marketpress_statistics_stat_items('-0 months', average); ?>],
            ]);
            var options = {
              title: 'Product sles count, 12 Months',
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
            ['<?php echo date("M",strtotime("-12 Months")) ?>', <?php marketpress_statistics_stat('-12 months', count); ?>],
            ['<?php echo date("M",strtotime("-11 Months")) ?>', <?php marketpress_statistics_stat('-11 months', count); ?>],
            ['<?php echo date("M",strtotime("-10 Months")) ?>', <?php marketpress_statistics_stat('-10 months', count); ?>],
            ['<?php echo date("M",strtotime("-9 Months")) ?>', <?php marketpress_statistics_stat('-9 months', count); ?>],
            ['<?php echo date("M",strtotime("-8 Months")) ?>', <?php marketpress_statistics_stat('-8 months', count); ?>],
            ['<?php echo date("M",strtotime("-7 Months")) ?>', <?php marketpress_statistics_stat('-7 months', count); ?>],
            ['<?php echo date("M",strtotime("-6 Months")) ?>', <?php marketpress_statistics_stat('-6 months', count); ?>],
            ['<?php echo date("M",strtotime("-5 Months")) ?>', <?php marketpress_statistics_stat('-5 months', count); ?>],
            ['<?php echo date("M",strtotime("-4 Months")) ?>', <?php marketpress_statistics_stat('-4 months', count); ?>],
            ['<?php echo date("M",strtotime("-3 Months")) ?>', <?php marketpress_statistics_stat('-3 months', count); ?>],
            ['<?php echo date("M",strtotime("-2 Months")) ?>', <?php marketpress_statistics_stat('-2 months', count); ?>],
            ['<?php echo date("M",strtotime("-1 Months")) ?>', <?php marketpress_statistics_stat('-1 months', count); ?>],
            ['<?php echo date("M",strtotime("-0 Months")) ?>', <?php marketpress_statistics_stat('-0 months', count); ?>],
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
      		<p><strong><?php echo $mp->format_currency('', marketpress_statistics_stat('-0 months', total, false)); ?></strong></p>
      		<p style="border-top: 1px solid #dedede;">This Month's Sales:</p>
      		<p><strong><?php echo marketpress_statistics_stat('-0 months', count, false); ?> sales, <?php echo marketpress_statistics_stat_items('-0 months', count, false); ?> items</strong></p>
            <p style="border-top: 1px solid #dedede;">This Month's Average:</p>
            <p><strong><?php echo $mp->format_currency('', marketpress_statistics_stat('-0 months', average, false)); ?>/Sale</strong></p>

      		<p style="border-top: 2px solid #333;">Total Revenue:</p>
      		<p><strong><?php echo $mp->format_currency('', $totalitytotal); ?></strong></p>
      		<p style="border-top: 1px solid #dedede;">Total Sales:</p>
      		<p><strong><?php echo $totalitycount; ?> sales, <?php echo $totalityitemstotal; ?> items</strong></p>
            <p style="border-top: 1px solid #dedede;">Total Average/Sale:</p>
            <p><strong><?php echo $mp->format_currency('', $totalityaverage); ?></strong></p>      	</div>
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