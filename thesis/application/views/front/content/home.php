<div class="hero" id="highlighted">
  <div class="inner">
    <!--Flexslider Showshow-->
    <section class="flexslider-wrapper container">
      <div class="flexslider" data-slidernav="auto" data-transition="slide">
        <!--The Slides-->
        <div class="slides">
          
          <!--Slide #1 with caption-->
          <div class="slide row-fluid">
            <div class="span7"><a href=""><img src="/assets/images/b.jpg" alt="Feature 1" style="margin-left:10px; margin-bottom:10px; margin-top:10px; margin-right:10px;"></a>
            </div>
            <div class="span5 caption">
                <h2><?php echo $this->lang->line('welcome');?></h2>
                <h4><?php echo $this->lang->line('compan_title');?></h4>
                <p style="font-size: 18px !important;"><?php echo $this->lang->line('subtitle');?></p>
                <a href="#" class="btn btn-large btn-primary page-toggle" id="4"><?php echo $this->lang->line('learn');?></a>
            </div>
          <?php /*if($admin):?>                
            <a target="_blank" href="<?php echo base_url().'app/edit/'.$slide_1[0]['ID']; ?>" class="btn btn-danger btn-mini pull-right"><i class="icon-edit"></i> Edit Slide</a>
            <?php endif; ?>
	<?php echo $slide_1[0]['data']; */?>
          </div>
          
          <!--Slide #2 straight image 1170px wide x 390px high-->
          <div class="slide row-fluid"> 
          <?php /*if($admin):?>                   
            <a target="_blank" href="<?php echo base_url().'app/edit/'.$slide_2[0]['ID']; ?>" class="btn btn-danger btn-mini pull-right"><i class="icon-edit"></i> Edit Slide</a>
            <?php endif; ?>
	<?php echo $slide_2[0]['data']; */?>         
              <div class="span3"><a href=""><img src="/assets/images/CHAMBER.png" width="100"alt="Feature 1" style="margin-top:18px; margin-left:10px; margin-bottom:10px;"></a></div>
            <div class="span8 caption">
                <h2><?php echo $this->lang->line('vision');?></h2>
                <p style="text-align:justify; font-size: 16px;"><?php echo $this->lang->line('vision_1');?></p>
            </div>              
            
          </div>
          
          <!--Slide #3 & so on below-->
          
        </div>
      </div>              
</section>
  </div>     
</div>     
  
<div id="content">
  <div class="container">
     <?php if(!empty($login)) : ?>
     <div class="block features">
          <h2 class="title-divider"><span><?php echo $this->lang->line('latest');?> <span class="de-em"><?php echo $this->lang->line('events');?></span></span> <small></small></h2>
          <ul class="thumbnails">
            <li class="span3">
              <a href=""><img src="/assets/images/e1.png" alt="Feature 1"></a>
              <h3 class="title"><a href="#"><?php echo $this->lang->line('oct');?><span class="de-em"> 2000</span></a></h3>
              <p><?php echo $this->lang->line('event_1');?></p>
            </li>
      
            <li class="span3">
              <a href=""><img src="/assets/images/e2.png" alt="Feature 1"></a>
              <h3 class="title"><a href="#"><?php echo $this->lang->line('feb');?><span class="de-em"> 2001</span></a></h3>
              <p><?php echo $this->lang->line('event_2');?></p>
            </li>
            
            <li class="span3">
              <a href=""><img src="/assets/images/e3.png" alt="Feature 1"></a>
              <h3 class="title"><a href="#"><?php echo $this->lang->line('sept');?> <span class="de-em">2001</span></a></h3>
              <p><?php echo $this->lang->line('event_3');?></p>
            </li>
            
            <li class="span3">
              <a href=""><img src="/assets/images/e4.png" alt="Feature 1"></a>
              <h3 class="title"><a href="#"><?php echo $this->lang->line('feb');?><span class="de-em"> 2002</span></a></h3>
              <p><?php echo $this->lang->line('event_4');?></p>
            </li>             
          </ul>
      </div>
    <?php endif; ?>
     
     
     
          
  	<div class="block testimonials margin-top-large">
          <h2 class="title-divider"><span><?php echo $this->lang->line('welcome');?> <span class="de-em"><?php echo $this->lang->line('message');?></span></span> 
          <small> <?php echo $this->lang->line('message_1')?></small></h2>
          <div class="row">
            <div class="span4">
              <blockquote>
                <p><?php echo $this->lang->line('our_website')?></p>
                <small> -- <?php echo $this->lang->line('chen')?><span class="spacer">/</span> <a href="#">@wenjuchen</a></small>
              </blockquote>
            </div>
            
            <div class="span4">
              <blockquote>
                <p><?php echo $this->lang->line('free_visit')?></p>
                <small>  <?php echo $this->lang->line('huang')?> <span class="spacer">/</span> <a href="#"><?php echo $this->lang->line('the_pres')?></a></small>
              </blockquote>
            </div>
            
            <div class="span4">
              <blockquote>
                <p><?php echo $this->lang->line('reg_now')?></p>
                <small> TCSP.org <span class="spacer">/</span> <a href="#">@tcsp</a></small>
              </blockquote>
            </div>            
          </div>
        </div>
        
  <div class="row-fluid">
    <!-- Plan features -->
    <div class="well well-mini pull-center">
      <h4 class="inline-el pad-right"><span><?php echo $this->lang->line('news')?> <span class="de-em"><?php echo $this->lang->line('news_1')?></span></h4>
      <p class="inline-el pad-left muted"><?php echo $this->lang->line('news_2')?> <span class="spacer">//</span> <?php echo $this->lang->line('news_3')?> <span class="spacer">//</span> New Year Celebration on January 2014 <span class="spacer">//</span> Sports Fest in Manila</p>
    </div>
  </div>   
  
     <div class="block features">
  <h2 class="title-divider"><span><?php echo $this->lang->line('sponsors')?> <span class="de-em"><?php echo $this->lang->line('sponsors_1')?></span></span> </h2>
  <ul class="thumbnails block customers">
       
      <li style="width: 210px; !important" class="span3 type-media" data-quicksand-id="id-0" data-quicksand-tid="type-media">
        <a href="#">
	  <span class="inner-wrapper">
	    <span class="img-wrapper"><img src="/assets/images/kolin.jpg" alt="Feature 1"></span>
        <span class="title" style="text-align:center">Kolin Philippines</span>
	  </span>
	</a>
      </li>    
      <li style="width: 210px; !important" class="span3 type-media" data-quicksand-id="id-0" data-quicksand-tid="type-media">
        <a href="#">
	  <span class="inner-wrapper" style="height: 137px;">
	    <span class="img-wrapper"><img src="/assets/images/tong hsing.gif" alt="Feature 1"></span>
        <span class="title" style="text-align:center; margin-top: -15px !important;">Tong Hsing Electronic Industries</span>
	  </span>
	</a>
      </li> 
        <li style="width: 210px; !important" class="span3 type-media" data-quicksand-id="id-0" data-quicksand-tid="type-media">
        <a href="#">
	  <span class="inner-wrapper">
	    <span class="img-wrapper"><img src="/assets/images/images.jpg" alt="Feature 1"></span>
        <span class="title" style="text-align:center">HCG</span>
	  </span>
	</a>
      </li>    
         <li style="width: 210px; !important" class="span3 type-media" data-quicksand-id="id-0" data-quicksand-tid="type-media">
        <a href="#">
	  <span class="inner-wrapper">
	    <span class="img-wrapper"><img src="/assets/images/china airlines.jpg" alt="Feature 1"></span>
        <span class="title" style="text-align:center">China Airlines</span>
	  </span>
	</a>
      </li>    
      <li style="width: 210px; !important" 	class="span3 type-media" data-quicksand-id="id-0" data-quicksand-tid="type-media">
        <a href="#">
	  <span class="inner-wrapper">
	    <span class="img-wrapper"><img src="/assets/images/eva air.gif" alt="Feature 1"></span>
        <span class="title" style="text-align:center">Eva Airlines</span>
	  </span>
	</a>
      </li>    
    
    
            </ul>   
            </div> 
    <!-- Services -->
          <?php /*if($admin):?>   
    <a target="_blank" href="<?php echo base_url().'app/edit/'.$block_1[0]['ID']; ?>" class="btn btn-danger btn-mini pull-right"><i class="icon-edit"></i> Edit Block</a>
    <?php endif; ?>
	<?php echo $block_1[0]['data']; */?>
    
    
    <!--Pricing Table-->
          <?php /*if($admin):?>   
    <a target="_blank" href="<?php echo base_url().'app/edit/'.$block_2[0]['ID']; ?>" class="btn btn-danger btn-mini pull-right"><i class="icon-edit"></i> Edit Block</a>
    <?php endif; ?>
	<?php echo $block_2[0]['data']; */?>
    
          <?php /*if($admin):?>   	
    <a target="_blank" href="<?php echo base_url().'app/edit/'.$block_3[0]['ID']; ?>" class="btn btn-danger btn-mini pull-right"><i class="icon-edit"></i> Edit Block</a>
    <?php endif; ?>
	<?php echo $block_3[0]['data']; */?>

           
    </div>
    
    <!--Customer testimonial-->
    <!--<div class="block testimonials margin-top-large">
      <h2 class="title-divider"><span>Highly <span class="de-em">Recommended</span></span> <small>99% of our customers recommend us!</small></h2>
      <div class="row">
        <div class="span4">
          <blockquote>
            <p>"It's totally awesome, we're could imagine life without it!"</p>
            <small><img src="img/team/jimi.jpg" alt="Jimi Bloggs" class="img-circle" /> Jimi Bloggs <span class="spacer">/</span> <a href="#">@mrjimi</a></small>
          </blockquote>
        </div>
        
        <div class="span4">
          <blockquote>
            <p>"10 out of 10, highly recommended!"</p>
            <small><img src="img/team/jobs.jpg" alt="Jimi Bloggs" class="img-circle" /> Steve Bloggs <span class="spacer">/</span> <a href="#">Founder of Apple</a></small>
          </blockquote>
        </div>
        
        <div class="span4">
          <blockquote>
            <p>"Our productivity & sales are up! Couldn't be happier with this product!"</p>
            <small><img src="img/team/adele.jpg" alt="Adele Bloggs" class="img-circle" /> Adele Bloggs <span class="spacer">/</span> <a href="#">@iamadele</a></small>
          </blockquote>
        </div>            
      </div>
    </div>-->
    
    
    
  </div>
</div>