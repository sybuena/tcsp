<!doctype html>
	<html>
		<head>
            <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
            <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">-->
            <meta charset="utf-8">

			<!-- Always force latest IE rendering engine or request Chrome Frame -->
			<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
			<!-- Use title if it's in the page YAML frontmatter -->
            <title>Admin Panel</title>
            <link href="<?php echo base_url().'assets/theme2/stylesheets/font.css'; ?>" rel="stylesheet" />
            <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" />
            <link href="<?php echo base_url().'assets/css/style.css'; ?>" rel="stylesheet" />
            <link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.css'; ?>" rel="stylesheet" />
            <link href="<?php echo base_url().'assets/theme2/stylesheets/application.css'; ?>" rel="stylesheet"/>
			
            
			<script src="<?php echo base_url().'assets/theme2/javascripts/application.js'; ?>"></script>
            <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js';?>"></script>
        	<script src="<?php echo base_url().'assets/ckeditor/adapters/jquery.js';?>"></script>
           
            <!--[if lt IE 9]>
            <script src="../../javascripts/vendor/html5shiv.js" type="text/javascript"></script>
            <script src="../../javascripts/vendor/excanvas.js" type="text/javascript"></script>
            <![endif]-->

		</head>
<body>
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
<style>
.display-none {display:none}
.error {
	color: #b94a48!important;
	border-color: #b94a48!important;
	}
 .weak{
    color:#FF0000;
}
 
.fair{
    color:#E66C2C;
}
 
.good{
    color:#2D98F3;
}
 
.strong{
    color:#006400;
}
</style>