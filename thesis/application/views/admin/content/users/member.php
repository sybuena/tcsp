<?php $view = base_url().'admin/users/detail/'; ?>
<?php $edit = base_url().'admin/users/edit/'; ?>
<?php $remove = base_url().'admin/remove/'; ?>
<div class="box">
	<div class="box-header"><span class="title">Member List</span></div>
    	<div class="box-content">
			<div id="dataTables">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                    <thead>
                        <tr>
                          <th><div>Name</div></th>
                          <th><div>Email</div></th>
                          <th><div>Location</div></th>
                          <th><div></div></th>
                        </tr>
                        </thead>
                    	<tbody>
							<?php foreach((array)$memberList as $key => $value): ?>
                                <tr>
                                  <td><?php echo $value['surname'].', '.$value['firstname']; ?></td>
                                  <td><?php echo $value['email']; ?></td>
                                  <td><?php echo $value['city']?></td>
                                  <td class="center">
                                    <a href="#"  class="btn btn-mini btn-primary" onClick="javascript:chatWith('<?php echo $value['username']; ?>');">Send Message</a>
                                    <!--<a href="<?php echo $view.$value['id']; ?>" class="btn btn-mini btn-default">
                                        <i class="icon-zoom-in"></i> View</a>-->
                                    <!--<a href="<?php echo $edit.$value['id']; ?>" class="btn btn-mini btn-black">
                                        <i class="icon-edit"></i> Edit</a>-->
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
  	</div>
</div>	