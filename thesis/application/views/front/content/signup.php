<div id="content">
      <div class="container">
        <div class="alert alert-success display-none" id="success-registration" style="width: 800px; margin-left:auto; margin-right:auto;">
            <i class="icon-info-sign icon-3x pull-left"></i> 
            <h4>Success!</h4>
            You have successfully registered to our system. 
            An email confirmation will be send on you after our team finish reviewing your registration and about 
            your payments method
			
        </div> 
        <!-- Sign Up form -->
        <div class="form-login form-wrapper form-medium form-fixed">
        
          <h3 class="title-divider"><span><?php echo $this->lang->line('sign_up');?></span></h3>
          <p><i><span class="error">*</span> <?php echo $this->lang->line('required');?></i></p>
          
            <div class="alert alert-error display-none" id="error-signup">
                <i class="icon-warning-sign icon-3x pull-left"></i> 
                <h4>Warning!</h4>
                Change a few things up and try submitting again...
            </div> 
          <h5><?php echo $this->lang->line('membership');?></h5>
          <label><span class="error">*</span> <?php echo $this->lang->line('subscription');?></label>
          <input type="text" id="subscription" placeholder="" value="New Member" disabled="disabled">
          <label><span class="error">*</span> <?php echo $this->lang->line('price');?></label>
          <input type="text" id="price-plan" placeholder="" value="Php 1500.00" disabled="disabled">
          <hr>
          <h5><?php echo $this->lang->line('personal');?></h5>
          <label><span class="error">*</span> <?php echo $this->lang->line('given_name');?></label>  
          <input type="text" id="firstname" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('surname');?></label>  
          <input type="text" id="surname" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('full_add');?></label>  
          <input type="text" id="address" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('city');?></label>
          <input type="text" id="city" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('postal');?></label>  
          <input type="text" id="postal-code" class="input-block-level placeholder" placeholder="" maxlength="4">
          <label><?php echo $this->lang->line('landline');?></label>
          <small class="help-inline error display-none"><i>Landline number length must be 8</i></small>    
          <input type="text" id="land-number" class="input-block-level placeholder" maxlength="8">
          <label><span class="error">*</span> <?php echo $this->lang->line('mobile');?></label>  
          <small class="help-inline error display-none"><i>Mobile number length must be 11</i></small>  
          <input type="text" id="mobile-number" class="input-block-level placeholder" maxlength="11">
         
        </div>
        
        
        <div class="form-login form-wrapper form-medium form-fixed">
          <h5><?php echo $this->lang->line('account_info');?></h5>
          <label><span class="error">*</span> <?php echo $this->lang->line('username');?></label>
          <small class="help-inline error display-none"><i>Username already taken</i></small>
          <input type="text" id="username" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('email');?></label>  
          <small class="help-inline error display-none"><i>Invalid email format</i></small>
          <input type="text" id="email" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('pass');?></label>  
          <h5 class="help-inline display-none">Password Strength : <span></span></h5>
          <small class="help-inline error display-none"><i>Password mismatch</i></small>
          <input type="password" id="password"class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('confirm');?></label>  
          <input type="password" id="password2"class="input-block-level placeholder" placeholder="">
          <hr>	
          <h5><?php echo $this->lang->line('company_1');?></h5>
          <label><span class="error">*</span> <?php echo $this->lang->line('company_2');?></label>  
          <input type="text" id="company-name" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('position');?></label>  
          <select id="position" class="input-block-level placeholder" >
          	<option value="president"><?php echo $this->lang->line('president');?></option>
          	<option value="supervisor"><?php echo $this->lang->line('supervisor');?></option>
          	<option value="director"><?php echo $this->lang->line('director');?></option>
          	<option value="secretary"><?php echo $this->lang->line('secretary');?></option>
            <option value="secretary">N/A</option>
          </select>
          <label><span class="error">*</span> <?php echo $this->lang->line('full_add');?></label>  
          <input type="text" id="company-address" class="placeholder input-block-level" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('city_1');?></label>
          <input type="text" id="company-city" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> <?php echo $this->lang->line('postal_1');?></label>
          <input type="text" id="company-postal-code" class="input-block-level placeholder" placeholder="" maxlength="4">
          <label><span class="error">*</span> <?php echo $this->lang->line('landline_1');?></label>
          <small class="help-inline error display-none"><i>Landline number length must be 8</i></small>  
          <input type="text" id="company-land-number" class="input-block-level placeholder" maxlength="8">
          <label><?php echo $this->lang->line('mobile');?></label>
          <small class="help-inline error display-none"><i>Mobile number length must be 11</i></small>  
          <input type="text" id="company-mobile-number" class="input-block-level placeholder" maxlength="11">
          <label class="checkbox">
            <input type="checkbox" value="term" id="terms"> <?php echo $this->lang->line('agree');?> <a href="#Terms"><?php echo $this->lang->line('terms_condition');?></a>
          </label>
          <button class="btn btn-primary" type="submit" id="new-member"><?php echo $this->lang->line('sign_up');?></button>
        </div>
      </div>
    </div>