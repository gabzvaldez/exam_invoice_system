<div ng-controller="orderCtrl">
<!-- <div> -->
    <!-- Page Content -->
    <div class="container">
          <label for="id1">Search :</label>
          <input type="text" ng-model="search_order" id="id1"/>
        <br>
        <br>
        <br>
     <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
          <tr>
            <th></th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Date Ordered</th>
            <th>Order No.</th>
            <!-- <th>Actions</th> -->
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="item in orderss | filter:search_order">
           <td align="center"><button class="btn btn-default" ng-click="print_fun(item.orderno)"><i class="fa fa-print"></button></i>
           <button class="btn btn-default" ng-click="get_specific_orders(item.orderno)"data-toggle='modal' data-target='#ordrModal'><i class="fa fa-search"></button></i></td>
            <td align="center">{{item.customer}}</td>
            <td align="center">{{item.address}}</td>
            <td align="center">{{item.date}}</td>
            <td align="center">{{item.orderno}}</td>
           <!-- <td><img style=" width: 80px; height: 80px;" ng-src="{{item.img}}"/></td> -->
<!--             <td align="center" class="hidden-print">
            <button class='btn btn-info' ng-click='specific_transaction(item.tid)' data-toggle='modal' data-target='#appModal'><i class='fa fa-thumbs-up' style='font-size: 12px;'></i></button>
                       <button class='btn btn-danger' ng-click='specific_transaction(item.tid)' data-toggle='modal' data-target='#disModal'><i class='fa fa-thumbs-down' style='font-size: 12px;'></i></button>
            </td> -->
          </tr>
        </tbody>
      </table> 

      <!-- </div> -->
    <!-- </table> -->

      </div>
      <!-- <button ng-click="printToCart('printSectionId')" class="button">Print</button> -->

    <!-- </div> -->


<!-- Modal -->
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
        <form name="form1">
        <label class="control-label">Activity Title</label>
         <textarea type="text" class="form-control" readonly="">{{specific_trans.ACT_TITLE}}</textarea>
         <br>
         <label class="control-label">Account Title</label>
         <input type="text" class="form-control" value="{{specific_trans.ACCOUNT_TITLE}}" name="position" readonly="" />
         <br>

         <div class="row">
         <div class="col-sm-6">
         <label class="control-label">Creditor</label>
         <input type="text" class="form-control" value="{{specific_trans.CREDITOR}}" name="position" readonly="" />
         </div>

         <div class="col-sm-6">

                  <label class="control-label">OBR No.</label>
         <input type="text" class="form-control" value="{{specific_trans.OBR_NUM}}" name="position" readonly="" />
         <br>
         <!-- <br> -->
         </div>
         </div>
         <label class="control-label">ADA NO.</label>
         <input type="text" class="form-control" value="{{specific_trans.ADA}}" name="position" readonly="" />
         <br>
          <div class="row">
          <div class="col-sm-4">
          <label class="control-label">Obligation</label>
            <input type="text" class="form-control" name="earned" value="{{search_obligation | number : 2}}" readonly="" />
          </div>
          <div class="col-sm-4">
            <label class="control-label">Disbursement</label>
            <input type="text" class="form-control" name="abs" value="{{search_disbursement | number : 2}}" name="position" readonly="" />
          </div>
          <div class="col-sm-4">
            <label class="control-label">Unpaid Obligations</label>
            <input type="text" class="form-control" name="position" value="{{search_unpaid_obs | number : 2}}" readonly="" /></div>
            <br>
        </div>
        <div class="row">
                      <div class="col-sm-4">
          <label class="control-label">Month Obligated</label>
            <input type="text" class="form-control" name="earned" value="{{specific_trans.MONTH_OBLIGATED}}" readonly="" />

          </div>

          <div class="col-sm-4">
            <label class="control-label">Month Disbursed</label>
            <input type="text" class="form-control" name="abs" value="{{specific_trans.MONTH_DISBURSED}}" name="position" readonly="" />
          </div>
          </div>
         <br>
         <label class="control-label">Remarks</label>
            <textarea type="text" class="form-control" name="position" readonly="" >{{specific_trans.REMARKS}}</textarea>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--          <button ng-if="!leave.abs || !leave.earned" type="button" class="btn btn-primary" ng-click="add_leave()">Save</button> -->
         <!-- <button ng-if="!leave.abs" type="button" class="btn btn-danger" ng-click="add_leave()">Save</button> -->
      </div>
    </div>

  </div>
</div>


<div id="ordrModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Medicines Ordered</h4>
      </div>
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
     <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
          <tr>
          <th></th>
            <th>Description</th>
            <th>Lot No.</th>
            <th>Quantity</th>
            <th>unit Price</th>
            <th>Discount</th>
            <th>Amount</th>
            <!-- <th>Actions</th> -->
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="spec in spec_order">
          <td align="center"><button class="btn btn-default" 
          ng-click="ret_stock(spec.tid,spec.id,spec.item_description,spec.qty_issued,spec)">
          <i class="fa fa-times"></button></i></td>
              <td align="center">{{spec.item_description}}</td>
              <td align="center">{{spec.lot_no}}</td>
              <td align="center">{{spec.qty_issued}}</td>
              <td align="center">{{spec.unit_cost}}</td>
              <td align="center">{{spec.discount}}</td>
              <td align="center">{{spec.total_amount}}</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><b>{{o_tot}}</b></td>
          </tr>
        </tbody>
      </table> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="appModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are you sure you want to <b>APPROVE</b>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Approve</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="disModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are you sure you want to <b>DISAPPROVE</b>?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Disapprove</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>