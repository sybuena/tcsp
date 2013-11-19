
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-40069579-1']);
    _gaq.push(['_setDomainName', 'beer2code.com']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
	
$(document).ready(function() {
	var interval = 5000;
	
	//initial load
	$('.content-toggle').hide();
	$('#dashboard').show();
	
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
		} else {
			$('.content-toggle').hide();
			$('#dashboard').show();
		}
		
	});
	
	/**
	 * Check for new register user and new message 
	 * on time set
	 * 
	 */
	window.setInterval(function(){
	  	/// call your function here
		checkNewRegister()
		checkNewMessage();
		
	}, interval);
	
	$('#new-admin').click(function() {
		
		$('#error-add-new').hide();
		$('#success-add-new').hide();
		$('#error-username').hide();
		
		//prepare variables
		var error 	= false;
		var data 	= {
			'username' 		: $('#username').val(),
			'password'		: $('#password').val(),
			'firstname'		: $('#firstname').val(),
			'surname'		: $('#surname').val(),
			'email'			: $('#email').val(),
		};
		//reset UI
		for(i in data) {
			$('#'+i).removeClass('error');
		}
		$('#password2').removeClass('error');
			
		//check for required fields
		for(i in data) {
			if($('#'+i).val().length == 0) {
				$('#'+i).addClass('error');
				error = true;
			}
		}
		//check if email is valid
		if(!validEmail($('#email').val())) {
			$('#email').prev().show();
			$('#email').addClass('error');
			error = true;
		}
		
		//check if password is match from retype password
		if($('#password').val() != $('#password2').val()) {
			$('#password').addClass('error');
			$('#password2').addClass('error');
			
			error = true;
			matchPass = false;
		}	
		
		if(!error) {
			
			//start ajax on server
			$.ajax({
				type 		: 'POST',
				data		: {'data':data,'subs':{}},	
				dataType 	: 'json',
				url 		: '/verifyLogin/signup/',
				success		: function(data2) {
					if(data2.result == 0) {
						$('#error-username').show();
						$('#username').addClass('error');
					} else {
					
						$('#success-add-new').show();
					}
				}, 
				error : function(e) {
				}			
			})
		} else {
			$('#error-add-new').show();
		}
		
		return false;	
	});
	
	function checkNewRegister() {
		
		$.ajax({
			type 		: 'GET',
			dataType 	: 'json',
			url 		: '/admin/newRegister/',
			success		: function(data2) {
				
				//if there is a new register user
				if(data2.count > 0) {
					$('#user-counter').html(data2.count);
				}
			}, 
			error : function(e) {
			}			
		})
	};
	
	function checkNewMessage() {
		
		$.ajax({
			type 		: 'GET',
			dataType 	: 'json',
			url 		: '/admin/newMessage/',
			success		: function(data2) {
				
				//if there is a new message user
				if(data2.count > 0) {
					$('#message-counter').html(data2.count);
				}
			}, 
			error : function(e) {
			}			
		})
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