<div class="container" ng-controller="newCtrl">    
<div class="form-group col-md-12">
</div>
  <br>
        <div class="form-group col-md-6">
        <label for="fullname">Customer :</label>  
        <input type="text" class="form-control"  value="<?php echo $content[0]->customer; ?>" readonly="">
        </div>

       <div class="form-group col-md-6">
        <label for="fullname">Address :</label>
          <input type="text" class="form-control" value="<?php echo $content[0]->address; ?>" readonly="">
        </div>

       <div class="form-group col-md-6">
        <label for="fullname">Date :</label>
          <input type="date" class="form-control" value="<?php echo $content[0]->date; ?>" readonly="">
        </div>

      <div class="form-group col-md-2">
        <label for="fullname">Order No. :</label>
          <input type="text" class="form-control" value="<?php echo strtoupper($content[0]->type); ?>" readonly="">
          <br>
      </div>

    <div class="form-group col-md-4">
        <label for="fullname">&nbsp</label>
          <input type="text" class="form-control" value="<?php echo $content[0]->orderno; ?>" readonly="">
          <br>
      </div>

     <div id="printSectionId2">
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
            <th>Quantity Issued</th>
            <th>Unit Price</th>
            <th>Discount</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
  <?php foreach ($content as $content) : ?>
          <tr>
            <td style="width: 12px;"><a ng-click="get_ss_orderno(<?php echo $content->tid; ?>)" class="btn btn-danger" style="text-align: center;"><i class='fa fa-trash'></i>&nbsp</a></td>
            <td><?php echo $content->item_description; ?></td>
            <td><?php echo $content->lot_no ?></td>
            <td><?php echo date("m/y"); ?></td>
            <td><?php echo $content->qty_issued; ?></td>
            <td><?php echo $content->unit_cost; ?></td>
            <td><?php echo $content->discount; ?></td>
            <td><?php echo number_format($content->total_amount,2); ?></td>
          </tr>
  <?php endforeach;?>

          <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td style=" font-weight: bold;">TOTAL: </td>
           <td style=" font-weight: bold;"><?php echo number_format($x,2); ?>
           </td>
          </tr>
        </tbody>
      </table> 
        <a href="<?php echo base_url()?>Admin/print/<?php echo $content->orderno; ?>" type="button" class="btn btn-default pull-right" target="_blank" name="">PRINT</a>      
      </div>
  </div>