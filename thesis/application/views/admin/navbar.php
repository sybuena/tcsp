<div class="primary-sidebar">
    <!-- Main nav -->
    <ul class="nav nav-collapse collapse nav-collapse-primary">
        <li class="active">
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
                   <span class="label label-success" id="user-counter"> <?php echo count($newRegister); ?> </span> Users
                    
                <i class="icon-caret-down"></i>
                </span>
            </a>                
            <ul id="MB8CPSHAKP" class="collapse ">
                <li class="">
                    <a href="#users">
                      <i class="icon-user"></i> Members
                    </a>
                </li>
                
                <li class="">
                    <a href="#contacts">
                      <i class="icon-user"></i> Contacts
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
    </ul>
</div>