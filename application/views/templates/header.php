
<!DOCTYPE html>
<html ng-app="mainApp">
	<head lang="en">
	  <meta charset="utf-8">
	  <title>ABC Hardware Store</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.min.css" media="all">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modal.css"> -->
    <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/table.css" media="all"> -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.min.css"> -->
	<link rel="stylesheet"  href="<?php echo base_url(); ?>assets/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css" media="all">
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->

	<link href="<?php echo base_url(); ?>assets/admin_style/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
	<script src="<?php echo base_url(); ?>assets/xlsx.core.min.js"></script>   
  <script src="<?php echo base_url(); ?>assets/xls.core.min.js"></script> 
  <script   src="<?php echo base_url(); ?>assets/jquery-1.12.4.min.js"> </script>
  <!-- <script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui/0.4.0/angular-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/services.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/controllers.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/directive.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/filter.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'> -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert2.min.css" media="all">


	</head>
	<body>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" style="font-style: bold;" href="<?php echo base_url(); ?>Admin/add_order">ABC Hardware Store</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <?php if($role == 'staff') {?>
              <li><a href="<?php echo base_url(); ?>Staff">Home</a></li>
              <?php }else{ ?>
              <!-- <li><a href="<?php echo base_url(); ?>Admin/add_bregistry">Add Registry</a></li> -->
              <li><a href="<?php echo base_url(); ?>Admin/invoices">Invoices</a></li>
              <li><a href="<?php echo base_url(); ?>Admin/products">Products</a></li>
               <li><a href="<?php echo base_url(); ?>Report">Reports</a></li>
              <?php } ?>
              <!-- <li><a href="#/claims">Leave</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url();?>main/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
            </ul>
          </div>
        </div>
      </nav>

<div ng-controller="newCtrl">
    <div id="edit_registry_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
<!--           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div> -->
          <div class="modal-body">
          <div style="height: 500px; overflow: auto;">
          <label>Search Order No. : </label>
            <input type="text" class="form-control" ng-model="o.orderno">
            <hr>
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th></th>
                  <th>Order No.</th>
                  <th>Date Ordered</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="item in search_on">
                  <td><a href="<?php echo base_url();?>Admin/edit_order/{{item.orderno}}" class="btn btn-info" ><i class='fa fa-edit' style='font-size: 12px;'></i></a></td>
                  <td>{{item.orderno}}</td>
                  <td>{{item.date}}</td>
                  <!-- <td>data.OBR_NUM</td> -->
                </tr>
              </tbody>
             </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info" ng-click="get_specific_order(o.orderno)">Search</button>
          </div>
        </div>

      </div>
    </div>

   <div id="list_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-body">
          <h2 ng-if="edit_reg == 'no'">NOT FOUND</h2>
          <div ng-if="edit_reg != 'no'">
            <label>Search: </label>
            <input type="text" class="form-control" ng-model="s1">
            <br>
            <div style="height: 500px; overflow: auto;">
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th></th>
                  <th>OBR/s  No.</th>
                  <th>Creditor</th>
                  <th>Obligation</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="item in edit_reg | filter: s1">
                  <td><a href="<?php echo base_url();?>Admin/search_list/{{item.tid}}" ng-click="yes()" class="btn btn-info" ><i class='fa fa-edit' style='font-size: 12px;'></i></a></td>
                  <td>{{item.OBR_NUM}}</td>
                  <td>{{item.CREDITOR}}</td>
                  <td>{{item.OBLIGATION}}</td>
                  <!-- <td>data.OBR_NUM</td> -->
                </tr>
              </tbody>
             </table>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info"  ng-click="get_specific_obr(obr_id)">Search</button>
          </div>
        </div>
          </div>
       </div>
      </div>
    </div>

    <div id="search_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-body">
                <div style="height: 500px; overflow: auto;">
                </div>
              </div>
            </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info"  ng-click="get_specific_obr(obr_id)">Search</button>
          </div>
       </div>
      </div>

    </div>