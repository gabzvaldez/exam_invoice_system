
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#/home" style="font-style: bold;">Finance System</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#/home">Home</a></li>
              <!-- <li><a href="#/claims">Leave</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
              <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
            </ul>
          </div>
        </div>
      </nav>

    <!-- Page Content -->
    <div class="container">
      <!-- <div class="panel panel-default"> -->
      <div class="form-group col-sm-3">
        <label>Search Division/SAA :</label>
          <select  ng-model="search.division" class="form-control" id="sel1">
            <option value=" ">Select</option>
            <option value="PHM">Local Health Support Division</option>
            <option value="STO">Management Support Divison</option>
            <option value="RLED">Regulatory and Licensing Enforcement Division</option>
            <option value="SAA">SAA</option>
            <!-- <option>4</option> -->
          </select>
      </div>
<!-- ========================================================================================================= -->

      <div ng-if="search.division=='STO'"class="form-group col-sm-3">
          <label>Search Program/Cluster :</label>
          <select ng-model='search.cluster'class="form-control" id="sel1">
            <!-- <option ng-repeat="item in all" >item.act_name</option> -->
            <option>STO-CAO/SAO</option>
            <option>STO-BUDGET</option>
            <option>STO-ACCOUNTING</option>
            <option>STO-SUPPLY</option>
            <option>STO-TRANSPORT/GSS</option>
            <option>STO-RECORDS</option>
            <option>STO-PERSONNEL</option>
            <option>STO-CASHIER</option>
            <option>STO-PROCUREMENT</option>
            <option>STO-LEGAL</option>
            <option>STO-PLANNING</option>
            <option>STO-ICT</option>
            <option>STO-HRDU</option>
          </select>
      </div>

      <div ng-if="search.division=='PHM'"class="form-group col-sm-3">
          <label>Search Program/Cluster :</label>
          <select ng-model='search.cluster'class="form-control" id="sel1">
 <option>MNCHN</option>
 <option>FAMILY PLANNING</option>
 <option>NATURAL FAMILY PLANNING</option>
 <option>MATERNAL CARE</option>
 <option>EPI</option>
 <option>CARI/CDD/IMCI</option>
 <option>AHDP</option>
 <option>MBFHI</option>
 <option>IYCF</option>
 <option>NEWBORN SCREENING</option>
 <option>NUTRITION</option>
 <option>DENTAL</option>
 <option>NVBSP</option>
 <option>NTP</option>
 <option>STD/AIDS</option>
 <option>RABIES</option>
 <option>LEPROSY</option>
 <option>STH</option>
 <option>SCHISTOSOMIASIS</option>
 <option>MALARIA</option>
 <option>DENGUE</option>
 <option>FILARIA</option>
 <option>EREID</option>
 <option>LRD</option>
 <option>VIPP</option>
 <option>REDCOP</option>
 <option>BLINDNESS</option>
 <option>MENTAL HEALTH</option>
 <option>HWPSC</option>
 <option>HWPPWD</option>
 <option>TRAD MED</option>
 <option>DDAPTP</option>
 <option>HEMS</option>
 <option>FHSIS</option>
 <option>HOMS</option>
 <option>INFRA</option>
 <option>NHLN</option>
 <option>FWBD</option>
 <option>ENVI SANITATION</option>
 <option>OH</option>
 <option>WASH</option>
 <option>LHAC</option>
 <option>BHW</option>
 <option>GIDA</option>
 <option>HLGP</option>
 <option>NCPAM</option>
 <option>DMU</option>
 <option>HSPMU</option>
 <option>TSEKAP</option>
 <option>PDOHO BUKIDNON</option>
 <option>PDOHO CAMIGUIN</option>
 <option>PDOHO LDN</option>
 <option>PDOHO ILIGAN</option>
 <option>PDOHO MIS OCC</option>
 <option>PDOHO MIS OR</option>
 <option>PDOHO CDO</option>
 <option>ISO</option>
 <option>ICT</option>
 <option>PROCUREMENT</option>
 <option>GAD</option>
 <option>RD/ARD</option>
 <option>MANDATORY</option>
 <option>JOB ORDER</option>
 <option>DIV CHIEF</option>
 <option>SUPPLY</option>
 <option>PERSONNEL</option>
 <option>PLANNING</option>
          </select>
      </div>

      <div ng-if="search.division=='RLED'"class="form-group col-sm-3">
          <label>Search Program/Cluster :</label>
          <select ng-model='search.cluster'class="form-control" id="sel1">
          <option>HFLS</option>
          <option>LICENSING</option>
          <option>DENTAL</option>
          <option>ENVI SANITATION</option>
          <option>REGIONAL LAB</option>
          <option>HLGP</option>
          <option>RD/ARD</option>
          </select>
      </div>

      <div ng-if="search.division=='SAA'"class="form-group col-sm-3">
          <label>Search Program/Cluster :</label>
          <select ng-model='search.cluster'class="form-control" id="sel1">
             <option value="DO 2019-0051">NHSM</option>
             <option value="DO 2019-0014">MED SCHOLARS</option>
             <option value="SAA 19-01-0019">NVBSP</option>
             <option value="SAA 19-03-0090">NTP</option>
             <option value="SAA 19-03-0105">HEMS</option>
             <option value="SAA 19-03-0111">HEMS (MARAWI)</option>
             <option value="DO 2019-0018">GIDA</option>
             <option value="DO 2019-0026">MEASLES AND POLIO VACC</option>
             <option value="DO 2019-0030">EDPMS/NCPAM</option>

          </select>
      </div>
      <br>
      <button ng-click="search_trans(search.division,search.cluster)"  title="Forward Document" class="btn btn-success">Search</button>
      <br>
      
      <br>
      <hr>

  <div  id="printSectionId">
  <h1>{{search.cluster}}</h1>
  <br>
     <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
          <tr>
            <!-- <th>Image</th> -->
            <!-- <th>Activity</th> -->
            <!-- <th>Programs</th> -->
            <th></th>
            <th>Account Title</th>
            <th>Creditor</th>
            <th>Obligation</th>
            <th>Disbursement</th>
            <!-- <th>Ada No.</th> -->
            <th>Unpaid Obligations</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="item in all">
            <!-- <td><img style=" width: 80px; height: 80px;" ng-src="{{item.img}}"/></td> -->
            <!-- <td>{{item.PROGRAMS}}</td> -->
            <td><button class="button" ng-click="specific_transaction(item.cid)" data-toggle='modal' data-target='#editModal'><i class="fa fa-edit" style="font-size: 10px;"></i></button></td>
            <td>{{item.ACCOUNT_TITLE}}</td>
            <td>{{item.CREDITOR}}</td>
            <td>{{item.OBLIGATION | number : 2}}</td>
            <td>{{item.DISBURSEMENT | number : 2}}</td>
            <td>{{item.UNPAID_OBLIGATIONS | number : 2}}</td>
<!--             <td>
              <button ng-click="  (item.eid)" title="View Document" data-toggle='modal' data-target='#editModal'  class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i></button>
              <button ng-click="view_bal(item.eid)"  title="Forward Document" data-toggle='modal' data-target='#balModal'  class="btn btn-success"><i class="glyphicon glyphicon-eye-open"></i></button>
            </td> -->
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td style=" font-weight: bold;">TOTAL</td>
            <td style=" font-weight: bold;">{{sum_obligation | number : 2}}</td>
            <td style=" font-weight: bold;">{{sum_disbursement | number : 2}}</td>
           <td style=" font-weight: bold;">
            {{sum_unpaid_obs | number : 2}}
           </td>
          </tr>
        </tbody>
      </table> 

      <!-- </div> -->
    <!-- </table> -->

      </div>
      <button ng-click="printToCart('printSectionId')" class="button">Print</button>

    </div>


<!-- Modal -->
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
        <form name="form1">
        <label class="control-label">Activity Title</label>
         <textarea type="text" class="form-control" ng-model="specific_trans.ACT_TITLE" name="position"/></textarea>
         <br>
         <label class="control-label">Account Title</label>
         <input type="text" class="form-control" value="{{specific_trans.ACCOUNT_TITLE}}" name="position" readonly="" />
<!--          <select  ng-model="specific_trans.ACCOUNT_TITLES" class="form-control" id="sel1">
            <option value="">{{specific_trans.ACCOUNT_TITLE}}</option>
            <option value="RLED">Regulatory and Licensing Enforcement Division</option>
            <option value="SAA">SAA</option> -->
            <!-- <option>4</option> -->
          </select>
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
         <button ng-if="!leave.abs" type="button" class="btn btn-danger" ng-click="update_act_title(specific_trans.cid)">Save</button>
      </div>
    </div>

  </div>
</div>


<div id="balModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leave Balances</h4>
      </div>
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
          <div class="row">
          <div class="col-sm-6">
          <label class="control-label">Vacation Leave Balance</label>
            <input type="text" class="form-control" value="{{bal.vacation}}" name="position" readonly="">
          </div>
          <div class="col-sm-6">
            <label class="control-label">Sick Leave Balance</label>
            <input type="text" class="form-control" value="{{bal.sick}}" name="position" readonly="" /></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>