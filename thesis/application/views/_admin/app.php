<div class="navbar navbar-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container-fluid">
		<a class="brand" href="#">Taiwanese Chamber of the South Philippines</a>
		<!-- the new toggle buttons -->
            <ul class="nav pull-right">
            
            <li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary">
            	<button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>
            
            <li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>
            
            </ul>
    </div>
  </div>
</div>
<div class="container">
	<h4>Page</h4>
	<textarea id="app-copy" style="margin: 20px 0px 20px; width: 1190px; height: 201px;"><?php echo $html; ?>
    </textarea>  
    <button type="button" class="btn btn-primary save-app" id="<?php echo $ID; ?>">Save Changes</button>
</div>
</div>
<script type="text/javascript">
	$('#app-copy').ckeditor();
	
	$('.save-app').click(function() {
		var id = $(this).attr('id');
		var val = CKEDITOR.instances['app-copy'].getData();
		
		$.ajax({
			type 		: 'POST',
			data		: {'id':id,'val':val},	
			dataType 	: 'json',
			url 		: '<?php echo base_url().'app/update/'; ?>',
			success		: function(data2) {
				
				if(data2.result == 0){
				} else {
					//refresh page
					location.reload();
				}
			}, 
			error : function(e) {
			}			
		})
		
		return false;
	});
</script>
