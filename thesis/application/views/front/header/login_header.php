<?php $data = $this->session->userdata('front_logged_in'); ?>
<li class="welcomee" id="welcome-login">
    <span>Hi! <?php echo $data['username']; ?></span>
</li> 
<li class="is-login">
    <a href="#" class="show-hide btn btn-primary" data-target=".header-hidden"><?php echo $this->lang->line('chat_now');?></a>
</li> 
<li class="is-login">
    <a href="/home/logout" class="btn btn-primary"><?php echo $this->lang->line('logout');?></a>
</li> 