<!-- 1. Content Header Section-->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="area-top clearfix">
        	<div class="pull-left header">
          		<h3 class="title"><i class="icon-dashboard"></i>Dashboard</h3>
          		<h5>Good day! <?php echo $login['firstname'].' '.$login['surname']; ?></h5>
        	</div>
            
          <ul class="inline pull-right sparkline-box">

          <li class="sparkline-row">
            <h4 class="blue"><span>Total</span> <?php echo count($memberList); ?></h4>
            <div class="sparkline big" data-color="blue"><!--26,16,20,29,18,3,12,21,24,20,4,23--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="green"><span>New</span> <?php echo count($newRegister); ?></h4>
            <div class="sparkline big" data-color="green"><!--9,20,5,21,28,14,17,25,12,22,9,3--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="red"><span>Declined</span> <?php echo count($declined); ?></h4>
            <div class="sparkline big"><!--15,28,4,7,18,12,20,7,25,19,13,29--></div>
          </li>

        </ul>
      	</div>
    </div>
</div>

<!-- 2. Breadcrums Section-->
<div class="container-fluid padded">
	<div class="row-fluid">
		<div id="breadcrumbs">
			<div class="breadcrumb-button blue">
          		<span class="breadcrumb-label"><i class="icon-home"></i> Admin</span>
          		<span class="breadcrumb-arrow"><span></span></span>
        	</div>
			<div class="breadcrumb-button">
          		<span class="breadcrumb-label"><i class="icon-dashboard"></i> Dashboard</span>
          		<span class="breadcrumb-arrow"><span></span></span>
        	</div>
      	</div>
    </div>
</div>
<?php 
		/* ----------------------------------
			   This thing can be improve
		   ---------------------------------- */
	
	?>
    
	<!--<script type="text/javascript" src="/assets/gchart/jsapi.js"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      google.setOnLoadCallback(drawChart2);
	  function drawChart() {
        var data = new google.visualization.DataTable();
		data.addColumn('string', 'Location');
		data.addColumn('number', 'Members');
  		<?php foreach($location as $k => $v) :?>
			data.addRows([["<?php echo $k; ?>", <?php echo $v; ?>]]);
		<?php endforeach; ?>
        var options = {
         // title: 'Members Location Statistics',
          hAxis: {title: 'Location', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
	  
	  function drawChart2() {
        var data = new google.visualization.DataTable();
		data.addColumn('string', 'Months');
		data.addColumn('number', 'Members');
  		<?php foreach($date as $k => $v) :?>
			data.addRows([["<?php echo $k; ?>", <?php echo $v; ?>]]);
		<?php endforeach; ?>

        var options = {
			 hAxis: {title: 'Registration per Months', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart2_div'));
        chart.draw(data, options);
      }
	  
    </script>
<!-- 3. Main Content Section-->
<div class="container-fluid padded">
	<div class="row-fluid">
    	<!-- Location Stats-->
    	<div class="span6">
        	<div class="box">
                <div class="box-header"><span class="title">Member Location Statistics</span></div>
                    <div class="box-content">
                    <div id="chart_div" style="height: 500px;"></div>
                </div>
             </div>
        </div>
        <!-- Registered Stats-->
    	<div class="span6">
        	<div class="box">
                <div class="box-header"><span class="title">Registration Statistics</span></div>
                    <div class="box-content">
                    <div id="chart2_div" style="height: 500px;"></div>
                </div>
             </div>
        </div>
        
    </div>
    <div class="row-fluid">
    	
    	<!-- Calendar Section-->
  		<div class="span6">
    		<div class="box">
      			<div class="box-header">
     				<div class="title">Activities</div>
      			</div>
                <div class="box-content">
                	<!-- Load Calendar here-->
                	<div id="calendar"></div>
                </div>
    		</div>
  		</div>
		<!-- Latest News -->
  		<div class="span6">
    		<div class="box">
      			<div class="box-header">
        			<span class="title">Latest News</span>
                    <ul class="box-toolbar">
                      <li><span class="label label-blue">178</span></li>
                    </ul>
      			</div>
     			<div class="box-content scrollable" style="height: 552px; overflow-y: auto">
					<?php for($i = 0; $i <10; $i++) :?>
                        <div class="box-section news with-icons">
                            <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
                            <div class="news-time">
                                <span>06</span> jan
                            </div>
                            <div class="news-content">
                                <div class="news-title"><a href="#">Latest News!</a></div>
                                <div class="news-text">
                                    Latest news will be put here
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
				</div>
    		</div>
      	</div>
	</div>
</div>