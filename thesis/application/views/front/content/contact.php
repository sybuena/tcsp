<div id="content">
      <div class="container" id="about">
        <div class="row">
          <!-- sidebar -->
          <div class="span3 sidebar">
            <div class="section-menu">
              <ul class="nav nav-list">
                <li class="nav-header"><?php echo $this->lang->line('in_section');?></li>
                <li id="4" class="page-toggle">
                <a href="#History" class="first"><?php echo $this->lang->line('about');?> <small><?php echo $this->lang->line('all_began');?></small><i class="icon-angle-right"></i>
                </a></li>
                <li id="5" class="page-toggle"><a href="#Team"><?php echo $this->lang->line('our_team');?> <small><?php echo $this->lang->line('team_star');?></small><i class="icon-angle-right"></i></a></li>
                <li class="active" id="6" class="page-toggle"><a href="#Contact"><?php echo $this->lang->line('contact_us');?><small><?php echo $this->lang->line('in_touch');?></small><i class="icon-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
          
          <!--main content-->
          <div class="span9">
            <h2 class="title-divider"><span><?php echo $this->lang->line('contact_us');?></span> <small><?php echo $this->lang->line('in_touch');?></small></h2>
            
            <div class="row-fluid">
              <div class="span6">
                <form id="contact-form" action="#">
                  <input type="text" class="span11 placeholder" placeholder="Name"><br>            
                  <input type="email" class="span11 placeholder" placeholder="Email"><br>
                  <textarea rows="12" class="span11 placeholder" placeholder="Message"></textarea><br>
                  <input type="button" class="btn btn-primary" value="Send Message">
                </form>            
              </div>
             
              <div class="span6">             
                <p><abbr title="Phone"><i class="icon-phone"></i></abbr> +63 046 4303475</p>
                <p><abbr title="Email"><i class="icon-envelope"></i></abbr> tcsp.assoc@gmail.com</p>
                <p><abbr title="Address"><i class="icon-home"></i></abbr> No. 13 5th Street Golden Mile
                  Business Park, Carmona, Cavite.</p>
                <p><a href="https://maps.google.co.uk/maps?hl=en&authuser=0&q=Golden+Mile+Business+Park,+Carmona,+Cavite&ie=UTF-8&ei=jExaUoysOaLsiAf1lICYDQ&ved=0CAoQ_AUoAg" target="_blank">
                  <img src="/assets/images/map.png" alt="Location map" class="img-polaroid">
                </a></p>                
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>