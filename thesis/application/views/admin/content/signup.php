<!-- 1. Content Header Section-->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="area-top clearfix">
        	<div class="pull-left header">
          		<h3 class="title"><i class="icon-table"></i>Add New Administrator</h3>
          		<h5></h5>
        	</div>
      	</div>
    </div>
</div>

<!-- 2. Breadcrums Section-->
<div class="container-fluid padded">
	<div class="row-fluid">
		<div id="breadcrumbs">
			<div class="breadcrumb-button blue">
          		<span class="breadcrumb-label"><i class="icon-home"></i> Admin</span>
          		<span class="breadcrumb-arrow"><span></span></span>
        	</div>
			<div class="breadcrumb-button">
          		<span class="breadcrumb-label"><i class="icon-group"></i> Administrator</span>
          		<span class="breadcrumb-arrow"><span></span></span>
        	</div>
			<div class="breadcrumb-button">
          		<span class="breadcrumb-label"><i class="icon-table"></i> Add</span>
          		<span class="breadcrumb-arrow"><span></span></span>
        	</div>
      	</div>
    </div>
</div>


<!-- 3. Main Content Section-->
<div class="container-fluid padded">
	<div class="row-fluid">
    	<div class="span12">
        	<div class="alert alert-success display-none" id="success-add-new" style="width: 800px; margin-left:auto; margin-right:auto;">
            <i class="icon-info-sign icon-3x pull-left"></i> 
            <h4>Success!</h4>
            You have successfully created a new administrator
			
        </div> 
        
        <div class="alert alert-error display-none" id="error-add-new">
            <i class="icon-warning-sign icon-3x pull-left"></i> 
            <h4>Warning!</h4>
            Change a few things up and try submitting again...
        </div> 
        
        <div class="alert alert-error display-none" id="error-username">
            <i class="icon-warning-sign icon-3x pull-left"></i> 
            <h4>Oh snap!</h4>
            Username already taken...
        </div> 
        	<div class="padded">
    			<div class="login box">
					<div class="box-header">
                  		<span class="title">Create User Admin</span>
                  	</div>
					<div class="box-content padded">
        			
                    <div class="separate-sections">
						<label>Email</label>
          				<div class="input-prepend">
          					<span class="add-on" href="#"><i class="icon-envelope"></i></span>
            				<input type="text"  id="email">
          				</div>
						
						<label>Given Name</label>
        				<div class="input-prepend">
                            <span class="add-on" href="#"><i class="icon-user"></i></span>
            				<input type="text" id="firstname">
          				</div>
          				
						<label>Surname</label>
          				<div class="input-prepend">
          					<span class="add-on" href="#"><i class="icon-user"></i></span>
            				<input type="text"  id="surname">
          				</div>
          				
						<label>Username</label>
                        <div class="input-prepend">
          					<span class="add-on" href="#"><i class="icon-user"></i></span>
            				<input type="text"  id="username">
          				</div>
						
						<label>Password</label>
          				<div class="input-prepend">
                        	<span class="add-on" href="#"><i class="icon-key"></i></span>
                            <input type="password" name="password" id="password" class="">
                        </div>
						
						<label>Confirm Password</label>
          				<div class="input-prepend">
                        	<span class="add-on" href="#"><i class="icon-key"></i></span>
            				<input type="password" id="password2">
          				</div>  

          				<div>
                            <button class="btn btn-blue btn-block" id="new-admin">
                                Create <i class="icon-signin"></i>
                            </button>
                          </div>

        </div>

    </div>

    
  </div>
</div>
        
        
        </div>
    </div>
</div>    