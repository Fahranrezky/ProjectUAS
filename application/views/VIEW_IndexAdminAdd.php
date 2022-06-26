 <!DOCTYPE html>
<html>
<head>
    <title>Add Data-Admin</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
    <link href="<?php echo base_url(); ?>admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url(); ?>admin/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url(); ?>admin/css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
    <script src="<?php echo base_url(); ?>admin/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
<div class="modal-header">
  <div class="alert alert-gray">
    Add Admin
  </div>
  <div class="modal-body">
  <hr>
  <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Index/SimpanData'); ?>">
    <div class="control-group">
      <label class="control-label">Username</label>
        <div class="controls">
          <input type="text" name="Username" placeholder="Username" >
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Password</label>
        <div class="controls">
          <input type="password" name="Password" placeholder="Password" required>
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Full Name</label>
        <div class="controls">
          <input type="text" name="Full_Name" placeholder="Full Name" required>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>
      <a href="<?php echo site_url('CTR_Index/DashboardAdmin') ?>">&nbsp;Close</button></a>
    </form>  
  </div>
</div>
<hr>
</body>
</html>
