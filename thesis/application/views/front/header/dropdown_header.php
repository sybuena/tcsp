<div class="header-hidden-inner container">
    <div class="row-fluid">
        <!-- About us section -->
        <div class="span4">
            <?php //echo $header_1[0]['data']; ?>
             <h3><?php echo $this->lang->line('change_language');?></h3>
            <ul>
                <li><a href="<?php echo base_url(). '?language=english';?>">English</a></li>
                <li><a href="<?php echo base_url(). '?language=chinese';?>">Chinese</a></li>
            </ul>
            <p>
                <?php echo $this->lang->line('current_language');?>: <?php echo $lang;?>
            </p>
        </div>
          
        <!-- Contact us section -->
        <div class="span4">  
            <!--@todo: replace with company contact details-->
            <h3><?php echo $this->lang->line('contact_us');?></h3>
            <address>
              <p><abbr title="Phone"><i class="icon-phone"></i></abbr> +63 046 4303475</p>
              <p><abbr title="Email"><i class="icon-envelope"></i></abbr> tcsp.assoc@gmail.com</p>
              <p><abbr title="Address"><i class="icon-home"></i></abbr> <?php echo $this->lang->line('address');?></p>
            </address>
        </div>
        
        <!-- If there is a login user -->
        <?php if(!empty($login) && $login['is_ok']) :?>
            <div class="span4">
                <div class="colour-switcher">
                    <h3><?php echo $this->lang->line('online_admin');?></h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php echo $this->lang->line('online');?></th>
                                <th><?php echo $this->lang->line('username');?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($listOfUsers as $res) : ?>
                            <tr>
                                <td>
                                    <?php if($res['online']==1) echo 'Active'; else echo ('Inactive'); ?>
                                </td>
                                <td>
                                    <?php if($_SESSION['username']==$res['username']) : ?>
                                        <button class="btn btn-primary">
                                            <?php echo ucfirst($res['username']); ?>
                                        </button>	                   	
                                    <?php else :?>      
                                        <button class="btn btn-primary" 
                                        onClick="javascript:chatWith('<?php echo $res['username']; ?>');">
                                        <?php echo ucfirst($res['username']); ?></button>	
                                    <?php endif ?>      
                                </td>
                            </tr>
                        <?php endforeach; ?> 	
                        </tbody>
                    </table>
                </div> 
            </div>
        <!-- else no login user-->
        <?php else : ?>
            <div class="span4">
                <div class="colour-switcher">
                    <h3><?php echo $this->lang->line('alot_question');?></h3>
                    <p> <?php echo $this->lang->line('alot_question_body');?>
                        
                    </p>
                    <button class="btn btn-large btn-primary" id="inquire-btn">
					<?php echo $this->lang->line('inquire');?>
                    </button>
                </div>
            </div>
        <?php endif; ?>
    </div>
    </div>