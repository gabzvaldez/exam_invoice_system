<!DOCTYPE html>
<html ng-app="mainApp">
  <head lang="en">
    <meta charset="utf-8">
    <title>RJ MED</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.min.css" media="all">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modal.css"> -->
    <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/table.css" media="all"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.min.css"> -->
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css" media="all">
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->

  <link href="<?php echo base_url(); ?>assets/admin_style/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
  <script src="<?php echo base_url(); ?>assets/xlsx.core.min.js"></script>   
  <script src="<?php echo base_url(); ?>assets/xls.core.min.js"></script> 
  <script   src="<?php echo base_url(); ?>assets/jquery-1.12.4.min.js"> </script>
  <!-- <script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui/0.4.0/angular-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/services.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/controllers.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<style>
.column {
     /*width:300px;*/
     /*padding-right : 100px;*/
     float:left;
}
.column h2 {
  font-size: 20px;
}
.column2 {
  text-align: right;
}
.column2 h2 {
  font-size: 20px;
}
.clearfix {
  overflow: auto;
}
</style>
  </head>
  <body>
    <div class="col-md-12">
         <!-- <h1 class="text-primary" align="center" style="font-size: 16px; font-weight: bold;">DELIVERY RECEIPT</h1> -->
   </div>
<!--    <div class="col-md-6">
     <h1 style="font-size: 25px">Customer : <?php echo $content[0]->customer; ?></h1>
     <h1 style="font-size: 25px">Address : <?php echo $content[0]->address; ?></h1>
   </div>
      <div class="col-md-6">
     <h1 style="font-size: 25px">Date : <?php echo $content[0]->date; ?></h1>
     <h1 style="font-size: 25px">Terms : <?php echo $content[0]->terms; ?></h1>
   </div> -->

    <!-- <h2 style="text-align: right; font-size: 16px;">Order No. <?php echo $content[0]->orderno; ?></h2> -->

  
  <div class="column">
    <h2>Customer : <?php echo $content[0]->customer; ?></h2>
    <!-- <h2>Address : <?php echo $content[0]->address; ?></h2> -->
    <!-- <p>paragraph text</p> -->
  </div>
  <div class="column2">
    <!-- <h2>Date : <?php echo $content[0]->date; ?></h2> -->
    <!-- <h2>Terms : <?php echo $content[0]->terms; ?></h2> -->
    <!-- <p>paragraph text</p> -->
  </div>
  <table class="table">
        <tr>
          <th colspan="2" style="text-align: center;padding: 0px;border: solid 2px black;" >Description</th>
          <th colspan="2" style="text-align: center;padding: 0px;border: solid 2px black; " >Lot No.</th>
          <th colspan="2" style="text-align: center;padding: 0px;border: solid 2px black; " >Expiry</th>
          <th colspan="2" style="text-align: center;padding: 0px;border: solid 2px black; " >Quantity</th>
          <th colspan="2" style="text-align: center;padding: 0px;border: solid 2px black; " >Unit price</th>
          <th colspan="2" style="text-align: center;padding: 0px;border: solid 2px black; " >Discount</th>
          <th colspan="2" style="text-align: center;padding: 0px;border: solid 2px black; " >Amount</th>
        </tr>
  <?php foreach ($content as $content) : ?>
        <tr>
          <td colspan="2" style=" font-size: 13px; text-align: left;padding: 5px;border: solid 1px black;"><?php echo $content->item_description; ?></td>
          <td colspan="2" style=" font-size: 13px;text-align: center;padding: 5px ;border: solid 1px black; "><?php echo $content->lot_no ?></td>
          <td colspan="2" style=" font-size: 13px;text-align: center;padding: 5px;border: solid 1px black; "><?php echo date("m/y"); ?></td>
          <td colspan="2" style=" font-size: 13px;text-align: center;padding: 5px;border: solid 1px black; "><?php echo $content->qty_issued; ?></td>
          <td colspan="2" style=" font-size: 13px;text-align: center;padding: 5px;border: solid 1px black; "><?php echo $content->unit_cost; ?></td>
          <td colspan="2" style=" font-size: 13px;text-align: center;padding: 5px;border: solid 1px black; "><?php echo $content->discount; ?>%</td>
          <td colspan="2" style=" font-size: 13px;text-align: center;padding: 5px;border: solid 1px black; "><?php echo number_format($content->total_amount,2); ?></td>
        </tr>
  <?php endforeach;?>
  <?php for ($i=0; $i < $counts; $i++) : ?>
  <?php  echo "<tr>
          <td colspan='2' style='text-align: center;padding: 5px;border: solid 1px black; '>&nbsp</td>
          <td colspan='2' style='text-align: center;padding: 5px;border: solid 1px black; '>&nbsp</td>
          <td colspan='2' style='text-align: center;padding: 5px;border: solid 1px black; '>&nbsp</td>
          <td colspan='2' style='text-align: center;padding: 5px;border: solid 1px black; '>&nbsp</td>
          <td colspan='2' style='text-align: center;padding: 5px;border: solid 1px black; '>&nbsp</td>
          <td colspan='2' style='text-align: center;padding: 5px;border: solid 1px black; '>&nbsp</td>
          <td colspan='2' style='text-align: center;padding: 5px;border: solid 1px black; '>&nbsp</td>
         </tr>" ?>
    <?php endfor; ?>
    <tr>
          <td colspan='12' style='text-align: center;padding: 10px;border: solid 1px black; text-align: left;'>TOTAL GROSS</td>
          <td colspan='14' style='text-align: center;padding: 10px;border: solid 1px black; '><?php echo number_format($x,2); ?></td>
    </tr>

</table>
<!-- <p style="text-align: right;">Receive above merchandise in good</p> -->
<!-- <p style="text-align: right;">order and condition.</p> -->
<div class="clearfix"></div>
<!-- <p style="text-align: left;">Prepared By:  -->
</p>
<!-- <div class="clearfix"></div> -->
<!-- <p style="text-align: right;">By:_______________ -->
</p>
</body>

   <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.5.js"></script>
<!--   <script type="text/javascript">
      $(".myselect").select2();
</script> -->
  </body>
</html>