<div class="container" ng-controller="medCtrl">    
<div class="form-group col-md-12">
  <!-- <h2 class="pull-left">Order No.{{inv.orderno}}</h2> -->
  <!-- <input type="text" ng-model="inv.orderno" value="{{inv.orderno}}"> -->
</div>
<h2>Add Product</h2>
            <!-- <p><?php echo $role; ?></p> -->
  <br>
        <div class="col-md-6">
            <label>Stock in No. : </label>
            <input type="text" class="form-control" ng-model="med.sid">
        </div>
        <div class="col-md-6">
            <!-- <br> -->

        <label>Date : </label>
        <input type="date" class="form-control" ng-model="med.stock_in">
        <br>
        </div>
        <!-- <br> -->
           <div class="col-md-6">
        <label>Item Description : </label>
            <input type="text" class="form-control" ng-model="med.item_description">
        </div>
        <hr>
        <div class="col-md-3">
        <label>Unit cost : </label>
            <input type="text" class="form-control" ng-model="med.unit_cost">
        </div>


<!--         <div class="col-md-6">
        <label>Lot No. : </label>
            <input
             type="text" class="form-control" ng-model="med.lot_no">
             <br>
        </div> -->

       <!--  <div class="col-md-6">
            <label>Expiry Date : </label>
            <input type="date" class="form-control" ng-model="med.expiry_date">
        </div> -->

        <!-- <div class="col-md-6">
        <label>Price: </label>
        <input type="number" class="form-control" ng-model="med.unit_cost">
        </div> -->

        <div class="col-md-3">
            <label>Quantity: </label>
            <input type="number" class="form-control" ng-model="med.quantity">
            <br>
        <br> 
   </div>


     <button style="float:right;" ng-click="s_in()" type="submit" class="btn btn-success">+</button>
     <!-- <div id="printSectionId2"> -->
     <br>
     <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
          <tr>
          <th></th>
            <th style="width: 40%;">Description</th>
            <th>Unit Cost</th>
            <th>Quantity</th>
            <!-- <th>Expiry </th> -->
            <!-- <th>Quantity Issued</th> -->
            <!-- <th>Unit Price</th> -->
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="item in items">
          <td style="text-align: center"><button class="btn btn-danger" title="Remove Item" ng-click="rem(items)"><i class="fa fa-times"></i></button></td>
            <td colspan="">{{item.item_description}}</td>                    
            <td>{{item.unit_cost}}</td>
            <td>{{item.quantity}}</td>
            <!-- <td>{{item.expiry_date}}</td> -->
            <!-- <td>{{item.unit_cost}}</td> -->
          </tr>
          <!-- <tr>
           <td></td>
           <td></td>
           <td style=" font-weight: bold;">TOTAL: </td>
           <td style=" font-weight: bold;"> {{disp_total_c | number : 2}}
           </td>
          </tr> -->
        </tbody>
      </table> 
      <!-- </div> -->

      <hr>
      <div ng-if="items != 0">
         <b> Total Records: {{items.length}} </b>
      </div>
      <div class="pull-right">
              <a type="button" ng-click="add_med()" class="btn btn-default" name="">SUBMIT</a>
    </div>  <!-- <a type="button" ng-click="printToCart('printSectionId2')" class="btn btn-default" name="">print</a> -->
  </div>