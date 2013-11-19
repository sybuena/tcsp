<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-table"></i>
            Message List
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
                <i class="icon-group"></i> Message
              </span>
              <span class="breadcrumb-arrow"><span></span></span>
            </div>
        

        <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-table"></i> Inquire Message
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">
  <div class="span12">
    <!-- find me in partials/tasks_table -->



<div class="row-fluid">
  <div class="span12">
    <div class="box">
      <div class="box-header"><span class="title">Inquire Message</span></div>
      <div class="box-content">
        <!-- find me in partials/data_tables_custom -->

<div id="dataTables">

<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
<thead>
<tr>
  <th><div>Email</div></th>
  <th><div>Subject</div></th>
  <th><div>Content</div></th>
  <th><div></div></th>
</tr>
</thead>
<tbody>
<?php foreach((array)$row as $key => $value): ?>
	<tr>
      <td><?php echo $value['message_email']; ?></td>
      <td><?php echo $value['message_subject']; ?></td>
      <td><?php echo $value['message_content']?></td>
      <td class="center">
      	<a href="<?php echo base_url().'admin/MarkAsRead/'.$value['ID']; ?>" class="btn btn-mini btn-red">
        	<i class="icon-check"></i> Mark as Read</a>
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