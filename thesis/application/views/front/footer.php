<footer id="footer">
	<div class="container">
    	<div class="row">
        	<div class="span3 col">
            	<div class="block contact-block">
              		<h3><?php echo $this->lang->line('contact_us');?></h3>
                    <address>
                    	<p><abbr title="Phone"><i class="icon-phone"></i></abbr> +63 046 4303475</p>
                    	<p><abbr title="Email"><i class="icon-envelope"></i></abbr> tcsp.assoc@gmail.com</p>
                    	<p><abbr title="Address"><i class="icon-home"></i></abbr> 
                        <?php echo $this->lang->line('address');?></p>
                    </address>             
            	</div>
          	</div>

          	<div class="span5 col">
            	<div class="block">
              		<h3><?php echo $this->lang->line('vision');?></h3>
              		<p><?php echo $this->lang->line('vision_1');?></p>
            	</div>
          	</div>           
          
          	<div class="span4 col">
            	<div class="block newsletter">
              		<h3><?php echo $this->lang->line('newsletter');?></h3>
              		<p><?php echo $this->lang->line('newsletter_1');?></p>
                    <form class="form-inline">
                    	<div class="input-append">
                      		<input class="input-medium" type="text" placeholder="Email" />
                      		<button class="btn btn-primary" type="button">Go!</button>
                    	</div>
                    </form>
            	</div>
          </div>
        
        </div>
      
        <div class="row-fluid">
          	<div id="toplink">
            	<a href="#top" class="top-link" title="Back to top">Back To Top <i class="icon-chevron-up"></i></a>
            </div>
          	
            <div class="subfooter">            
            	<div class="span6">
              		<p>Cavite State University <a href="#">CvSU</a> | Copyright 2013 &copy; CvSU</p>
            	</div>
            
            	<div class="span6">
              		<ul class="inline pull-right">
                        <li><a href="#Terms" class="page-toggle" id="8"><?php echo $this->lang->line('terms');?></a></li>
                        <li><a href="#Privacy" class="page-toggle" id="9"><?php echo $this->lang->line('privacy');?></a></li>
                        <li class="page-toggle" id="6"><a href="#Contact"><?php echo $this->lang->line('contact_us');?></a></li>
              		</ul>
            	</div>
          	</div>
        </div>        
	</div>
</footer>
    
  </body>
</html>

<script src="<?php echo base_url().'assets/ver2/js.js';?>" type="text/javascript"></script>



<script type="text/javascript">
/*
$(window).on('hashchange', function() {
  console.log(window.location.hash);
});
return false
$('.page-toggle').click(function() {
	var id = $(this).attr('id');
	
	totalPanes = 30;
	//hide all pages
	for (i = 1; i <= totalPanes; i++) {
		$('.content-toggle' + i).hide();	
	}
	
	//show specific page
	$('.content-toggle'+id).show();
	return false;
});


$("#inquire-modal").on("show", function () {
	  $("body").addClass("modal-open");
	}).on("hidden", function () {
	  $("body").removeClass("modal-open")
	});
	
$('#inquire-btn').click(function() {
	$('#error-message').hide();
	$('#loading-message').hide();
	$('#success-message').hide();
	$('#message_email').val('');
	$('#message_subject').val('');
	$('#message_content').val('');
	
	var data = {
		'message_email' 	: $('#message_email').val(),
		'message_subject' 	: $('#message_subject').val(),	
		'message_content' 	: $('#message_content').val()
	}
	
	for(i in data) {
		$('#'+i).parent().parent().removeClass('error');
	}
		
	$('#inquire-modal').modal('show');
	$('#send_message').click(function() {
		var error = false;
		var data = {
			'message_email' 	: $('#message_email').val(),
			'message_subject' 	: $('#message_subject').val(),	
			'message_content' 	: $('#message_content').val()
		}
		
		for(i in data) {
			$('#'+i).parent().parent().removeClass('error');
		}
		for(i in data) {
		
			if($('#'+i).val().length == 0) {
				$('#'+i).parent().parent().addClass('error');
				error = true;
			}
		}
		
		if(error) {
			$('#error-message').show();
			return false;
		} 
		$('#error-message').hide();		
		$('#loading-message').show();
		
		$.ajax({
			type 		: 'POST',
			data		: {'data':data},	
			dataType 	: 'json',
			url 		: '<?php echo base_url().'home/sendMessage/'; ?>',
			success		: function(data2) {
				$('#loading-message').hide();
		
				$('#success-message').show();
				
					//refresh page
					location.reload();
				
			}, 
			error : function(e) {
				$('#error-message').show();
				$('#loading-message').hide();
			}			
		})
	});
	
	return false;
});

$('#new-member').click(function() {
	 
	var error 	= false;
	var data 	= {
		'username' 		: $('#username').val(),
		'password'		: $('#password').val(),
		'firstname'		: $('#first-name').val(),
		'surname'		: $('#sur-name').val(),
		'email'			: $('#email').val(),
		'address'		: $('#address').val(),
		'city'			: $('#city').val(),
		'postal-code'			: $('#postal-code').val(),
		'company-name' 			: $('#company-name').val(),
		'company-city'			: $('#company-city').val(),
		'company-address'		: $('#company-address').val(),
		'company-postal-code'	: $('#company-address').val(),
		'position'				: $('#position').val(),
		'company-land-number'	: $('#company-address').val(),
	};
	
	var subs = {
		'payment_plan'	: $('#subscription-plan').val(),
		'payment_price'	: $('#price-plan').val() 
	};
	
	for(i in data) {
		$('#'+i).removeClass('error');
	}
	
	$('#email').prev().hide();
	$('#password').prev().hide();
	$('#username').prev().hide();
	
	for(i in data) {
		
		if($('#'+i).val().length == 0) {
			$('#'+i).addClass('error');
			error = true;
		}
	}
	
	if(!validEmail($('#email').val())) {
		$('#email').prev().show();
		$('#email').addClass('error');
		error = true;
	}
	
	if($('#password').val() != $('#password2').val()) {
		$('#password').prev().show();
		$('#password').addClass('error');
		error = true;
	
	}
	
	if(error) {
		$('#error-signup').show();
	} else {
	
		$('#error-signup').hide();
		
		$.ajax({
			type 		: 'POST',
			data		: {'data':data,'subs':subs},	
			dataType 	: 'json',
			url 		: '/verifyLogin/signup/',
			success		: function(data2) {
				if(data2.result == 0) {
					$('#error-signup').show();
					$('#username').prev().show();
					$('#username').addClass('error');
				} else {
					//refresh page
					location.reload();
				}
			}, 
			error : function(e) {
			}			
		})
	}
	
	return false;
	
});

function validEmail(v) {
    var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
    return (v.match(r) == null) ? false : true;
}



$('#login-front').click(function() {
	
	$('#login-error').html('');
	
	var username = $('#front-username').val();
	var password = $('#front-password').val();
	var error	= false;
	if(username.length == 0) {
		error = true;
	}
	if(password.length == 0) {
		error = true;
	}
	
	if(error) {
		$('#login-error').html('Better check fomrs before submiting');
	} else {
		
		$.ajax({
			type 		: 'GET',
			dataType 	: 'json',
			url 		: '<?php echo base_url().'verifyLogin/frontLogin/'; ?>'+username+'/'+password,
			success		: function(data2) {
				console.log(data2);
				if(data2.result == 0){
					$('#login-error').html('Invalid username & password');
				} else {
					//refresh page
					location.reload();
				}
			}, 
			error : function(e) {
			}			
		})
	}
	return false;
	
})*/
 </script> 
