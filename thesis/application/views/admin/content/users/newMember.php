<div class="box">
    <div class="box-header">
        <span class="title">New Members</span>
        <ul class="box-toolbar">
        </ul>
    </div>
    
    <div class="box-content">
    <table class="table table-normal" id="new-member">
        <thead>
          <tr>
            <td></td>
            <td>Name</td>
            <td>Location</td>
            <td style="width: 40px"></td>
          </tr>
        </thead>
        <tbody>
        <?php if(count($newRegister) > 0):?>
            <?php foreach($newRegister as $v) :?>
            <tr class="status-pending">
            <td class="icon"><i class="icon-exchange"></i></td>
            <td><?php echo $v['firstname'].' '.$v['surname']; ?></td>
            <td><?php echo $v['city']; ?></td>
            <td>
              <div class="btn-group">
                <button class="btn btn-mini btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo '/admin/accept/'.$v['id'];?>">Accept</a></li>
                  <li><a href="<?php echo '/admin/declined/'.$v['id'];?>">Decline</a></li>
                </ul>
              </div>
            </td>
            </tr>
            <?php endforeach; ?>
        <?php else:?>
            <tr class="status-pending"><td>No New Registration</td></tr>
        <?php endif;?>
        </tbody>
        </table>
    </div>
</div>