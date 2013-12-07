<div id="content">
      <div class="container">
      	<h2>User Profile</h2>
        <p>View and edit your personal information</p>
        <hr>
        <?php if(!$login['is_ok']) :?>
         <div class="form-login form-wrapper form-large">
         	<h4>Upload Required Files</h4>
            
            <div class="row">
                <div class="span6">
                	<div class="alert alert-error display" id="">
                        <i class="icon-warning-sign icon-3x pull-left"></i> 
                        <h4>Reminders!</h4>
                        	Please submit a scanned copy of your deposit split upon payment.
							After submission, wait for 3 bussiness day while we review your submitted documents
                    </div> 
                    <form id="imageform" action="/home/upload" method="post" enctype="multipart/form-data">
                    	<input type="file" name="fileData" id="img"/>
                    	<button class="btn btn-primary">Upload</button>
                	</form>
                </div>
                <div class="span5">
					<?php if(isset($documents) && !empty($documents)) : ?>
                        <?php foreach($documents as $v) :?>
                            <div class="docu-holder">
                                <img src="<?php echo $v['image']; ?>">
                                <label><?php echo $v['image_name']; ?></label>
                                <hr>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                    	<center><h4>No Documents Submitted</h4></center>    
                    <?php endif; ?>
                </div>
            </div>
         </div>
         <?php endif; ?>
         <br>
         <div class="form-login form-wrapper form-medium form-fixed">
          <h4><?php echo $this->lang->line('account_info');?></h4>
          <label><strong>Created On:</strong> <?php echo date('l, F j, Y',strtotime($login['payment_created'])); ?></label>
          <label><strong>Status:</strong> <?php echo $login['is_ok'] ? 
		  	'<span class="green">Activated</span>' : 
			'<span class="error">Not Activated</span>'; ?>
          </label>
          <?php if($login['is_ok']) :?>
          	<label><strong>Expired On:</strong> <?php echo date('l, F j, Y',strtotime($login['payment_due'])); ?></label>
          <?php endif; ?>
          
          <hr>
          <h4><?php echo $this->lang->line('personal');?></h4>
          <label><strong>Firstname: </strong></label>
          <input type="text" id="firstname" class="input-block-level placeholder" value="<?php echo $login['firstname']; ?>">
          <label><strong>Surname: </strong></label>
          <input type="text" id="surname" class="input-block-level placeholder" value="<?php echo $login['surname']; ?>">
          <label><strong>Email: </strong></label>
          <input type="text" id="email" class="input-block-level placeholder" value="<?php echo $login['email']; ?>">
          <label><strong>City: </strong></label>
          <input type="text" id="city" class="input-block-level placeholder" value="<?php echo $login['city']; ?>">
          <label><strong>Address: </strong></label>
          <input type="text" id="address" class="input-block-level placeholder" value="<?php echo $login['address']; ?>">
          
        </div>
        
        <div class="form-login form-wrapper form-medium form-fixed">
          <h4><?php echo $this->lang->line('company_1');?></h4>
          <label><strong>Company: </strong></label>
          <input type="text" id="company" class="input-block-level placeholder" value="<?php echo $login['company-name']; ?>">
          <label><strong>Position: </strong></label>
          <input type="text" id="position" class="input-block-level placeholder" value="<?php echo $login['position']; ?>">
          <label><strong>Company City: </strong></label>
          <input type="text" id="company-city" class="input-block-level placeholder" value="<?php echo $login['company-city']; ?>">
          <label><strong>Company Address: </strong></label>
          <input type="text" id="company-address" class="input-block-level placeholder" value="<?php echo $login['company-address']; ?>">
          <label><strong>Company Landline Number: </strong></label>
          <input type="text" id="company-land-number" class="input-block-level placeholder" value="<?php echo $login['company-land-number']; ?>">
          <label><strong>Company Mobile Number: </strong></label>
          <input type="text" id="company-mobile-number" class="input-block-level placeholder" value="<?php echo $login['company-mobile-number']; ?>">
          
          
        </div>
      </div>
</div>
