
    <!-- Navigation -->
  <!--   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#/claims">CREDIT CLAIMS</a>
      </div>
    </nav> -->
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
        <label>Search Division :</label>
          <select  ng-model="search.division" class="form-control" id="sel1">
            <option value="LHSD">Local Health Support Division</option>
            <option value="MSD">Management Support Divison</option>
            <option value="RLED">Regulatory and Licensing Enforcement Division</option>
            <!-- <option>4</option> -->
          </select>
      </div>
<!-- ========================================================================================================= -->

      <div ng-if="search.division=='MSD'"class="form-group col-sm-3">
          <label>Search Cluster :</label>
          <select ng-model='search.cluster'class="form-control" id="sel1">
            <!-- <option ng-repeat="item in all" >item.act_name</option> -->
            <option >GSU</option>
            <option >KMITS</option>
            <option >MMC</option>
            <option >PSU</option>
            <option >HHRMDC</option>
            <option >LEGAL</option>
          </select>
      </div>

      <div ng-if="search.division=='LHSD'"class="form-group col-sm-3">
          <label>Search Cluster :</label>
          <select ng-model='search.cluster'class="form-control" id="sel1">
            <option >NON-COM</option>
            <option >FHC</option>
            <option >IDC</option>
            <option >EOH</option>
            <option >LHSDC</option>
            <option >RESDRU</option>
            <option >HFDC</option>
            <option >SCU</option>
          </select>
      </div>

      <div ng-if="search.division=='RLED'"class="form-group col-sm-3">
          <label>Search Cluster :</label>
          <select ng-model='search.cluster'class="form-control" id="sel1">
            <option >HFLS</option>
            <option >OHFLS</option>
          </select>
      </div>
<!-- ========================================================================================================= -->
<!-- ================================================================================================================ -->
      <div ng-if="search.division=='MSD' && search.cluster=='KMITS'"class="form-group col-sm-3">
          <label>Search Program/Unit :</label>
          <select ng-model='search.section'class="form-control" id="sel1">
            <option value="ICTU">ICTU</option>
            <option value="LHSD">RECORDS</option>
          </select>
      </div>

      <div ng-if="search.division=='LHSD'"class="form-group col-sm-3">
          <label>Search Program/Unit :</label>
          <select ng-model='search.section'class="form-control" id="sel1">
            <option value="LHSD">1</option>
            <option value="LHSD">2</option>
            <option value="LHSD">3</option>
            <option value="LHSD">4</option>
          </select>
      </div>

      <div ng-if="search.division=='RLED'"class="form-group col-sm-3">
          <label>Search Program/Unit :</label>
          <select ng-model='search.section'class="form-control" id="sel1">
            <option value="LHSD">1</option>
            <option value="LHSD">2</option>
            <option value="LHSD">3</option>
            <option value="LHSD">4</option>
          </select>
      </div>
      <br>
      <button ng-click="search_trans(search.division,search.section)"  title="Forward Document" class="btn btn-success">Search</button>
<!-- =============================================================================================================== -->
<!-- ================================================================================================================ -->
<!--       <div ng-if="search.division=='RLED'" class="form-group col-sm-3">
        <label>Funding source :</label>
          <select ng-model="search.fund" class="form-control" id="sel1">
            <option value="LHSD">Local Health Support Division</option>
            <option value="RLED">Regulatory and Licensing Enforcement Division</option>
            <option value="MSD">Management Support Division</option>
        
          </select>
      </div>

      <div ng-if="search.division=='LHSD'" class="form-group col-sm-3">
        <label>Funding source :</label>
          <select ng-model="search.fund" class="form-control" id="sel1">
            <option value="LHSD">Local Health Support Division</option>
            <option value="RLED">Regulatory and Licensing Enforcement Division</option>
            <option value="MSD">Management Support Division</option>
         
          </select>
      </div>

      <div ng-if="search.division=='MSD' && search.cluster=='KMITS' && search.section=='ICTU'" class="form-group col-sm-3">
        <label>Funding source :</label>
          <select ng-model="search.fund" class="form-control" id="sel1">
            <option value="LHSD">STO-RLED</option>
            <option value="LHSD">STO-LHSD</option>
            <option value="LHSD">STO-ICTU</option>
          
          </sele -->
<!-- ================================================================================================================ -->
      <!-- <label>Search Employee</label> -->
      <!-- <input type="" class="form-control" ng-model="search" name=""> -->
      <br>
      
      <br>
      <br>
      <br>
      <!-- Jumbotron Header -->
<!--       <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
      </header> -->

      <!-- Page Features -->
  <div class="">
     <table class="table table-hover">
        <thead>
          <tr>
            <!-- <th>Image</th> -->
            <th>Activity</th>
            <th>Allocation</th>
            <th>Obligation</th>
            <th>disbursement</th>
            <!-- <th>Ada No.</th> -->
            <th>Division</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="item in all">
            <!-- <td><img style=" width: 80px; height: 80px;" ng-src="{{item.img}}"/></td> -->
            <td>{{item.act_name}}</td>
            <td ng-click="view_trans(item.tid)" data-toggle='modal' data-target='#allocationModal'><a href="">₱ {{item.allocation}}</a></td>
            <!-- <td>₱{{item.allocation}}</td> -->
            <td ng-click="view_trans(item.tid)" data-toggle='modal' data-target='#obligationModal'><a href="">₱{{item.obligation}}</a></td>
            <td ng-click="view_trans(item.tid)" data-toggle='modal' data-target='#disburseModal'><a href="">₱{{item.disbursement}}</a></td>
            <td>{{item.division}}</td>
            <td>
              <button ng-click="view_trans(item.tid)"  title="Forward Document"  data-toggle='modal' data-target='#balModal'  class="btn btn-success"><i class="glyphicon glyphicon-eye-open"></i></button>
            </td>
          </tr>
        </tbody>
      </table> 
    </table>

      </div>

    </div>
          <!-- alert("hi"); -->

    <!-- Footer -->

  <!-- <div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profile Info</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <div class="col-xs-9">
                  <input type="hidden" id="id" class="form-control" name="id" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-xs-3 control-label">First Name</label>
              <div class="col-xs-9">
                  <input type="text"  id="fname" class="form-control" name="fname" placeholder="First name" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-xs-3 control-label">Last Name</label>
              <div class="col-xs-9">
                  <input type="text"  id="lname" class="form-control" name="lname" placeholder="Last name" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-xs-3 control-label">Email Address</label>
              <div class="col-xs-9">
                  <input type="email"  id="email" class="form-control" name="email" placeholder="Email Address" required />
              </div>
            </div>
            <div class="form-group">
              <label class="col-xs-3 control-label">Position</label>
              <div class="col-xs-9">
                  <input type="text" id="position" class="form-control" name="position" placeholder="Position" required />
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary"/>
        </div>
      </div>
    </div>
  </div> -->


<!-- Modal -->
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leave Credits</h4>
      </div>
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
        <form name="form1">
        <label class="control-label">Period</label>
         <input type="text" class="form-control" ng-model="leave.period" name="position"/>
         <label class="control-label">Particulars</label>
         <input type="text" class="form-control" ng-model="leave.particulars" name="position"/>
         <br>
         <label class="control-label">Type of Leave</label>
          <div class="radio">
            <label><input type="radio" style="font: blue;" ng-model="leave.type" name="optradio" value="vacation" >VACATION LEAVE</label>
          </div>
          <div class="radio">
            <label><input type="radio" ng-model="leave.type" name="optradio" value="leave">SICK LEAVE</label>
          </div>
          <br>
          <div class="row">
          <div class="col-sm-4">
          <label class="control-label">Earned</label>
            <input type="number" class="form-control" name="earned" ng-model="leave.earned" name="position" required/>
            {{form1.earned.$valid}}
          </div>
          <div class="col-sm-4">
            <label class="control-label">ABS. UND. W/P</label>
            <input type="number" class="form-control" name="abs" ng-model="leave.abs" name="position" required/>
            {{form1.abs.$valid}}
          </div>
          <div class="col-sm-4">
            <label class="control-label">ABS. UND. WOP</label>
            <input type="number" class="form-control" ng-model="leave.abss" name="position"/></div>
        </div>
         <br>
         <label class="control-label">Remarks</label>
            <textarea type="text" class="form-control" ng-model="leave.remarks" name="position"/></textarea>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--          <button ng-if="!leave.abs || !leave.earned" type="button" class="btn btn-primary" ng-click="add_leave()">Save</button> -->
         <button ng-if="!leave.abs" type="button" class="btn btn-danger" ng-click="add_leave()">Save</button>
         <button ng-if="!leave.earned" type="button" class="btn btn-royal" ng-click="minus_leave()">Save</button>
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
<!--           <div class="row">
          <div class="col-sm-4">
          <label class="control-label">Obligation</label>
            <input type="text" class="form-control" ng-model="asd.asd" value="{{transactions.obligation}}" name="position">
          </div>
          <div class="col-sm-4">
            <label class="control-label">Disbursement</label>
            <input type="text" class="form-control" value="{{transactions.disbursement}}" name="position" /></div>
            <div class="col-sm-4">
            <label class="control-label">Allocation</label>
            <input type="text" class="form-control" value="{{transactions.allocation}}" name="position" /></div>
        </div> -->
        <label class="control-label">Activity</label>
         <input type="text" class="form-control" value="{{transactions.act_name}}" name="position" readonly="" />
         <br>
          <div class="row">
          <div class="col-sm-4">
          <label class="control-label">Allocation</label>
            <input type="number" class="form-control" name="earned" value="{{transactions.allocation}}" name="position" readonly="" />
            <!-- {{form1.earned.$valid}} -->
          </div>
          <div class="col-sm-4">
            <label class="control-label">Obligation</label>
            <input type="number" class="form-control" name="abs" value="{{transactions.obligation}}" name="position" readonly="" />
            <!-- {{form1.abs.$valid}} -->
          </div>
          <div class="col-sm-4">
            <label class="control-label">Disbursement</label>
            <input type="number" class="form-control" value="{{transactions.disbursement}}" name="position" readonly="" /></div>
        </div>
         <br>
         <label class="control-label">Remarks</label>
            <textarea type="text" class="form-control" name="position" readonly="" >{{transactions.remarks}}</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="allocationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update</h4>
      </div>
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
          <div class="row">
          <div class="col-sm-12">
          <label class="control-label">Allocation</label>
            <input type="text" class="form-control" ng-model="asd.asd" value="{{transactions.obligation}}" name="position">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="obligationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update</h4>
      </div>
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
          <div class="row">
          <div class="col-sm-12">
          <label class="control-label">Obligation</label>
            <input type="text" class="form-control" ng-model="asd.asd" value="{{transactions.obligation}}" name="position">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="disburseModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update</h4>
      </div>
      <div class="modal-body">
        <!-- {{eid.eid}}asd -->
          <div class="row">
          <div class="col-sm-12">
          <label class="control-label">Disbursement</label>
            <input type="text" class="form-control" ng-model="asd.asd" value="{{transactions.obligation}}" name="position">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>