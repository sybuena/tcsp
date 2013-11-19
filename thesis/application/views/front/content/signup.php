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
        
          <h3 class="title-divider"><span>Sign Up</span></h3>
          <p><i><span class="error">*</span> Required Fields</i></p>
          
            <div class="alert alert-error display-none" id="error-signup">
                <i class="icon-warning-sign icon-3x pull-left"></i> 
                <h4>Warning!</h4>
                Change a few things up and try submitting again...
            </div> 
          <h5>Membership Plan</h5>
          <label><span class="error">*</span> Subscription plan</label>
          <h5 id="subscription-plan">New Member</h5>
          <label><span class="error">*</span> Price plan</label>
          <input type="text" id="price-plan" placeholder="" value="Php 1500.00" disabled="disabled">
          <hr>
          <h5>Personal Information</h5>
          <label><span class="error">*</span> First Name</label>  
          <input type="text" id="firstname" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Surname</label>  
          <input type="text" id="surname" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Full Address (House # / Street Name/ Province)</label>  
          <input type="text" id="address" class="placeholder" placeholder="">
          <label><span class="error">*</span> City</label>
          <input type="text" id="city" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Postal Code</label>  
          <input type="text" id="postal-code" class="input-block-level placeholder" placeholder="">
          <label>Landline Number</label>
          <small class="help-inline error display-none"><i>Landline number length must be 8</i></small>    
          <input type="text" id="land-number" class="input-block-level placeholder" maxlength="8">
          <label><span class="error">*</span> Mobile Number</label>  
          <small class="help-inline error display-none"><i>Mobile number length must be 11</i></small>  
          <input type="text" id="mobile-number" class="input-block-level placeholder" maxlength="11">
         
        </div>
        
        
        <div class="form-login form-wrapper form-medium form-fixed">
          <h5>Account Information</h5>
          <label><span class="error">*</span> Username</label>
          <small class="help-inline error display-none"><i>Username already taken</i></small>
          <input type="text" id="username" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Email address</label>  
          <small class="help-inline error display-none"><i>Invalid email format</i></small>
          <input type="text" id="email" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Password</label>  
          <h5 class="help-inline display-none">Password Strength : <span></span></h5>
          <small class="help-inline error display-none"><i>Password mismatch</i></small>
          <input type="password" id="password"class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Corfirm Password</label>  
          <input type="password" id="password2"class="input-block-level placeholder" placeholder="">
          <hr>	
          <h5>Company Information</h5>
          <label><span class="error">*</span> Company Name</label>  
          <input type="text" id="company-name" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Position</label>  
          <select id="position" class="input-block-level placeholder" >
          	<option value="president">President</option>
          	<option value="supervisor">Supervisor</option>
          	<option value="director">Director</option>
          	<option value="secretary">Secretary</option>
          </select>
          <label><span class="error">*</span> Full Address (House # / Street Name/ Province)</label>  
          <input type="text" id="company-address" class="placeholder" placeholder="">
          <label><span class="error">*</span> Company City</label>
          <input type="text" id="company-city" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Company Postal Code</label>
          <input type="text" id="company-postal-code" class="input-block-level placeholder" placeholder="">
          <label><span class="error">*</span> Company Landline Number</label>
          <small class="help-inline error display-none"><i>Landline number length must be 8</i></small>  
          <input type="text" id="company-land-number" class="input-block-level placeholder" maxlength="8">
          <label>Mobile Number</label>
          <small class="help-inline error display-none"><i>Mobile number length must be 11</i></small>  
          <input type="text" id="company-mobile-number" class="input-block-level placeholder" maxlength="11">
          <label class="checkbox">
            <input type="checkbox" value="term" id="terms"> I agree with the <a href="#Terms">Terms and Conditions</a>
          </label>
          <button class="btn btn-primary" type="submit" id="new-member">Sign up</button>
        </div>
      </div>
    </div>