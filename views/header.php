<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="<?php echo base_url();?>../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>../assets/css/bootstrap.min2.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="file:///Users/Chung/Desktop/Metro%20SCG/Admin%20Module/hub-m_files/css">

<link  href="<?php echo base_url();?>../assets/css/top.css" rel="stylesheet" />
<!-- <script src="../../assets/js/top.js"></script> -->
    </head>
<body>
    
<div id="header" class="site-header">
    <nav class="navbar navbar-expand-lg my-2 my-md-0 mr-md-3">
      <a class="navbar-brand" href=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-right">
          <!-- <?php if($role_id == 1){?><li class="nav-item active"><a class="nav-link"  <?php if($admin_settings == 1){ ?>href="<?php echo site_url('Admin/admin_tools'); ?>" <?php } ?>>Master Entry <span class="sr-only">(current)</span></a></li><?php }?> -->
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Admin/admin_compliance');?>">Compliance</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Admin/invoicing'); ?>">Invoicing</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Admin/admin_reports'); ?>">Reports</a></li>
          <li class="nav-item"><a class="nav-link logout" href="<?php echo site_url('Welcome/logout'); ?>">Logout</a></li>         
        </ul>
      </div>
    </nav>
</div>


<!-- <?php if($role_id == 1){echo site_url('Admin/admin_module');}else{echo site_url('Admin/admin_module2');} ?>"><img src="../../assets/img/MetroToHome-logo.png -->