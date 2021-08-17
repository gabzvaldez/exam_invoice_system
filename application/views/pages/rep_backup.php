   <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap.min.css" media="all"> -->
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
                <option value="quarterly">Quarterly Report</option>
              </select>
        <!-- <br> -->
        <!-- <br> -->
      </div>
<!-- 
        <div class="form-group col-md-6" style=" display: block;">
        <label for="fullname" style="display: none">Report :</label>
         <input type="text" class="form-control" name="">
        </div> -->
        <br>

    <div ng-if="rep.report=='daily'">
      <div class="form-group col-md-12">
        <label for="fullname">Type of Report :</label>
            <select ng-model="rep.type" class="form-control">
                <option value="">-- Please Select --</option>
                <option value="sales">Sales Report</option>
                <option value="meds">Medicines Report</option>
              </select>
        <!-- <br> -->
        <!-- <br> -->
        </div>
       <div class="form-group col-md-6">
        <label for="fullname">Date from :</label>
          <input type="date" class="form-control" ng-model="rep.datefrom">
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
<!--       <div ng-hide="search.line" class="form-group col-md-6">
        <label for="fullname">Fund Source :</label>
          <select class="form-control"> 
                <option value="">-- Please Select --</option>
          </select>
      </div> -->
<!-- 
      <div ng-if="search.line =='PS'" class="form-group col-md-6">
        <label for="fullname">Fund Source :</label>
            <select  ng-model="search.fund_source" class="form-control" id="sel1" >
                <option value="">-- Please Select --</option>
                <option value="PHM">PHM</option>
                <option value="STO">STO</option>
                <option value="RLED">RLED</option>
                <option value="PHM RLIP">PHM RLIP</option>
                <option value="STO RLIP">STO RLIP</option>
                <option value="RLED RLIP">RLED RLIP</option>
              </select>
      </div>

      <div ng-if="search.line =='MOOE'" class="form-group col-md-6">
        <label for="fullname">Fund Source :</label>
            <select  ng-model="search.fund_source" class="form-control" id="sel1" >
                <option value="">-- Please Select --</option>
                <option value="LHSD">PHM</option>
                <option value="STO">STO</option>
                <option value="RLED">RLED</option>
                <option value="SAA">SAA</option>
                <option value="MP">Major Programs</option>
              </select>
       </div>

      <div ng-if="search.line =='MOOE CONAP'" class="form-group col-md-6">
        <label for="fullname">Fund Source :</label>
            <select  ng-model="search.fund_source" class="form-control" id="sel1" >
                <option value="">-- Please Select --</option>
                <option value="CONAP PHM">PHM</option>
                <option value="CONAP STO">STO</option>
                <option value="CONAP RLED">RLED</option>
                <option value="CONAP SAA">SAA</option>
                <option value="CONAP MP">Major Programs</option>
              </select>
       </div>
 -->

        <div class="col-sm-12">
        <!-- <button type="Submit" class="btn btn-default" ng-click='report_per_acc_title()'>Submit</button> -->
  
        <br>
        <br>
        <br>
        </div>

<!--<table class="table">
      <tr>
        <th colspan="2" style="text-align: center;padding: 20px;border: solid 2px black;" >Date</th>
        <th colspan="2" style="text-align: center;padding: 20px;border: solid 2px black;" >Time</th>
        <th colspan="2" style="text-align: center;padding: 20px;border: solid 2px black;" >From</th>
        <th colspan="2" style="text-align: center;padding: 20px;border: solid 2px black;" >To</th>
        <th colspan="2" style="text-align: center;padding: 20px;border: solid 2px black;" >Action Required/Action Taken/Remarks</th>
        <th colspan="2" style="text-align: center;padding: 20px;border: solid 2px black;" >Initials</th>
      </tr>
      <tr  ng-repeat="item in report_per_acc_title.val">
        <td colspan="2" style="text-align: center;padding: 10px;border: solid 2px black;">{{item.account_title}}</td>
        <td colspan="2" style="text-align: center;padding: 10px;border: solid 2px black;">{{item.JAN | number : 2}}</td>
        <td colspan="2" style="text-align: center;padding: 10px;border: solid 2px black;">{{item.FEB | number : 2}}</td>
        <td colspan="2" style="text-align: center;padding: 10px;border: solid 2px black;">{{item.MAR | number : 2}}</td>
        <td colspan="2" style="text-align: center;padding: 10px;border: solid 2px black;">{{item.APR | number : 2}}</td>
        <td colspan="2" style="text-align: center;padding: 10px;border: solid 2px black;">{{item.MAY | number : 2}}</td>
      </tr>
    </table> -->

<!-- <div style="width:520px;margin:0px auto;margin-top:30px;height:500px;"> -->


  <!-- <h2>Select Box with Search Option Jquery Select2.js</h2> -->


<!--   <select class="myselect" style="width:500px;">
      <option>Laravel</option>
      <option>Laravel ACL</option>
      <option>Laravel PDF</option>
      <option>Laravel Helper</option>
      <option>Laravel API</option>
      <option>Laravel CRUD</option>
      <option>Laravel Angural JS Crud</option>
      <option>C++</option>
  </select>
 -->
<!-- <select class="form-control myselect" id="sel1" ng-model='registry.acc_title' ng-click='get_code()' required/>
    <option value="">-- Please Select --</option>
    <option ng-repeat="acc in accs" value="{{acc.acc_title}}">{{acc.acc_title}} || {{acc.acc_code}}</option>
  </select>  -->
  <!-- <form ng-submit="click(search);"> -->
  <!-- <input class="form-control" id="sketchpad-post" type="text" ng-model="search.s" value=""> -->
  <!-- <label class="child-label" for="existing-phases">Existing:&nbsp;&nbsp;</label> -->
<!--   <input class="form-control" id="sketchpad-post" type="text" ng-model="search" list="names" value="">
  <datalist id="names" class="form-control hidden" ng-model="name">
    <option ng-repeat="acc in accs | filter:search | limitTo:10" value="{{acc.acc_title}}">{{acc.acc_title}} || {{acc.acc_code}}</option>
    
  </datalist>
  <button type="submit">Submit</button>
</div> -->
<br>
      <!-- <input type="button" value="Print" onclick="PrintElem('#yourdiv')" /> -->
<div id="editModal" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg" style="width: 100%">

    <!-- Modal content-->
    <div class="modal-content" style="overflow-y: initial !important">
      <div class="modal-body" style="height: 650px;
    overflow-y: auto;">
      <div id="printSectionId2"> 
        <!-- <img src="<?php echo base_url();?>img/DOH.png" style="float: left; width: 60px; height: 60px; "> -->
        <!-- <img src="<?php echo base_url();?>img/ROX.png" style="float: right; width: 60px; height: 60px; "> -->
        <!-- <div style="float: left;"> -->
          <br>
        <!-- <h3 style="margin: 0; vertical-align: middle; text-align: center;">Department of Health</h3> -->
        <h3 style="margin: 0; text-align: center;vertical-align: middle;">RJ Med Pharma & General Merchandise</h3>
        <!-- </div> -->
        <hr>
        <br>
  <table class="table table-bordered" ng-if="rep.report == 'daily' && rep.type == 'meds'">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
        <div>
          <tr>
            <th colspan=5 style="text-align: center;">Daily Medicines Report from {{rep.datefrom | date}} to {{rep.dateto | date}}</th>
          </tr>
          <tr">
            <th>Medicine</th>
            <th>Lot No.</th>
            <th>Date</th>
            <th>Total</th>
<!--             <th>MARCH</th>
            <th>GRAND TOTAL</th> -->
          </tr>
        </div>
        </thead>
        <tbody>
        <div>
          <tr ng-repeat="item in daily_med">
            <td>{{item.item_description}}</td>
            <td>{{item.lot_no}}</td>
            <td>{{item.date | date}}</td>
            <!-- <td>{{item.FEB | number : 2}}</td> -->
            <!-- <td>{{item.MAR | number : 2}}</td> -->
            <td style="font-weight: bold;">{{item.tot_qty}}</td>
          </tr>
        </div>
        </tbody>
    </table>
        <!-- ==================================================================================== -->
      <table class="table table-bordered" ng-if="rep.report == 'daily' && rep.type == 'sales'">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
        <div>
          <tr>
            <th colspan=5 style="text-align: center;">Daily Medicines Report from {{rep.datefrom | date}} to {{rep.dateto | date}}</th>
          </tr>
          <tr>
            <th>Date</th>
            <th>Total</th>
<!--             <th>MARCH</th>
            <th>GRAND TOTAL</th> -->
          </tr>
        </div>
        </thead>
        <tbody>
        <div>
          <tr ng-repeat="item in sales_daily">
            <td>{{item.date | date}}</td>
            <!-- <td>{{item.FEB | number : 2}}</td> -->
            <!-- <td>{{item.MAR | number : 2}}</td> -->
            <td style="font-weight: bold;">{{item.tot_qty}}</td>
          </tr>
        </div>
        </tbody>
    </table>
        <!-- ==================================================================================== -->
      <table class="table table-bordered" ng-if="rep.report == 'monthly'">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
        <div >
          <tr>
            <th colspan=14 style="text-align: center;">MONTHLY MEDICINES REPORT</th>
          </tr>
          <tr>
            <th>Medicine</th>
            <th>Lot No.</th>
            <th>JANUARY</th>
            <th>FEBRUARY</th>
            <th>MARCH</th>
            <th>APRIL</th>
            <th>MAY</th>
            <th>JUNE</th>
            <th>JULY</th>
            <th>AUGUST</th>
            <th>SEPTEMBER</th>
            <th>OCTOBER</th>
            <th>NOVEMBER</th>
            <th>DECEMBER</th>
          </tr>
        </div>
        </thead>
        <tbody>
        <div >
          <tr ng-repeat="item in med_monthly"">
            <td>{{item.item_description}}</td>
            <td>{{item.lot_no}}</td>
            <td>{{item.JAN}}</td>
            <td>{{item.FEB}}</td>
            <td>{{item.MAR}}</td>
            <td>{{item.APR}}</td>
            <td>{{item.MAY}}</td>
            <td>{{item.JUN}}</td>
            <td>{{item.JUL}}</td>
            <td>{{item.AUG}}</td>
            <td>{{item.SEPT}}</td>
            <td>{{item.OCT}}</td>
            <td>{{item.NOV}}</td>
            <td>{{item.DECE}}</td>
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

<!--          <button ng-if="!leave.abs || !leave.earned" type="button" class="btn btn-primary" ng-click="add_leave()">Save</button> -->
         <!-- <button ng-if="!leave.abs" type="button" class="btn btn-danger" ng-click="add_leave()">Save</button> -->
      </div>
    </div>

  </div>
</div>
</div> 
</div>
