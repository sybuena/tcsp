<div class="box">
	<div class="box-header"><span class="title">Archive Member</span></div>
    	<div class="box-content">
			<div id="dataTables">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                    <thead>
                        <tr>
                          <th><div>Name</div></th>
                          <th><div>Email</div></th>
                          <th><div>Location</div></th>
                          <th><div>Company</div></th>
                        </tr>
                        </thead>
                    	<tbody>
							<?php foreach((array)$declined as $key => $value): ?>
                                <tr>
                                  <td><?php echo $value['surname'].', '.$value['firstname']; ?></td>
                                  <td><?php echo $value['email']; ?></td>
                                  <td><?php echo $value['city']?></td>
                                  <td><?php echo $value['company-name']?></td>
                                  
                                </tr>
                            <?php endforeach; ?>
						</tbody>
					</table>
				</div>
      		</div>
</div>	
    
    
