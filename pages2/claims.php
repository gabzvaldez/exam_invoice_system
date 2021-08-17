
<div class="container">
  <br>
      <input type="text" ng-model="search" class="form-control">
   <br>
<table class="table table-bordered">
        <thead class="thead-dark">
           <tr>
            <th>Payee</th>
            <th>Account No.</th>
            <th>Particulars</th>
            <th>Amount</th>
            <th>Ada No.</th>
            <th>Date Deposited</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="cust in filteredCustomers|filter: search">
            <td>{{cust.Payee}}</td>
            <td>P{{cust.AccountNo}}</td>
            <td>{{cust.Particulars}}</td>
            <td>{{cust.Amount}}</td>
            <td>{{cust.AdaNo}}</td>
            <td>{{cust.DateDeposited}}</td>
          </tr>
        </tbody>
      </table> 
          <tr ng-repeat="cust in filteredCustomers|filter: search">
      
<!--   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" ng-repeat="cust in filteredCustomers|filter: search">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">{{cust.Payee}} {{cust.Amount}}</h4>
            </div>
          </div>
  </div> -->
      <div class="container">
        <div class="row" data-ng-show="customers.length == 0">
          <div class="col-span-12">
          No results found
        </div>
        </div>
        <div class="row" data-ng-show="customers.length > 0">
          <div class="col-span-12">
            <uib-pagination ng-model="currentPage" total-items="customers.length" max-size="maxSize" items-per-page="numPerPage" boundary-links="true"></uib-pagination>
          </div>
        </div>
      </div>
    
    </div>
 


