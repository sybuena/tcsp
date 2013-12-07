<div class="box">
	<div class="box-header"><span class="title">Administrators</span></div>
    	<div class="box-content">
			<div id="dataTables">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                    <thead>
                        <tr>
                          <th><div>Name</div></th>
                          <th><div>Username</div></th>
                          <th><div>Email</div></th>
                          <th><div>Created On</div></th>
                          <th><div>Usertype</div></th>
                        </tr>
                        </thead>
                    	<tbody>
							<?php foreach((array)$adminList as $key => $value): ?>
                                <tr>
                                  <td><?php echo $value['surname'].', '.$value['firstname']; ?></td>
                                  <td><?php echo $value['username']; ?></td>
                                  <td><?php echo $value['email']; ?></td>
                                  <td><?php echo date('Y-m-d', strtotime($value['created'])); ?></td>
                                  
                                  <td><?php echo $value['usertype']; ?></td>
                           	
                                </tr>
                            <?php endforeach; ?>
						</tbody>
					</table>
				</div>
      		</div>
</div>	

    
