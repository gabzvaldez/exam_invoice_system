<div ng-controller="StudentController">

  <div class="container">   

  <div id="printSectionId">
    <h2>Reports</h2>
    <br>

         <table class="table table-bordered">
            <thead class="thead-dark" style="background-color: #173F5F;
        color: white;">
              <tr>
                <!-- <th>Image</th> -->
                <!-- <th>Activity</th> -->
                <!-- <th>Programs</th> -->
                <th class="hidden-print"></th>
                <!-- <th>OBR No.</th> -->
                <th>Quarter</th>
                <!-- <th>Quarter</th> -->
                <!-- <th>Creditor</th> -->
                <th>Total Allocation</th>
                <!-- <th>Disbursement</th> -->
                <!-- <th>Ada No.</th> -->
                <!-- <th>Unpaid Obligations</th> -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="hidden-print">
                  <?php 
                  if($session_data['dept'] == 'budget'){ 
                  echo "<button class='button' ng-click='specific_transaction(item.cid)' data-toggle='modal' data-target='#editModal'><i class='fa fa-search' style='font-size: 12px;'></i></button>";
                  }else{
                    echo '';
                    } 
                  ?>
                </td>
                <td>First Quarter</td>
                <td>{{first | number : 2}}</td>
              </tr>
              <tr>
                <td class="hidden-print">
                  <?php 
                  if($session_data['dept'] == 'budget'){ 
                  echo "<button class='button' ng-click='specific_transaction(item.cid)' data-toggle='modal' data-target='#editModal'><i class='fa fa-search' style='font-size: 12px;'></i></button>";
                  }else{
                    echo '';
                    } 
                  ?>
                </td>
                <td>Second Quarter</td>
                <td>{{second | number : 2}}</td>
              </tr>
              <tr>
                <td class="hidden-print">
                  <?php 
                  if($session_data['dept'] == 'budget'){ 
                  echo "<button class='button' ng-click='specific_transaction(item.cid)' data-toggle='modal' data-target='#editModal'><i class='fa fa-search' style='font-size: 12px;'></i></button>";
                  }else{
                    echo '';
                    } 
                  ?>
                </td>
                <td>Third Quarter</td>
                <td>{{third | number : 2}}</td>
              </tr>
              <tr>
                <td class="hidden-print">
                  <?php 
                  if($session_data['dept'] == 'budget'){ 
                  echo "<button class='button' ng-click='specific_transaction(item.cid)' data-toggle='modal' data-target='#editModal'><i class='fa fa-search' style='font-size: 12px;'></i></button>";
                  }else{
                    echo '';
                    } 
                  ?>
                </td>
                <td>Fourth Quarter</td>
                <td>{{fourth | number : 2}}</td>
              </tr>
            </tbody>
          </table> 
    </div>
    <button ng-click="printToCart('printSectionId')" class="button">Print</button>

<!--              <table>
            <thead class="thead-dark" style="background-color: #173F5F;
        color: white; border: 1">
              <tr>
                <th>1</th>
                <th>2</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat=" x in rep2 | unique: 'PROGRAMS'">
                <td>{{x.PROGRAMS}}</td>
                <td>
                  <table>
                    <tr ng-repeat="y in rep2">
                      <td>{{y.MONTH_OBLIGATED}}</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>  -->
              <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Information</h3>
            </div>
          
  </div>

</div>

