
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
	
	var EMAIL_PATTERN = "[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?";

	var interval = 5000;
	var new_member = '<tr class="status-pending"><td class="icon"><i class="icon-exchange"></i></td>'+
           	'<td>[NAME]</td><td>[CITY]</td><td><div class="btn-group">'+
			'<button class="btn btn-mini btn-default dropdown-toggle" data-toggle="dropdown">'+
            '<i class="icon-cog"></i></button><ul class="dropdown-menu"><li><a href="/admin/accept/[ID]">Accept</a></li>'+
            '<li><a href="/admin/declined/[ID]">Decline</a></li></ul></div></td></tr>';
			
	//initial load;
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
		///checkNewRegister()
		//checkNewMessage();
		
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
				url 		: '/verifyLogin/signup2/',
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
					
					$('#new-member tbody').html('');
					$('#user-counter').html(data2.count);
					for(i in data2.row) { 
						//append to table
						$('#new-member tbody').append(new_member.
							replace('[NAME]', data2.row[i].firstname+' '+data2.row[i].surname).
							replace('[CITY]', data2.row[i].city).
							replace('[ID]', data2.row[i].id).
							replace('[ID]', data2.row[i].id)
						);		
					}
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