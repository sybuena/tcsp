<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-table"></i>
            Members List
          </h3>
          <h5>
            A subtitle can be added here
          </h5>
        </div>

      </div>
     
    </div>
  </div>
  <div class="container-fluid padded">
    <div class="row-fluid">
		
      <!-- Breadcrumb line -->

      <div id="breadcrumbs">
        <div class="breadcrumb-button blue">
          <span class="breadcrumb-label"><i class="icon-home"></i> Home</span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>

        
            <div class="breadcrumb-button">
              <span class="breadcrumb-label">
                <i class="icon-group"></i> User
              </span>
              <span class="breadcrumb-arrow"><span></span></span>
            </div>
        

        <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-table"></i> Members
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">
  <div class="span6">
    <!-- find me in partials/tasks_table -->

<div class="box">
  <div class="box-header">
    <span class="title">New Members</span>
    <ul class="box-toolbar">
      <li><span class="label label-green"><?php echo count($newRegister); ?></span></li>
    </ul>
  </div>
  <div class="box-content">
    <table class="table table-normal">
      <thead>
      <tr>
        <td></td>
        <td>Name</td>
        <td>Location</td>
        <td style="width: 40px"></td>
      </tr>
      </thead>

      <tbody>
      <?php $noNew = 1;?>
      <?php foreach($unpaid as $v) :?>
      <?php $noNew = 0;?>
      <tr class="status-pending">
        <td class="icon"><i class="icon-exchange"></i></td>
        <td><?php echo $v['firstname'].' '.$v['surname']; ?></td>
        <td><?php echo $v['city']; ?></td>
        <td>
          <div class="btn-group">
            <button class="btn btn-mini btn-default dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
            <ul class="dropdown-menu">
              <li><a href="<?php echo '/admin/accept/'.$v['id'];?>">Accept</a></li>
              <li><a href="<?php echo '/admin/declined/'.$v['id'];?>">Decline</a></li>
            </ul>
          </div>
        </td>
      </tr>
		<?php endforeach; ?>
        <?php if($noNew):?>
        <tr class="status-pending">
        	<td>No New Registration</td>
        </tr>
        <?php endif;?>
      </tbody>
    </table>
  </div>
</div>


  </div>

  <div class="span6">
    <!-- find me in partials/stats_table -->

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
      <?php $noDeclined = 1;?>
      <?php foreach($declined as $v) :?>
      <?php $noDeclined = 0;?>
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
        <?php if($noDeclined):?>
        <tr class="status-pending">
        	<td>No Declined Registration</td>
        </tr>
        <?php endif;?>
      </tbody>
    </table>


  </div>
</div>


  </div>
</div>

<div class="row-fluid">
  <div class="span12">
    <div class="box">
      <div class="box-header"><span class="title">Member List</span></div>
      <div class="box-content">
        <!-- find me in partials/data_tables_custom -->

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
<?php $view = base_url().'admin/users/detail/'; ?>
<?php $edit = base_url().'admin/users/edit/'; ?>
<?php $remove = base_url().'admin/users/remove/'; ?>
<?php foreach((array)$row as $key => $value): ?>
	<tr>
      <td><?php echo $value['surname'].', '.$value['firstname']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['city']?></td>
      <td class="center">
      	<a href="#"  class="btn btn-mini btn-primary" onClick="javascript:chatWith('<?php echo $value['username']; ?>');">Send Message</a>
      	<!--<a href="<?php echo $view.$value['id']; ?>" class="btn btn-mini btn-default">
        	<i class="icon-zoom-in"></i> View</a>-->
      	<a href="<?php echo $edit.$value['id']; ?>" class="btn btn-mini btn-black">
        	<i class="icon-edit"></i> Edit</a>
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
  </div>
</div>