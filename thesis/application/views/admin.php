<?php 
	/* -----------------------------------------
				For chat system 
	   ---------------------------------------- */
	$login = $this->session->userdata('logged_in');
	
?>

<?php include('admin/header/header_dropdown.php');?>
<!-- Navigation Bar Section-->
<?php include('admin/navbar.php');?>

<!-- Main Content Section -->
<div class="main-content">
	<?php 
	 /* ----------------------------------------------------
	 	NOTE: all our admin content always has 3 part/format
			1. Content Header
			2. Breadcrums
			3. Main Content
		always pay attention on this will editing/adding content	
	    ---------------------------------------------------- */
	?>
    <div id="dashboard" class="content-toggle">
		<?php include('admin/content/dashboard.php');?>
	</div>
    
    <div id="signup" class="content-toggle">
		<?php include('admin/content/signup.php');?>
	</div>
    
    <div id="message" class="content-toggle">
		<?php include('admin/content/message.php');?>
	</div>

    <div id="stats" class="content-toggle">
		<?php include('admin/content/stats.php');?>
	</div>
    <div id="newMember" class="content-toggle">
		<?php include('admin/content/newMember.php');?>
	</div>
    <div id="users" class="content-toggle">
		<?php include('admin/content/users.php');?>
	</div>
    <div id="archive" class="content-toggle">
		<?php include('admin/content/declined.php');?>
	</div>
    <div id="approve" class="content-toggle">
		<?php include('admin/content/approve.php');?>
	</div>
</div>


