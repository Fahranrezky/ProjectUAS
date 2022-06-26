 <!DOCTYPE html>
<html>
<head>
    <title>Add Data-Contact</title>
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
    Add Contact
  </div>
  <div class="modal-body">
  <hr>
  <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Contact/SimpanData'); ?>">
    <div class="control-group">
      <label class="control-label">Name</label>
        <div class="controls">
          <input type="text" name="name" placeholder="Name" >
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Email</label>
        <div class="controls">
          <input type="text" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Meesage</label>
        <div class="controls">
          <textarea type="text" name="message" placeholder="Meesage" required></textarea>
        </div>
    </div>
    <div class="control-group">
      <label class="control-label">Subject</label>
        <div class="controls">
          <input type="text" name="subject" placeholder="Subject" required>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>
      <a href="<?php echo site_url('CTR_Contact/DashboardContact') ?>">&nbsp;Close</button></a>
    </form>  
  </div>
</div>
<hr>
</body>
</html>
