<!-- 1. Content Header Section-->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="area-top clearfix">
        	<div class="pull-left header">
          		<h3 class="title"><i class="icon-dashboard"></i>Dashboard</h3>
          		<h5>Good day! <?php echo $login['firstname'].' '.$login['surname']; ?></h5>
        	</div>
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

<!-- 3. Main Content Section-->
<div class="container-fluid padded">
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