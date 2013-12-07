<div class="navbar navbar-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="#">TCSP</a>
      			<ul class="nav pull-right">
        			<li class="toggle-primary-sidebar hidden-desktop" 
                    data-toggle="collapse" data-target=".nav-collapse-primary">
                    	<button type="button" class="btn btn-navbar">
                        	<i class="icon-th-list"></i>
                        </button>
                     </li>
					<li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top">
                    	<button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button>
                    </li>
				 </ul>
				
                <div class="nav-collapse nav-collapse-top collapse">
					<ul class="nav full pull-right">
              			<li class="dropdown user-avatar">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  				<span>
                    				<span><?php echo $login['firstname']; ?> <i class="icon-caret-down"></i></span>
                    			</span>
                			</a>
							<ul class="dropdown-menu">
								<li class="with-image">
                                    <div class="avatar">
                                    	<img src="<?php echo base_url().'assets/images/CHAMBER.jpg'; ?>" />
                                    </div>
                                    <span><?php echo $login['firstname'].' '.$login['surname']; ?></span>
                                </li>
								<li class="divider"></li>
								<li>
                                	<a href="#message"><i class="icon-envelope"></i>  
										<?php if($message > 0) :?>
                                            <span class="label label-info" id="message-counter"><?php echo $message; ?> </span> Messages
                                        <?php else : ?>
                                            <span>Messages</span>
                                        <?php endif; ?>
                                    </a>
                               	</li>
                                <li>
                                	<a href="#signup"><i class="icon-user"></i> 
                                    	<span>Add Administrator</span>
                                    </a>
                                </li>
                  				<li>
                                	<a href="<?php echo base_url().'admin/logout';?>"><i class="icon-off"></i> 
                                    	<span>Logout</span>
                                    </a>
                                </li>
                			</ul>
              			</li>
            		</ul>
                    <form class="navbar-search pull-right">
                    	<input type="text" class="search-query animated" placeholder="Search">
                    	<i class="icon-search"></i>
                    </form>
          		</div>
    		</div>
  		</div>
	</div>
    
    <div class="sidebar-background">
  		<div class="primary-sidebar-background"></div>
	</div>