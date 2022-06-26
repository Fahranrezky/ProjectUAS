 <!DOCTYPE html>
<html>
<head>
    <title>Add Data-Gallery</title>
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
    Add Actor
  </div>
  <div class="modal-body">
  <hr>
  <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Product/SimpanData'); ?>" enctype="multipart/form-data">
    <div class="control-group">
      <label class="control-label">Actor ID</label>
        <div class="controls">
          <input type="text" name="Product_ID" placeholder="Actor ID" >
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Actor Name</label>
        <div class="controls">
          <input type="text" name="Name" placeholder="Name" >
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Date Of Birth </label>
        <div class="controls">
          <input type="text" name="Description" placeholder="Description" >
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Age</label>
        <div class="controls">
          <input type="text" name="Price" placeholder="Age" >
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Photo</label>
        <div class="controls">
          <input type="file" name="userfile" required>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>
      <a href="<?php echo site_url('CTR_Product/DashboardProduct') ?>">&nbsp;Close</button></a>
    </form>  
  </div>
</div>
<hr>
</body>
</html>
