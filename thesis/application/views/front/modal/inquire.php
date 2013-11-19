<div id="inquire-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Inquire now</h3>
    </div>
    
    <div class="modal-body">
    	
        <div class="alert alert-success" id="success-message" style="display:none">
            <i class="icon-info icon-3x pull-left"></i> 
            <h4>Horay!</h4>
            <span class="small-font">
                Your message has been send
            </span>
        </div>
        
        <div class="alert alert-info" id="loading-message" style="display:none">
            <i class="icon-spinner icon-spin icon-3x pull-left"></i> 
            <h4>Loading System!</h4>
            <span class="small-font">
                Sending message...
            </span>
        </div>
        
        <div class="alert alert-error" id="error-message" style="display:none">
            <i class="icon-warning-sign icon-3x pull-left"></i> 
            <h4>Oh Snap!</h4>
            <span class="small-font">
                Better check fields before submitting
            </span>
        </div>
        
        <div class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="inputEmail">Email Address :</label>
            <div class="controls">
          		<input type="text" class="span5" id="message_email">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Subject : </label>
            <div class="controls">
          		<input type="text" class="span5" id="message_subject">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Message : </label>
            <div class="controls">
          <textarea class="span5" style="height: 100px;" id="message_content"></textarea>
            </div>
          </div>
        </div>
    	
    </div>
    <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-large" id="send_message">Send message</button>
    </div>
</div>    
    
