<!-- 1. Content Header Section-->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="area-top clearfix">
        	<div class="pull-left header">
          		<h3 class="title"><i class="icon-table"></i>Member List</h3>
          		<h5>View, Edit or remove all your registered members</h5>
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