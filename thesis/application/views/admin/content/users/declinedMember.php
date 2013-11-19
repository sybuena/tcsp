<div class="box">
	<div class="box-header">
		<span class="title">Declined Member</span>
		<ul class="box-toolbar">
			<li><span class="label label-green"><?php echo count($declined); ?></span></li>
		</ul>
	</div>
	<div class="box-content">
		<table class="table table-normal">
            <thead>
                <tr>
                <td></td>
                <td>Name</td>
                <td>Location</td>
                <td style=""></td>
                </tr>
            </thead>
			<tbody>
			<?php if(count($declined) > 0) :?>
				<?php foreach($declined as $v) :?>
                    <tr class="status-pending">
                        <td class="icon"><i class="icon-exchange"></i></td>
                        <td><?php echo $v['firstname'].' '.$v['surname']; ?></td>
                        <td><?php echo $v['city']; ?></td>
                        <td>
                        	<a class="btn btn-mini btn-default" href="<?php echo '/admin/accept/'.$v['id'];?>">accept</a>
                        	<a class="btn btn-mini btn-danger" href="<?php echo '/admin/removeNow/'.$v['id'];?>">remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
			<?php else:?>
                <tr class="status-pending">
                <td>No Declined Registration</td>
                </tr>
			<?php endif;?>
			</tbody>
		</table>
	</div>
</div>