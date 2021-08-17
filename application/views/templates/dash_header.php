
<!DOCTYPE html>
<html ng-app="mainApp">
	<head lang="en">
	  <meta charset="utf-8">
	  <title>Finance</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap.min.css" media="all">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.min.css"> -->
	<link rel="stylesheet"  href="<?php echo base_url(); ?>assets/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css" media="all"> -->
	   <link href="<?php echo base_url(); ?>assets/admin_style/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/angular.min.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>assets/angular-animate.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>assets/angular-filter.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>assets/ui-bootstrap-tpls.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/xlsx.core.min.js"></script>   
    <script src="<?php echo base_url(); ?>assets/xls.core.min.js"></script> 
    <script   src="<?php echo base_url(); ?>assets/jquery-1.12.4.min.js"> </script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/services.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/controllers.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/directive.js"></script>
	
	</head>
	<body class="b1">
				      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" style="font-style: bold;">eFinance System</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a href="<?php echo base_url(); ?>Admin">Home</a></li> -->
              <!-- <li><a href="<?php echo base_url(); ?>Admin/add_bregistry">Add Registry</a></li> -->
              <!-- <li><a href="#/claims">Leave</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url();?>Main/login"><i class="fa fa-sign-in"></i> Logins</a></li>
            </ul>
          </div>
        </div>
      </nav>