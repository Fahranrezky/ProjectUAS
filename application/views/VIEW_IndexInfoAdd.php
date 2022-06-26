 <!DOCTYPE html>
<html>
<head>
    <title>Add Data-Info</title>
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
    Add Info
  </div>
  <div class="modal-body">
  <hr>
  <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Index/SimpanInfo'); ?>" enctype="multipart/form-data">
    <div class="control-group">
      <label class="control-label">Information_ID</label>
        <div class="controls">
          <input type="text" name="Information_ID" placeholder="Information_ID" required="">
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Title</label>
        <div class="controls">
          <input type="text" name="Title" placeholder="Title" required="">
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Content</label>
        <div class="controls">
          <input type="text" name="Content" placeholder="Content" required="">
        </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Photo</label>
        <div class="controls">
          <input type="file" name="userfile" required="">
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>
      <a href="<?php echo site_url('CTR_Index/DashboardInfo') ?>">&nbsp;Close</button></a>
    </form>  
  </div>
</div>
<hr>
</body>
</html>
