
<div class="box">
	<div class="box-header"><span class="title">New Register</span></div>
    	<div class="box-content">
			<div id="dataTables">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                    <thead>
                        <tr>
                          <th><div>Action</div></th>
                          <th><div>Name</div></th>
                          <th><div>Email</div></th>
                          <th><div>Location</div></th>
                          <th><div>Company</div></th>
                          <th><div>Position</div></th>
                        </tr>
                        </thead>
                    	<tbody>
							<?php foreach((array)$newRegister as $key => $value): ?>
                                <tr>
                                  <td class="center">
                                                                        
                                    <div class="btn-group">
                                        <button class="btn btn-mini btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-cog"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo '/admin/accept/'.$value['id'];?>">Mark as In Progress</a></li>
                                          <li><a href="<?php echo '/admin/declined/'.$value['id'];?>">Decline User</a></li>
                                        </ul>
                                      </div>
                                  </td>
                                  <td><?php echo $value['surname'].', '.$value['firstname']; ?></td>
                                  <td><?php echo $value['email']; ?></td>
                                  <td><?php echo $value['city']?></td>
                                  <td><?php echo $value['company-name']?></td>
                                  <td><?php echo $value['position']?></td>
                                  
                                  
                                </tr>
                            <?php endforeach; ?>
						</tbody>
					</table>
				</div>
      		</div>
    	</div>  
    
