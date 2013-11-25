<!-- 1. Content Header Section-->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="area-top clearfix">
        	<div class="pull-left header">
          		<h3 class="title"><i class="icon-table"></i>Member List</h3>
          		<h5>View, Edit or remove all your registered members</h5>
        	</div>
          <ul class="inline pull-right sparkline-box">

          <li class="sparkline-row">
            <h4 class="blue"><span>Total Member</span> <?php echo count($memberList); ?></h4>
            <div class="sparkline big" data-color="blue"><!--26,16,20,29,18,3,12,21,24,20,4,23--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="green"><span>New Member</span> <?php echo count($newRegister); ?></h4>
            <div class="sparkline big" data-color="green"><!--9,20,5,21,28,14,17,25,12,22,9,3--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="red"><span>Declined Member</span> <?php echo count($declined); ?></h4>
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
          		<span class="breadcrumb-label"><i class="icon-group"></i> Users</span>
          		<span class="breadcrumb-arrow"><span></span></span>
        	</div>
			<div class="breadcrumb-button">
          		<span class="breadcrumb-label"><i class="icon-table"></i> Member</span>
          		<span class="breadcrumb-arrow"><span></span></span>
        	</div>
      	</div>
    </div>
</div>

<!-- 3. Main Content Section-->
<div class="container-fluid padded">
	<div class="row-fluid">
    	<!-- New Member Section-->
  		<div class="span6">
			<?php include('users/newMember.php');?>
  		</div>
		<!-- declined Member Section -->
  		<div class="span6">
			<?php include('users/declinedMember.php');?>
      	</div>
	</div>
    
	<div class="row-fluid">
  		<div class="span12">
			<?php include('users/member.php');?>
        </div>
  	</div>
</div>