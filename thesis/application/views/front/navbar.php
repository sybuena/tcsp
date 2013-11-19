<!-- Dropdown Header Region-->
<div class="header-hidden">
    <?php include('header/dropdown_header.php');?>
</div>

<!--Header & Branding Region-->
<div class="header">
    <div class="header-inner container">
        <div class="row-fluid">  
    		<?php include('header/branding_header.php');?>            
        </div>
    </div>
</div>

<div class="container">
    <div class="navbar-inner">
        <!--mobile collapse menu button-->
        <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <ul class="nav user-menu pull-right">
            <!-- Login & Register Region -->
            <?php if($this->session->userdata('front_logged_in')) :?>
    			<?php include('header/login_header.php');?>            
            <?php else :?>             
    			<?php include('header/register_header.php');?>            
            <?php endif; ?>              
        </ul>            
        
        <!-- Main Navigation Region -->
        <!--everything within this div is collapsed on mobile-->
        <div class="nav-collapse collapse">
    		<?php include('header/navigation_header.php');?>   
        </div>
    </div>
</div>