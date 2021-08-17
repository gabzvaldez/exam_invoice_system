<div class="container" ng-controller="newCtrl">    
<div class="form-group col-md-12">
  <!-- <h2 class="pull-left">Order No.{{inv.orderno}}</h2> -->
  <!-- <input type="text" ng-model="inv.orderno" value="{{inv.orderno}}"> -->
</div>
            <!-- <p><?php echo $role; ?></p> -->

  <br>
        <div class="form-group col-md-6">
          <label for="fullname">Customer :</label>  
          <!-- <input type="text" class="form-control" ng-model="dta.customer"> -->
            <input class="form-control" type="text" list="cust" ng-model="dta.customer" ng-change="selectedItemChanged_c(dta.customer, $index)"> 
          <datalist id="cust">
              <option ng-repeat="cust in cust " value="{{cust.c_description}}" ></option>
          </datalist>
        </div>

       <div class="form-group col-md-6">
        <label for="fullname">Address :</label>
          <input type="text" class="form-control" ng-model="dta.address" readonly="">
        <!-- <br> -->
        <!-- <br> -->
        </div>

       <div class="form-group col-md-6">
        <label for="fullname">Date :</label>
          <input type="date" class="form-control" ng-model="dta.date">
        <!-- <br> -->
        <!-- <br> -->
        </div>

      <div class="form-group col-md-2">
        <label for="fullname">Order No. :</label>
          <select class="form-control" ng-model="dta.type" placeholder="Type">
          <option value="">-- Select --</option>
          <option value="dr">DR</option>
          <option value="cs">CS</option>
          <option value="chi">CHI</option>
          </select>
          <br>
      </div>

    <div class="form-group col-md-4">
        <label for="fullname">&nbsp</label>
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
            <th>Lot No.</th>
            <th>Expiry </th>
            <!-- <th>Quantity</th> -->
            <th>Quantity Issued</th>
            <th>Unit Price</th>
            <th>Discount</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="items in items">
               <td style="text-align: center"><button class="btn btn-danger" ng-click="rem_ord(items)">-</button></td> 
            <td colspan="">      

<!--              <input class="form-control" type="text" ng-model="items.description" list="names" ng-change="selectedItemChanged(items.description, $index)" >
                          <datalist id="names" class="form-control hidden" ng-model="obrs_program.OBR_NUM">
                            <option ng-repeat="inv in inv" value="{{inv.lot_no}}">{{inv.item_description}} || {{inv.quantity}}</option>
                          </datalist>{{inv.id}}</td> -->
                                                        <input class="form-control" type="text" list="names" ng-model="items.item_description" ng-change="selectedItemChanged(items.item_description, $index)"> 
                              <datalist id="names" >
                                  <option ng-repeat="inv in inv " value="{{inv.id}}" > {{inv.item_description}} -- {{inv.lot_no}}</option>
                              </datalist> 
            <!-- <td><input type="text" ng-model="items.quantity" class="form-control" ></td> -->
            <!-- <td>{{item.CREDITOR}}</td> -->
            <td><input type="text" class="form-control" ng-model="items.lot_no" readonly=""></td>
            <td><input type="text" class="form-control" ng-model="items.expiry_date" value="items.expiry_date" readonly=""></td>
            <!-- <td><input type="text" class="form-control" ng-model="items.quantity"></td> -->
            <td><input type="text" class="form-control" ng-model="items.qty_issued"></td>
            <td><input type="text" class="form-control" ng-model="items.unit_price" readonly=""></td>
            <td><input type="text" placeholder="%" class="form-control" ng-model="items.discount"></td>
            <td><input type="text" class="form-control" value="{{calc(items.qty_issued, items.unit_price, items.discount,$index).disp  | number: 2}}"></td>
            <!-- <td><input type="text" class="form-control" ng-model="items.unit_price"></td> -->
          </tr>
          <tr>
           <!-- <td></td> -->
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td style=" font-weight: bold;">TOTAL: </td>
           <td style=" font-weight: bold;"> {{disp_total_c | number : 2}}
           </td>
          </tr>
        </tbody>
      </table> 
      <!-- </div> -->
      <div class="pull-right">
              <a type="button" ng-click="submit(dta.orderno)" class="btn btn-default" name="">SUBMIT</a>
    </div>  <!-- <a type="button" ng-click="printToCart('printSectionId2')" class="btn btn-default" name="">print</a> -->
  </div>