<ul class="nav" id="main-menu">
    <li class="home-link page-toggle" id="1">
        <a href="#Home"><i class="icon-home hidden-phone"></i>
        <span class="visible-phone"><?php echo $this->lang->line('home');?></span></a>
    </li>
    <li class="dropdown">
        <a href="" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">
        <?php echo $this->lang->line('features');?> +</a>
        <!-- Dropdown Menu -->
        <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
            <li class="mega-menu-wrapper" role="menuitem">
                <span class="menu-title">Mega Menu with links & text items</span>
                <ul class="row-fluid" role="menu">
                    <li class="span4" role="menuitem">
                        <a href=""></a>
                        <a href="" tabindex="-1" class="menu-item">Links</a>
                        <span>Taiwanese Chamber of the South Philippines</span>
                    </li>
                    <li class="span4" role="menuitem">
                        <a href=""></a>
                        <a href="" tabindex="-1" class="menu-item">Facilities</a>
                        <span>Taiwanese Chamber of the South Philippines</span>
                    </li>
                    <li class="span4" role="menuitem">
                        <a href=""></a>
                        <a href="" tabindex="-1" class="menu-item">Other message</a>
                        <span>Taiwanese Chamber of the South Philippines</span>
                    </li>
                </ul>
            </li>
        </ul>                
    </li>
    <li id="2" class="page-toggle">
        <a href="#News" class="menu-item"><?php echo $this->lang->line('news');?></a>
    </li>
    <li class="dropdown">
        <a href="" class="dropdown-toggle" id="about-drop" data-toggle="dropdown"><?php echo $this->lang->line('about');?> +</a> 
        <!-- Dropdown Menu -->
        <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
            <li role="menuitem" id="4" class="page-toggle">
                <a href="#History" tabindex="-1" class="menu-item"><?php echo $this->lang->line('history');?></a>
            </li>
            <li role="menuitem" id="5" class="page-toggle">
                <a href="#Team" tabindex="-1" class="menu-item"><?php echo $this->lang->line('our_team');?></a>
            </li>
            <li role="menuitem" id="6" class="page-toggle">
                <a href="#Contact" tabindex="-1" class="menu-item"><?php echo $this->lang->line('contact_us');?></a>
            </li>
        </ul>
    </li>              
</ul>