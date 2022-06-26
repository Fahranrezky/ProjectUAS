<!DOCTYPE html>
<html>
<head>
	<title>Admin-Product List</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
 
	<link href="<?php echo base_url(); ?>admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url(); ?>admin/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url(); ?>admin/css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
	<script src="<?php echo base_url(); ?>admin/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin/js/bootstrap.js" type="text/javascript"></script>

	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
	<div class="navbar navbar-inverse">
  		<div class="navbar-inner">
    		<ul class="nav"> 
  				<li><a href="<?php echo site_url('CTR_Index/DashboardAdmin')?>">Admin</a></li>  

    			<li class="active"><a href="#">Products</a></li>  

    			<li><a href="<?php echo site_url('CTR_Gallery/DashboardGallery')?>">Gallery</a></li>  

  				<li><a href="<?php echo site_url('CTR_Index/DashboardInfo')?>">Update Information</a></li>  

  				<li><a href="<?php echo site_url('CTR_Contact/DashboardContact')?>">Messages</a></li>  


        </ul>
      </div>
  </div>
</head>
<body>
<div class="container">
  <br>
  <div class="row-fluid">
    <div class="span12">
      <div class="row-fluid">
        <div class="span12">
          <div class="span9">
            <div class="alert alert-success">
            <h4>Gallery List</h4>
            </div>
          <legend></legend>
          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
          <caption></caption>
            <thead>
              <tr>
                <th>Actor Name</th>
                <th>Date Of Birth Description </th>
                <th>Age</th>
                <th>Photo</th>
                <th width="180">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($daftar_prod as $row) { ?>
              <tr>
                <td><?php echo $row->Name; ?></td>
                <td><?php echo $row->Description; ?></td>
                <td><?php echo $row->Price; ?></td>
                <td><img width="100px" src="<?php echo base_url('gambar/'.$row->Photo)?>"></td>
                <td>
                  <!-- <?php  echo base_url('')?> -->

                  <?php echo anchor('CTR_Product/HapusProduct/'.$row->Product_ID,"<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><span class='icon-trash'></span></button>",array('onclick'=>"return confirm('Hapus data $row->Photo ?');")); ?>
                </td>
                </td>
              </tr>
              <?php } ?> 
            </tbody> 
          </table>    
          </div>
          <div class="span3">  
            <div class="alert alert-success">
            Welcome
            <?php echo $_SESSION['Username']; ?>
            </div>
          <div class="well">
            <a button class="btn btn-block btn-danger" type="button" href="<?php echo site_url('CTR_Index/Logout')?>" role="button">
              <i class="icon-signout icon-large"></i> Sign Out</button></a>
    </div>
          <div class="well">
            <a button class="btn btn-block btn-success" type="button" href="<?php echo site_url('CTR_Product/AddProduct')?>" role="button"><i class="icon-edit icon-large"></i> Add </button></a>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
</body>
</html>