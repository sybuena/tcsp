/**
 * Note: we need good javascript design pattern
 * as of now we are using basic pattern 
 * 
 */
$(document).ready(function() {
	
	var EMAIL_PATTERN = "[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?";
  	
	
	
	/* ------------------------------------------
				EVENT HANDLER
	   ------------------------------------------ */
	 
	if(window.location.hash) {
    	var hash = window.location.hash; //Puts hash in variable, and removes the # character
     	if(hash == '#top') {
			hash = '';
		}
		
		if(hash != '') {
			$('.content-toggle').hide();
			$(hash).show();
		} else {
			$('.content-toggle').hide();
			$('#dashboard').show();
		}
  	}  
	/**
	 * This Method will toggle all the pages in front page
	 * by using hashtag in the url
	 * 
	 */
	$(window).on('hashchange', function() {
		var hash = window.location.hash;
		
		if(hash == '#top') {
			hash = '';
		}
		
		if(hash != '') {
			$('.content-toggle').hide();
			$(hash).show();
		}
		
	});
	
	/**
	 * On input enter modify behavior
	 * 
	 */
	$.fn.onEnterKey = function( closure ) {
    	$(this).keypress(
            function( event ) {
                var code = event.keyCode ? event.keyCode : event.which;

                if (code == 13) {
                    closure();
                    return false;
                }
            } );
    }
	
	$('#inquire-btn').click(function() {
		processInquire();
		return false;
	});
	
	$('#new-member').click(function() {
		register();
		return false;
	});
	
	/**
	 * Event on hitting login button
	 */
	$('#login-front').click(function() {
		login();
		return false;
		
	})
	
	/**
	 * Event on enter input password
	 */
	$('#front-password').onEnterKey(function() {
		login();
		return false;
	});
	
	/**
	 * Event on enter input username
	 */
	$('#front-username').onEnterKey(function() {
		login();
		return false;
	});
	
	/* ------------------------------------------
				PROTECTED FUNCTION
	   ------------------------------------------ */
		   
	/**
	 * Login user (still lots of work here need to improve coz in this method
	 * we will end up facing pipe listener hacking) solution md5 hash maybe later
	 * 
	 * return string
	 */  
	function login()  {
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
				url 		: '/verifyLogin/frontLogin/'+username+'/'+password,
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
	}
	
	/**
	 * Register new member to the system of all 
	 * criteria pass
	 * 
	 * return false
	 */   
	function register() {
		//prepare variables
		var error 	= false;
		var data 	= {
			'username' 		: $('#username').val(),
			'password'		: $('#password').val(),
			'firstname'		: $('#firstname').val(),
			'surname'		: $('#surname').val(),
			'email'			: $('#email').val(),
			'address'		: $('#address').val(),
			'mobile-number'		: $('#address').val(),
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
		
		//reset UI
		for(i in data) {
			$('#'+i).removeClass('error');
		}
		
		$('#email').prev().hide();
		$('#password').prev().hide();
		$('#username').prev().hide();
		$('#password').prev().prev().hide();
		
		//check for required fields
		for(i in data) {
			if($('#'+i).val().length == 0) {
				$('#'+i).addClass('error');
				error = true;
			}
		}
		
		
		if($('#mobile-number').val() != '') {
			//check mobile number lenght
			if($('#mobile-number').val().length != '11') {
				$('#mobile-number').prev().show();
				$('#mobile-number').addClass('error')
				error = true;
				
			} else {
				$('#mobile-number').prev().hide();
				$('#mobile-number').removeClass('error')
				
			}
		} else {
			$('#mobile-number').prev().hide();
			//$('#mobile-number').removeClass('error')
			
		}
		
		if($('#land-number').val() != '') {
			//check mobile number lenght
			if($('#land-number').val().length != '8') {
				$('#land-number').prev().show();
				$('#land-number').addClass('error')
				error = true;
				
			} else {
				$('#land-number').prev().hide();
				$('#land-number').removeClass('error')
				
			}
		} else {
			$('#land-number').prev().hide();
			$('#land-number').removeClass('error')
			
		}
		
		if($('#company-mobile-number').val() != '') {
			//check mobile number lenght
			if($('#company-mobile-number').val().length != '11') {
				$('#company-mobile-number').prev().show();
				$('#company-mobile-number').addClass('error')
				error = true;
			} else {
				
				$('#company-mobile-number').prev().hide();
				$('#company-mobile-number').removeClass('error')
			}
		} else {
				
			$('#company-mobile-number').prev().hide();
			$('#company-mobile-number').removeClass('error')
		}
		
		if($('#company-land-number').val() != '') {
			//check mobile number lenght
			if($('#company-land-number').val().length != '8') {
				$('#company-land-number').prev().show();
				$('#company-land-number').addClass('error')
				error = true;
			} else {
				
				$('#company-land-number').prev().hide();
				$('#company-land-number').removeClass('error')
			}
		} else {
				
			$('#company-land-number').prev().hide();
			$('#company-land-number').removeClass('error')
		}
		
		//check if email is valid
		if(!validEmail($('#email').val())) {
			$('#email').prev().show();
			$('#email').addClass('error');
			error = true;
		}
		var matchPass = true;
		//check if password is match from retype password
		if($('#password').val() != $('#password2').val()) {
			$('#password').prev().show();
			$('#password').addClass('error');
			error = true;
			matchPass = false;
		}
		
		if(matchPass) {
			//check password here
			var power = 0
			//if length is 8 characters or more, increase strength value
			if ($('#password').val().length > 7) power++;
		 
			//if password contains both lower and uppercase characters, increase strength value
			if ($('#password').val().match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  power++;
		 
			//if it has numbers and characters, increase strength value
			if ($('#password').val().match(/([a-zA-Z])/))  power++;
			
			
			//if it has numbers and characters, increase strength value
			if ($('#password').val().match(/([0-9])/))  power++;
		 
			//if it has one special character, increase strength value
			if ($('#password').val().match(/([!,%,&,@,#,$,^,*,?,_,~])/))  power++;
		 
			//if it has two special characters, increase strength value
			if ($('#password').val().match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,",%,&,@,#,$,^,*,?,_,~])/)) power++;
			
			//weak
			if(power < 2) {
				$('#password').prev().prev().children().html('Weak');
				$('#password').prev().prev().children().addClass('weak');
				error = true;
			//fair	
			} else if(power == 3) {
				$('#password').prev().prev().children().html('Fair');
				$('#password').prev().prev().children().addClass('fair');
			
			//good
			} else if(power == 4) {
				$('#password').prev().prev().children().html('Good');
				$('#password').prev().prev().children().addClass('good');
			
			//strong
			} else if(power == 5) {
				$('#password').prev().prev().children().html('Strong');
				$('#password').prev().prev().children().addClass('strong');
			}
			$('#password').prev().prev().show();
		}
		
		if($('#terms').prop('checked') != true) {
			error = true;
		}
		//if there is an error
		if(error) {
			//show error and return
			$('#error-signup').show();
			return false
		} 
	
		$('#error-signup').hide();
		
		//start ajax on server
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
					$('#success-registration').show();
					//refresh page
					//location.reload();
				}
			}, 
			error : function(e) {
			}			
		})
	
	
	}
	
	function checkPassword() {
		
	}
	
	/**
	 * This method will send message to the admin for
	 * customer who wants to inquire
	 * 
	 * return false
	 */
	function processInquire() {
		//unset UI here
		
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
		
		//show modal
		$('#inquire-modal').modal('show');
		//if send message button is click
		$('#send_message').click(function() {
		
			var error = false;
			var data = {
				'message_email' 	: $('#message_email').val(),
				'message_subject' 	: $('#message_subject').val(),	
				'message_content' 	: $('#message_content').val()
			}
			
			//unset UI again
			for(i in data) {
				$('#'+i).parent().parent().removeClass('error');
			}
			
			//check for required fields
			for(i in data) {
				if($('#'+i).val().length == 0) {
					$('#'+i).parent().parent().addClass('error');
					error = true;
				}
			}
			//check if email is valid
			if(!validEmail($('#message_email').val())) {
				$('#message_email').prev().show();
				$('#message_email').addClass('error');
				error = true;
			} else {
				$('#message_email').removeClass('error');
			}
			
			//if there's an error
			if(error) {
				//show error message and return false
				$('#error-message').show();
				return false;
			} 
			//show loading in screen
			$('#error-message').hide();		
			$('#loading-message').show();
			
			//start ajax on server
			$.ajax({
				type 		: 'POST',
				data		: {'data':data},	
				dataType 	: 'json',
				url 		: '/home/sendMessage/',
				success		: function(data2) {
					$('#loading-message').hide();
					$('#success-message').show();
					//on success refresh page
					location.reload();
				}, 
				//always expect error 
				error : function(e) {
					$('#error-message').show();
					$('#loading-message').hide();
				}			
			});
		});
	};
	
	/**
	 * Check email for email patern only NOT domain or 
	 * if email exist or not
	 * 
	 * return true|false
	 */
	function validEmail(v) {
		var r = new RegExp(EMAIL_PATTERN);
		return (v.match(r) == null) ? false : true;
	}
	
});
