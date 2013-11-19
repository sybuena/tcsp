<style>
	.content-toggle {display:none}
</style>
<?php 
	/* -----------------------------------------
				For chat system 
	   ---------------------------------------- */
	session_start();
	$login = $this->session->userdata('logged_in');
	
	if(!empty($login)) {
		// Must be already set
		$_SESSION['username'] = $login['username']; 
	} else {
		unset($_SESSION['username']);
		session_destroy();
	}
?>

<?php if(!empty($login)): ?>
	<!-- For Chat system -->
    <link href="<?php echo base_url().'assets/front/css/screen.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url().'assets/front/css/chat.css'; ?>" rel="stylesheet" media="screen">
    <script src="<?php echo base_url().'assets/front/js2/jquery.js';?>"></script>
    <script src="<?php echo base_url().'assets/front/js2/chat.js';?>"></script>
<?php endif; ?>    

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
    <div id="users" class="content-toggle">
		<?php include('admin/content/users.php');?>
	</div>
</div>

