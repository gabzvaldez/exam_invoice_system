<div class="container" ng-controller="medCtrl">    
    <!-- <label class="pull-right">Search :</label> -->
<!--     <div>
    <h3 style="float: ">search :</h3>
    <input style="width: 200px;" type="text" ng-model="hanap" class="form-control">
    </div> -->
    <div style="white-space:nowrap">
    <label for="id1">Search :</label>
    <input type="text" ng-model="hanap" id="id1"/>
</div>
<br>
    <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>Admin/medicines_stock_in"><i class='fa fa-plus'></i> Add Stocks</a>
      <!-- <button class="btn btn-info pull-right" data-toggle='modal' data-target='#addModal'>ADD</button> -->
      <br>
      <br>
     <div id="printSectionId2" style="height: 600px; overflow: auto;">
     <table class="table table-bordered" id="myTable">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
          <tr>
            <!-- <th class="hidden-print"></th> -->
            <th></th>
            <th style="width: 40%;">Description</th>
            <th>Lot No.</th>
            <th>Expiry </th>
            <th>Quantity</th>
            <!-- <th>Quantity Issued</th> -->
            <th>Unit Price</th>
            <th>Date stock in</th>
            <!-- <th>Supplier name</th> -->
          </tr>
        </thead>
        <tbody>
          
          <tr ng-repeat="med in meds | filter:hanap" >
          <td style="width: 10%; text-align: center"><a ng-click="get_spec_meds(med.id)" data-toggle='modal' data-target='#editModal' class="btn btn-info" style="text-align: center; margin-right: 2%;">
          <i class='fa fa-edit'></i>&nbsp</a>
          <a ng-click="get_ss_med(med.id)" class="btn btn-danger" style="text-align: center; margin-right: 2%;">
          <i class='fa fa-trash'></i>&nbsp</a>
          <!-- <a ng-click="get_spec_meds(med.id)" data-toggle='modal' data-target='#add_stockModal' class="btn btn-success" style="text-align: center;"><i class='fa fa-plus'></i>&nbsp</a> -->
          </td>
            <td colspan="">{{med.item_description}}</td>
            <td>{{med.lot_no}}</td>
            <td>{{med.expiry_date}}</td>
            <td>{{med.quantity}}</td>
            <!-- <td>{{med.}}</td> -->
            <td>{{med.unit_cost | number : 2}}</td>
            <td>{{med.stock_in}}</td>
            <!-- <td><input type="text" class="form-control" ng-model="items.unit_price"></td> -->
          </tr>
        </tbody>
      </table> 
      </div>



  <script type="text/javascript">
    $(document).ready( function () {
    $('#myTable2').DataTable({
       "pagingType": "full_numbers"
    });
} );
  </script>


   <div id="addModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-body">
            <div style="height: 300px; overflow: auto;">
              <br>
              <label>Item description : </label>
              <input type="text" class="form-control" ng-model="med.item_description">
              <br>
                <label>Lot No. : </label>
                <input type="text" class="form-control" ng-model="med.lot_no">

              <br>
              <div class="col-md-6">
                <label>Date stock in : </label>
                <input type="date" class="form-control" ng-model="med.stock_in">
                <br>
                 <label>Expiry Date : </label>
                <input type="date" class="form-control" ng-model="med.expiry_date">
                <br>
              </div>
              <div class="col-md-6">
                <label>Quantity: </label>
                <input type="number" class="form-control" ng-model="med.quantity">
                <br>
                 <label>Price: </label>
                <input type="number" class="form-control" ng-model="med.unit_cost">
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-info"  ng-click="add_med()">Add</a>
          </div>
          </div>
       </div>
      </div>
    </div>

    <div id="editModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-body">
            <div style="height: 300px; overflow: auto;">
              <br>
              <label>Item description : </label>
              <input type="text" class="form-control" ng-model="e_meds.item_description">
              <br>
              <label>Lot No. : </label>
                <input type="text" class="form-control" ng-model="e_meds.lot_no">
              <br>
              <div class="col-md-6">
                <label>Date stock in : </label>
                <input type="date" class="form-control" ng-model="e_meds.stock_in">
                <br>
                 <label>Expiry Date : </label>
                <input type="date" class="form-control" ng-model="e_meds.expiry_date">
                <br>
              </div>
              <div class="col-md-6">
                <label>Quantity: </label>
                <input type="text" class="form-control" ng-model="e_meds.quantity">
                <br>
                 <label>Price: </label>
                <input type="text" class="form-control"  ng-model="e_meds.unit_cost">
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-info"  ng-click="edit_meds(e_meds.id)">Update</a>
          </div>
          </div>
       </div>
      </div>
    </div>

    <div id="add_stockModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add stocks</h4>
      </div>
          <div class="modal-body">
            <div style="height: 300px; overflow: auto;">
              <br>
              <label>Item Quantity: </label>
              <input type="number" class="form-control" ng-model="add_st.quantity">
              <br>
              <label>Date stock in : </label>
                <input type="date" class="form-control" ng-model="add_st.add_stock_in">
              <br>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-info"  ng-click="add_stock(e_meds.id)">Add Stock</a>
          </div>
          </div>
       </div>
      </div>
    </div>
      </div>