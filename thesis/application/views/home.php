<?php
	session_start();
	$login = $this->session->userdata('front_logged_in');
	
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
<!-- Navbar Region -->
<div id="navigation" class="wrapper">
	<div class="navbar  navbar-static-top">
    	<?php include('front/navbar.php');?>
  	</div>
</div>  

<!-- Content Region -->
<div id="Home" class="content-toggle">
	<?php include('front/content/home.php');?>
</div>

<div id="Contact" class="content-toggle" style="display:none">
	<?php include('front/content/contact.php');?>
</div>

<div id="News" class="content-toggle" style="display:none">
	<?php include('front/content/event.php');?>
</div>

<div id="History" class="content-toggle" style="display:none">
	<?php include('front/content/about.php');?>
</div>

<div id="Team" class="content-toggle" style="display:none">
	<?php include('front/content/ateam.php');?>
</div>

<div id="Signup" class="content-toggle" style="display:none">
	<?php include('front/content/signup.php');?>
</div>

<div id="Terms" class="content-toggle" style="display:none">
	<?php include('front/content/terms.php');?>
</div>

<div id="Privacy" class="content-toggle" style="display:none">
	<?php include('front/content/privacy.php');?>
</div>

<!-- Load all modal here -->

	<?php include('front/modal/inquire.php');?>
