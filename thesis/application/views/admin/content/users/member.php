<?php $view = base_url().'admin/users/detail/'; ?>
<?php $edit = base_url().'admin/users/edit/'; ?>
<?php $remove = base_url().'admin/remove/'; ?>

<div class="box">
	<div class="box-header"><span class="title">In Proccess Member</span></div>
    	<div class="box-content">
			<div id="dataTables">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                    <thead>
                        <tr>
                          <th><div>Name</div></th>
                          <th><div>Email</div></th>
                          <th><div>Location</div></th>
                          <th><div>Action</div></th>
                        </tr>
                        </thead>
                    	<tbody>
							<?php foreach((array)$trial as $key => $value): ?>
                                <tr>
                                  <td><?php echo $value['surname'].', '.$value['firstname']; ?></td>
                                  <td><?php echo $value['email']; ?></td>
                                  <td><?php echo $value['city']?></td>
                                  
                                  <td class="center">
                                  	<?php if(isset($value['documents']) && !empty($value['documents'])) :?>
                                    	<a class="btn btn-mini btn-primary view-docu" id="<?php echo $value['id']; ?>">
                                    		<i class="icon-file-text-alt"></i> View Documents
                                        </a>
                                    <?php else: ?>
                                    	<a class="btn btn-mini btn-primary" disabled="disable">
                                    	<i class="icon-file-text-alt"></i> Empty Documents 
                                        </a>  
                                    <?php endif; ?>    
                                    <!--<a href="#"  class="btn btn-mini btn-primary" onClick="javascript:chatWith('<?php echo $value['username']; ?>');">Send Message</a>-->
                                    
                                    <a href="<?php echo $remove.$value['id']; ?>" class="btn btn-mini btn-red">
                                        <i class="icon-remove"></i> Remove</a>
                                  </td>
                                </tr>
                            <?php endforeach; ?>
						</tbody>
					</table>
				</div>
      		</div>
</div>	

<div id="docu-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" style="width: 900px;
left: 38%;">
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Documents</h3>
    </div>
    
    <div class="modal-body">
    	
    </div>
    <div class="modal-footer">
          <a href type="submit" class="btn btn-primary btn-large docu-accept"><i class="icon-ok-sign icon-3x"></i> Accept</a>
          <a href type="submit" class="btn btn-red btn-large docu-decline"><i class="icon-remove-sign icon-3x"></i> Decline</a>
    </div>
</div>    
    
