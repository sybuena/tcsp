<div class="primary-sidebar">
    <!-- Main nav -->
    <ul class="nav nav-collapse collapse nav-collapse-primary">
        <li class="">
            <span class="glow"></span>
            <a href="#dashboard">
                <i class="icon-dashboard icon-2x"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="dark-nav">
            <span class="glow"></span>
            <a class="accordion-toggle collapsed " data-toggle="collapse" href="#MB8CPSHAKP">
                <i class="icon-group icon-2x"></i>
                <span>
                  Users
                    
                <i class="icon-caret-down"></i>
                </span>
            </a>                
            <ul id="MB8CPSHAKP" class="collapse ">
                <li class="">
                    <a href="#newMember">
                      <i class="icon-user"></i> 
                      <span class="label label-info" id="user-counter"> <?php echo count($newRegister); ?> </span>
                      New Registered
                    </a>
                </li>
                <li class="">
                    <a href="#users">
                      <i class="icon-share-sign"></i> 
                      <span class="label label-warning" id="user-counter"> <?php echo count($trial); ?> </span>
                      
                      In Proccess
                    </a>
                </li>
                <li class="">
                    <a href="#approve">
                      <i class="icon-ok-sign"></i> 
                      <span class="label label-success" id="user-counter"> <?php echo count($memberList); ?> </span>
                      
                      Members
                    </a>
                </li>
                <li class="">
                    <a href="#archive">
                      <i class="icon-archive"></i> 
                      <span class="label label-error" id="user-counter"> <?php echo count($declined); ?> </span>
                      
                      Archive
                    </a>
                </li>
            </ul>
        </li>
         
        <li class="">
          <span class="glow"></span>
          <a href="#message">
              <i class="icon-envelope-alt icon-2x"></i>    
              <?php if($message > 0) :?>
                <span class="label label-info" id="message-counter"><?php echo $message; ?> </span> Messages
              <?php else : ?>
                <span>Messages</span>
              <?php endif; ?>
          </a>
        </li>
        
         <li class="dark-nav">
            <span class="glow"></span>
            <a class="accordion-toggle collapsed" data-toggle="collapse" href="#admins">
                <i class="icon-key icon-2x"></i>
                <span>
                  Administrator
                    
                <i class="icon-caret-down"></i>
                </span>
            </a>                
            <ul id="admins" class="collapse ">
                <li class="">
                    <a href="#signup">
                      <i class="icon-plus-sign"></i> 
                      
                      Add Administrator
                    </a>
                </li>
                <li class="">
                    <a href="#admin-list">
                      <i class="icon-group "></i> 
                      <span class="label label-info" id="user-counter"> <?php echo count($newRegister); ?> </span>
                      Administrator list
                    </a>
                </li>
            </ul>
        </li>
        
    </ul>
</div>