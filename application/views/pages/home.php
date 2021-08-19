<div class="container" ng-controller="newCtrl">    
<div class="form-group col-md-12">
</div>  
<h1>Add Invoice</h1>
  <br>
        <div class="form-group col-md-6">
          <label for="fullname">Customer :</label>  
<!--             <input class="form-control" type="text" list="cust" ng-model="dta.customer" ng-change="selectedItemChanged_c(dta.customer, $index)"> 
          <datalist id="cust">
              <option ng-repeat="cust in cust " value="{{cust.name}}"></option>
          </datalist> -->
          <select ng-options="s as s.name for s in cust" ng-model="dta.customer" ng-change="selectedItemChanged_c(dta.customer)" class="form-control">
<!--             <option value=" ">-- Select Customer -- </option>
            <option ng-click="get_addr()" ng-repeat="cust in cust">{{cust.name}}</option> -->
          </select>
        </div>

       <div class="form-group col-md-6">
        <label for="fullname">Address :</label>
          <input type="text" class="form-control" ng-model="dta.address">
        <!-- <br> -->
        <!-- <br> -->
        </div>

       <div class="form-group col-md-6">
        <label for="fullname">Invoice Date:</label>
          <input type="date" class="form-control" ng-model="dta.date">
        <!-- <br> -->
        <!-- <br> -->
        </div>

    <div class="form-group col-md-6">
        <label for="fullname">Invoice No.:</label>
          <input type="text" class="form-control" ng-model="dta.orderno">
          <!-- <br> -->
    </div>

     <button style="float:right;" ng-click="add()" type="submit" class="btn btn-success">+</button>
     <!-- <div id="printSectionId2"> -->
     <br>


     <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
          <tr>
            <!-- <th class="hidden-print"></th> -->
            <th></th>
            <th style="width: 40%;">Description</th>
            <!-- <th>Lot No.</th> -->
            <!-- <th>Expiry </th> -->
            <!-- <th>Quantity</th> -->
            <th>Quantity Issued</th>
            <th>Unit Price</th>
            <th>Discount</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="items in items">
               <td style="text-align: center"><button class="btn btn-danger" title="Remove item" ng-click="rem_ord(items)">x</button></td> 
               <td colspan="">      
                <input class="form-control" type="text" list="names" ng-model="items.item_description" ng-change="selectedItemChanged(items.item_description, $index)"> 
                <datalist id="names" >
                    <option ng-repeat="inv in inv " value="{{inv.id}}"> {{inv.item_description}}</option>
                </datalist> 
            <td><input type="text" class="form-control" ng-model="items.qty_issued"></td>
            <td><input type="text" class="form-control" ng-model="items.unit_price" readonly=""></td>
            <td><input type="text" placeholder="%" class="form-control" ng-model="items.discount"></td>
            <td><input type="text" class="form-control" value="{{calc(items.qty_issued, items.unit_price, items.discount,$index).disp  | number: 2}}"></td>
          </tr>
          <tr>
           <td></td>
           <td></td>
           <td></td>
           <!-- <td></td> -->
           <!-- <td></td> -->
           <td></td>
           <td style=" font-weight: bold;">TOTAL: </td>
           <td style=" font-weight: bold;"> {{disp_total_c | number : 2}}
           </td>
          </tr>
        </tbody>
      </table> 

      <div class="pull-right">
              <a type="button" ng-click="submit(dta.orderno)" class="btn btn-default" name="">SUBMIT</a>
    </div> 
  </div>