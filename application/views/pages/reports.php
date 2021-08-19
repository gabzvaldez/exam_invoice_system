 <div ng-controller="ReportController">

  <div class="container">
    <h1>Report</h1>
    <hr>
      <!-- start form for validation -->
    <div class="col-md-6">
       <div class="form-group col-md-12">
        <label for="fullname">Report :</label>
            <select ng-model="rep.report" class="form-control">
                <option value="">-- Please Select --</option>
                <option value="daily">Daily Report</option>
                <option value="monthly">Monthly Report</option>
                <option value="yearly">Yearly Report</option>
                <!-- <option value="quarterly">Quarterly Report</option> -->
              </select>
      </div>

    <div ng-if="rep.report == 'daily'">
      <div class="form-group col-md-12">
        <label for="fullname">Type of Report :</label>
            <select ng-model="rep.type" class="form-control">
                <option value="">-- Please Select --</option>
                <option value="sales">Sales Report</option>
                <option value="stocks">Sold Stocks Report</option>
              </select>
      </div>
  </div>  

    <div ng-if="rep.report == 'monthly' || rep.report == 'yearly'">
      <div class="form-group col-md-12">
        <label for="fullname">Type of Report :</label>
            <select ng-model="rep.type" class="form-control">
                <option value="">-- Please Select --</option>
                <option value="sales">Sales Report</option>
              </select>
      </div>
  </div> 

    <div ng-if="rep.report == 'monthly' && rep.type == 'sales'">
      <div class="form-group col-md-12">
      <label for="fullname">Select year :</label>
          <select ng-model="rep.year" class="form-control">
              <option value="">-- Please Select --</option>
             <option ng-repeat="year in year">{{year}}</option>
            </select>
      </div>
    </div>

    <div ng-if="rep.report=='daily'">
       <div class="form-group col-md-6">
        <label for="fullname">Date from :</label>
          <input  type="date" class="form-control" ng-model="rep.datefrom">
        <!-- <br> -->
        <!-- <br> -->
        </div>

	  	 <div class="form-group col-md-6">
        <label for="fullname">Date to :</label>
          <input type="date" class="form-control" ng-model="rep.dateto">
        <!-- <br> -->
        <!-- <br> -->
        </div>
    </div>



    <div ng-if="rep.report">
      <button class="btn btn-default pull-right" style="margin-right: 30px;" ng-click='get_report()' data-toggle='modal' data-target='#editModal'>Submit</button>
  </div>
  </div>

        <div class="col-sm-12">

        <br>
        <br>
        <br>
        </div>

<br>
     <div id="editModal" class="modal fade" role="dialog" >
      <div ng-if="rep.report == 'daily' && rep.type == 'sales'" class="modal-dialog modal-lg" style="width: 50%">
        <!-- Modal content-->
        <div class="modal-content" style="overflow-y: initial !important">
        <div class="modal-body" style="height: 650px;
        overflow-y: auto;">
          <div id="printSectionId2"> 
              <br>
            <h3 style="margin: 0; text-align: center;vertical-align: middle;">ABC Hardware Store</h3>
            <hr>
            <br>
                <table class="table table-bordered">
                      <thead class="thead-dark" style="background-color: #173F5F;
                  color: white;">
                        <tr>
                          <th colspan=2 style="text-align: center;">Daily Sales Report from {{rep.datefrom | date}} to {{rep.dateto | date}}</th>
                        </tr>
                        <tr>
                          <th>Invoice Date</th>
                          <th>Total Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="item in sales_daily">
                          <td>{{item.date | date}}</td>
                          <td>{{item.tot | number}}</td>
                        </tr>
                        <tr>
                          <td style="text-align: right;"><b>Total Sale:</b></td>
                          <td><b>{{tot_daily_sales | number}}</b></td>
                        </tr>
                      </tbody>
                 </table>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-default" ng-click="printToCart('printSectionId2')" class="button">Print</button>
          </div>
        </div>
      </div>
      <!-- =============================================== -->
      <div ng-if="rep.report == 'daily' && rep.type == 'stocks'" class="modal-dialog modal-lg" style="width: 50%">
        <!-- Modal content-->
        <div class="modal-content" style="overflow-y: initial !important">
        <div class="modal-body" style="height: 60%;
        overflow-y: auto;">
          <div id="printSectionId2"> 
              <br>
            <h3 style="margin: 0; text-align: center;vertical-align: middle;">ABC Hardware Store</h3>
            <hr>
            <br>
              <table class="table table-bordered">
                    <thead class="thead-dark" style="background-color: #173F5F;
                color: white;">
                      <tr>
                        <th colspan=6 style="text-align: center;">Daily Sold Stocks Report from {{rep.datefrom | date}} to {{rep.dateto | date}}</th>
                      </tr>
                      <tr>
                        <th>Product Description</th>
                        <th>Date</th>
                        <th>Invoice No.</th>
                        <th>Quantity Issued</th>
                        <!-- <th>Total</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="item in daily_med">
                        <td>{{item.item_description}}</td>
                        <td>{{item.date | date}}</td>
                        <td>{{item.orderno}}</td>
                        <td>{{item.qty_issued }}</td>
                        <!-- <td style="font-weight: bold;">{{item.tot_qty}}</td> -->
                      </tr>
                    </tbody>
               </table>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-default" ng-click="printToCart('printSectionId2')" class="button">Print</button>
          </div>
        </div>
      </div>
  <!-- =============================================== -->
      <div ng-if="rep.report == 'daily' && rep.type == 'meds' && rep.med_type == 'stock_in'" class="modal-dialog modal-lg" style="width: 50%">
        <!-- Modal content-->
        <div class="modal-content" style="overflow-y: initial !important">
        <div class="modal-body" style="height: 60%;
        overflow-y: auto;">
          <div id="printSectionId2"> 
              <br>
            <h3 style="margin: 0; text-align: center;vertical-align: middle;">ABC Hardware Store</h3>
            <hr>
            <br>
              <table class="table table-bordered">
                    <thead class="thead-dark" style="background-color: #173F5F;
                color: white;">
                      <tr>
                        <th colspan=6 style="text-align: center;">Daily Medicines (Stock In) Report from {{rep.datefrom | date}} to {{rep.dateto | date}}</th>
                      </tr>
                      <tr>
                        <th>Date Stock in</th>
                        <th>Stock in no.</th>
                        <th>Medicine</th>
                        <th>Lot No.</th>
                        <th>Expiry Date</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="item in daily_med">
                        <td>{{item.stock_in | date}}</td>
                        <td>{{item.sid}}</td>
                        <td>{{item.item_description}}</td>
                        <td>{{item.lot_no}}</td>
                        <td>{{item.expiry_date | date}}</td>
                        <td>{{item.quantity}}</td>
                        <!-- <td>{{item.s_in | date}}</td> -->
                        <!-- <td style="font-weight: bold;">{{item.tot_qty}}</td> -->
                      </tr>
                    </tbody>
               </table>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-default" ng-click="printToCart('printSectionId2')" class="button">Print</button>
          </div>
        </div>
      </div>
  <!-- ==========================================================-->
      <div ng-if="rep.report == 'monthly' && rep.type == 'sales'" class="modal-dialog modal-lg" style="width: 60%">
        <!-- Modal content-->
        <div class="modal-content" style="overflow-y: initial !important">
        <div class="modal-body" style="height: 60%;
        overflow-y: auto;">
          <div id="printSectionId2"> 
              <br>
            <h3 style="margin: 0; text-align: center;vertical-align: middle;">ABC Hardware Store</h3>
            <hr>
            <br>
         <table class="table table-bordered" ng-if="rep.report == 'monthly'">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
        <div >
          <tr>
            <th colspan=14 style="text-align: center;">Monthly Sales Report for the month of {{rep.year}}</th>
          </tr>
          <tr>
            <th>Month</th>
            <th>Amount</th>
          </tr>
        </div>
        </thead>
        <tbody>
        <div >
          <tr ng-repeat="med_monthly in med_monthly">
            <td>
            {{med_monthly.m | mname}}
          </td>
          <td>
            {{med_monthly.tot | number}}
          </td>
            <!-- <td>{{item.FEB}}</td> -->
            <!-- <td style="font-weight: bold;">{{item.GRAND_TOTAL | number : 2}}</td> -->
          </tr>
        </div>
        </tbody>
      </table>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-default" ng-click="printToCart('printSectionId2')" class="button">Print</button>
          </div>
        </div>
      </div>
<!-- ======================================================================== -->
      <div ng-if="rep.report == 'yearly' && rep.type == 'sales'" class="modal-dialog modal-lg" style="width: 60%">
        <!-- Modal content-->
        <div class="modal-content" style="overflow-y: initial !important">
        <div class="modal-body" style="height: 60%;
        overflow-y: auto;">
          <div id="printSectionId2"> 
              <br>
            <h3 style="margin: 0; text-align: center;vertical-align: middle;">ABC Hardware Store</h3>
            <hr>
            <br>
         <table class="table table-bordered" ng-if="rep.report == 'yearly'">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
        <div >
          <tr>
            <th colspan=14 style="text-align: center;">Yearly Sales Report</th>
          </tr>
          <tr>
            <th>Year</th>
            <th>Amount</th>
          </tr>
        </div>
        </thead>
        <tbody>
        <div >
          <tr ng-repeat="yearly_monthly in yearly_monthly">
            <td>
            {{yearly_monthly.y}}
          </td>
          <td>
            {{yearly_monthly.tot | number}}
          </td>
            <!-- <td>{{item.FEB}}</td> -->
            <!-- <td style="font-weight: bold;">{{item.GRAND_TOTAL | number : 2}}</td> -->
          </tr>
        </div>
        </tbody>
      </table>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-default" ng-click="printToCart('printSectionId2')" class="button">Print</button>
          </div>
        </div>
      </div>
<!-- ====================================================================== -->
    </div>
 </div> 
</div>
