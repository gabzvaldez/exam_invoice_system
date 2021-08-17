angular.module('mainApp.controllers',[])
.controller('ReportController', function($scope, Main, $window,$filter) {
  $scope.rep = {}
  var tot_daily_sales = 0;
  var total_meds = 0;
  $scope.date_now = new Date();
  

  Main.get_meds_all().then(function(response){
  // console.log(response);
  $scope.meds_all = response;
})

  $scope.get_report = function(){
    // console.log($scope.rep);

    if($scope.rep.report == 'daily' && $scope.rep.type == 'meds' && $scope.rep.med_type == 'stock_out'){
        var daily_report_data = {
        'report' : $scope.rep.report,
        'datefrom': $filter('date')($scope.rep.datefrom, "yyyy-MM-dd"),
        'dateto' : $filter('date')($scope.rep.dateto, "yyyy-MM-dd")
        }
        console.log(daily_report_data);
        Main.daily_report_meds(daily_report_data).then(function(response){
        $scope.daily_med = response.data;
        console.log($scope.daily_med);
        console.log(total_meds);
        })
      // }
    }else if($scope.rep.report == 'daily' && $scope.rep.type == 'meds' && $scope.rep.med_type == 'stock_in'){
        var daily_report_data = {
        'report' : $scope.rep.report,
        'datefrom': $filter('date')($scope.rep.datefrom, "yyyy-MM-dd"),
        'dateto' : $filter('date')($scope.rep.dateto, "yyyy-MM-dd")
        }
        console.log(daily_report_data);
        Main.daily_report_meds_stock_in(daily_report_data).then(function(response){
        $scope.daily_med = response.data;
        console.log($scope.daily_med);
        console.log(total_meds);
        })
    }else if($scope.rep.report == 'daily' && $scope.rep.type == 'meds' && $scope.rep.med_type == 'rem'){
        // var daily_report_data = {
        // 'report' : $scope.rep.report,
        // 'datefrom': $filter('date')($scope.rep.datefrom, "yyyy-MM-dd"),
        // 'dateto' : $filter('date')($scope.rep.dateto, "yyyy-MM-dd")
        // }
        console.log(daily_report_data);
       Main.get_meds_all().then(function(response){
          // console.log(response);
          $scope.meds_all = response;
        })
    }else if($scope.rep.report == 'daily' && $scope.rep.type == 'sales'){
      var daily_report_data = {
        'report' : $scope.rep.report,
        'datefrom': $filter('date')($scope.rep.datefrom, "yyyy-MM-dd"),
        'dateto' : $filter('date')($scope.rep.dateto, "yyyy-MM-dd")
        }
        console.log(daily_report_data);
       Main.daily_report1(daily_report_data).then(function(response){
        $scope.sales_daily = response.data;
        console.log($scope.sales_daily)
        for(var x = 0;x<$scope.sales_daily.length; x++){
          var amt = $scope.sales_daily[x];
          tot_daily_sales += parseFloat(amt.qty_issued);
        }
          $scope.tot_daily_sales = parseFloat(tot_daily_sales).toFixed(2);
          console.log(tot_daily_sales);
          tot_daily_sales = 0;

          console.log($scope.tot_daily_sales);
          console.log(response);
        })      
    }
    // else if($scope.rep.report == 'daily' && $scope.rep.type == 'sales'){
    //   var daily_report_data = {
    //     'report' : $scope.rep.report,
    //     'datefrom': $filter('date')($scope.rep.datefrom, "yyyy-MM-dd"),
    //     'dateto' : $filter('date')($scope.rep.dateto, "yyyy-MM-dd")
    //     }
    //     console.log(daily_report_data);
    //    Main.daily_report_financial(daily_report_data).then(function(response){
    //     $scope.sales_daily = response;
    //     for(var x = 0;x<$scope.sales_daily.length; x++){
    //       var amt = $scope.sales_daily[x];
    //       tot_daily_sales += parseFloat(amt.tot);
    //     }

    //       $scope.tot_daily_sales = parseFloat(tot_daily_sales).toFixed(2);
    //       console.log(tot_daily_sales);
    //       tot_daily_sales = 0;

    //       console.log($scope.tot_daily_sales);
    //       console.log(response);
    //     })      
    // }
    // else if($scope.rep.report == 'monthly' && $scope.rep.type == 'meds'){
    //   var year = {
    //     'year' : $scope.rep.year
    //   }
    //    Main.monthly_report_meds(year).then(function(response){
    //     $scope.med_monthly = response.data;
    //     console.log($scope.med_monthly);
    //     })      
    // }
    else if($scope.rep.report == 'monthly' && $scope.rep.type == 'sales'){
      swal("This function is under maintenance, Thank you!", " ", "error");
      // var year = {
      //   'year' : $scope.rep.year
      // }
      //  Main.monthly_report_meds(year).then(function(response){
      //   $scope.med_monthly = response.data;
      //   console.log($scope.med_monthly);
      //   })      
    }else{

    }
  }

})
.controller('newCtrl', function($scope, Main, $window, $filter){
  var base_url = 'http://' + window.location.hostname;
  // console.log('Yes sir!');
  $con = '';
  var flag = 0;
  $scope.inv = {};
  $scope.items = [];
  var disp_total = 0;
  var datas = {};
  $scope.disp_total_c = 0;
  var disp = 0;
  $scope.disps = 0;

  $scope.add = function(){
    $scope.items.push({});
  }

  $scope.rem_ord = function(id){
    // console.log(id);
    // $scope.items.splice(i,1);
   $scope.items.splice($scope.items.indexOf(id),1);

  }


    Main.get_all_inventory().then(function(response){
       $scope.inv = response;
       // $scope.inv.orderno = response.length+1;
       console.log(response);
      });

    Main.get_all_customers().then(function(response){
       $scope.cust = response;
       // $scope.inv.orderno = response.length+1;
       console.log(response);
      });

  $scope.selectedItemChanged_c = function(id, ind){
      // console.log(ind);
      // console.log(id);
      $scope.dta.address = 'CDO';
      // console.log($scope.items[ind].item_id)
      // console.log($scope.items[ind].item_id)
    }

  $scope.selectedItemChanged = function(id, ind){
      // console.log(ind);
      console.log($scope.inv.length)
      // console.log(id);
      for(var i=0;i<$scope.inv.length;i++){
        if($scope.inv[i].id == id){ 

          $scope.items[ind].item_description = $scope.inv[i].item_description;
          $scope.items[ind].lot_no = $scope.inv[i].lot_no;
          $scope.items[ind].unit = $scope.inv[i].unit;
          // $scope.items[ind].quantity = $scope.inv[i].quantity;
          $scope.items[ind].unit_price = $scope.inv[i].unit_cost;
          $scope.items[ind].expiry_date = $filter('date')($scope.inv[i].expiry_date, "M/yy");;
          $scope.items[ind].item_id = id;
          $scope.inv.splice(i, 1);

        }

      }
      console.log($scope.items[ind].item_id)
      // console.log($scope.items[ind].item_id)
    }



    $scope.calc = function(qty, price, dsct, ind){
      var percentage = dsct*.01
      var p_am = qty * price;
      var deduct = percentage * p_am
      // $scope.items[ind].total_amount = qty * price-percentage;
      $scope.items[ind].total_amount = p_am - deduct;
      // if(Math.sign($scope.items[ind].total_amount))
      // if($scope.items[ind].total_amount.includes("-")){
      //   console.log('naa')
      // }
      // console.log(dsct/.100);
      // $scope.calculates = function(){
      // if(!$scope.items[ind].total_amount){
      //   alert('No amount');
      // }
  $scope.disp_total_c = 0;

      for(var s = 0; s < ind+1;s++){
        console.log(flag)
        // disp_total += $scope.items[s].total_amount 
        $scope.disp_total_c += $scope.items[s].total_amount 
      }
      console.log($scope.disp_total_c);
      // $scope.disp_total_c = disp_total;
      $scope.disps = parseFloat(disp).toFixed(2);
          datas = {
        'disp' : parseFloat(disp).toFixed(2),
        'total' : parseFloat(disp_total).toFixed(2)
      }
      // } 

      disp = $scope.items[ind].total_amount;
      datas = {
        'disp' : parseFloat(disp).toFixed(2),
        'total' : parseFloat(disp_total).toFixed(2)
      }
        return datas;
  }

    $scope.submit = function(orderno){
    if(confirm("Click OK to submit.")){
      var data = {
        'details' : {
          'address' : $scope.dta.address,
          'customer' : $scope.dta.customer,
          'type' : $scope.dta.type,
          'orderno' : orderno,
          'date' : $filter('date')($scope.dta.date, "yyyy-MM-dd")
          // 'orderno' : $scope.inv.orderno,
        },
        'items' : $scope.items
      }

      var cons = {
        'orderno' : orderno
      }

      Main.get_sspecific_order(cons).then(function(response){
      console.log(response);
      if(!response || response == '0' || response == null || response == '' || response == 'null'){
      Main.issue_ris(data).then(function(response){
        if(response == 1){
                  $window.open(base_url+'/rjmed/Admin/print/'+orderno, '_blank');
          $scope.dta = {};
          $scope.items = [];
              window.location.reload();
        }else{
      swal("Please fill up all fields!", " ", "error");
      console.log(response);
        }
      });

      }else{
      swal("Sorry, Duplicate Order No!", "Kindly input new one.", "error");
        } 
       })
      }
    }

  $scope.get_specific_order = function(orderno){
    console.log(orderno);
    var data = {
      'orderno' : orderno
    }
    Main.get_specific_order(data).then(function(response){
      // console.log(response);
        if(!response || response == '0' || response == null || response == '' || response == 'null'){
        // alert('NOT FOUND. Please try again.')
        swal("Not Found", " ", "error");
        }else{
        $scope.search_on = response;
        }
    })
  }

  $scope.get_ss_orderno = function(tid){
    if(confirm("Click OK to submit.")){
      var data = {
          'id' : tid,
      }

      Main.delete_med(data).then(function(response){
        if(response == "true"){
          alert('The Data has been Deleted.');
                  window.location.reload();
        }else{
          // alert('ERROR! Something Wrong on adding Data!');
        swal("Error! Something was not right","", "error");

        }
      });
    }
  }

   $scope.printToCart = function(divName) {
  var printContents = document.getElementById(divName).innerHTML;
  var popupWin = window.open('', '_blank', 'width=300,height=300');
  popupWin.document.open();
  popupWin.document.write('<html><head><link rel="stylesheet" type="text/css" href="assets/css/table.css" /></head><body onload="window.print()">' + printContents + '</body></html>');
  popupWin.document.close();
}   
})

.controller('medCtrl', function($scope, Main, $window, $filter){
console.log('MedCtrl')
$scope.med = {};
$scope.meds_all = {};
$scope.e_meds = {};
$scope.add_st = {};
$scope.items = [];

$scope.rem = function(item){
  $scope.items.splice($scope.items.indexOf(item),1);
  console.log($scope.items);
  
}

$scope.s_in = function(){
  var data = {
    'lot_no' : $scope.med.lot_no,
    'item_description' : $scope.med.item_description,
    'quantity' : $scope.med.quantity,
    'unit_cost' : $scope.med.unit_cost,
    'sid' : $scope.med.sid,
    'stock_in' : $filter('date')($scope.med.stock_in, "yyyy-MM-dd"),
    'expiry_date' : $filter('date')($scope.med.expiry_date, "yyyy-MM-dd")
  }
$scope.items.push(data);
$scope.med.item_description = '';
$scope.med.lot_no = '';
$scope.med.unit_cost = '';
$scope.med.expiry_date = '';
$scope.med.quantity = '';
}



Main.get_meds().then(function(response){
  // console.log(response);
  $scope.meds = response;
})

$scope.get_spec_meds = function(id){
console.log(id)
var data = {
  'id' : id
}
 Main.get_spec_meds1(data).then(function(response){
  $scope.e_meds = response;
  $scope.e_meds.expiry_date = new Date($scope.e_meds.expiry_date);
  $scope.e_meds.stock_in = new Date($scope.e_meds.stock_in);
  console.log(response);
}) 
}


  $scope.add_stock = function(id){
    if(confirm("Click OK to add stocks.")){
      var data = {
          'quantity' : $scope.add_st.quantity,
          'item_id' : id,
          'stock_in' : $filter('date')($scope.add_st.add_stock_in, "yyyy-MM-dd")
      }

      console.log(data);
      if($scope.add_st.quantity == undefined || $scope.add_st.add_stock_in == undefined){
         alert('ERROR! Kindly fill up all fields!');
      }else{
        Main.add_stock(data).then(function(response){
          if(response == 1){
            console.log(response);
            alert('Success!!');
          // swal("Success","", "success");
           window.location.reload();
          }else{
            console.log(response);

            alert('ERROR!');
          // swal("Error! Something was not right","", "error");

          }
        });
      }
      $scope.add_st = {};
    }
    
  }

  $scope.add_med = function(){
    console.log($scope.items);
    if(confirm("Click OK to submit.")){
      var data = {
        'items' : $scope.items
      }
      Main.add_med(data).then(function(response){
        if(response == 1){
          alert('Success!!');
          window.location.reload();
        }else{
        swal("Error! Something was not right","", "error");
        }
      });
    }
    
  }

  $scope.edit_meds = function(id){
    if(confirm("Click OK to submit.")){
      var data = {
          'id' : id,
          'lot_no' : $scope.e_meds.lot_no,
          'item_description' : $scope.e_meds.item_description,
          'quantity' : $scope.e_meds.quantity,
          'unit_cost' : $scope.e_meds.unit_cost,
          'expiry_date' : $filter('date')($scope.e_meds.expiry_date, "yyyy-MM-dd"),
          'stock_in' : $filter('date')($scope.e_meds.stock_in, "yyyy-MM-dd")
      }

      Main.edit_meds(data).then(function(response){
      console.log(response);
        if(response == "true"){
          alert('Success!!');
          window.location.reload();
        }else{
          // alert('ERROR! Something Wrong on adding Data!');
        swal("ERROR! Something Wrong on adding Data!", "error");

        }
      });
    }
    
  }

  $scope.get_ss_med = function(tid){
    if(confirm("Click OK to submit.")){
      var data = {
          'id' : tid,
      }

      Main.delete_med(data).then(function(response){
        if(response == 1){
          alert('The medicine has been Deleted. The page will now load');
                  window.location.reload();
        }else{
        swal("Error! Something was not rig  ht","", "error");

        }
      });
    }
  }

})



.controller('orderCtrl', function($scope, Main, $window, $filter){
$scope.date_now = new Date();

var ord = 0;
console.log('orderCtrl')
$scope.med = {};
$scope.e_meds = {};
var tot = 0;
// $scope.spec_order = {};
  var base_url = 'http://' + window.location.hostname +':8080';


// $scope.spec_order = {};

Main.get_orders().then(function(response){
  console.log(response);
  $scope.orderss = response;
})

$scope.get_spec_meds = function(id){
console.log(id)
var data = {
  'id' : id
}
 Main.get_spec_meds1(data).then(function(response){
  $scope.e_meds = response;
  $scope.e_meds.expiry_date = new Date($scope.e_meds.expiry_date);
  console.log(response);
}) 
}

  $scope.add_med = function(){
    if(confirm("Click OK to submit.")){
      var data = {
          'lot_no' : $scope.med.lot_no,
          'item_description' : $scope.med.item_description,
          'quantity' : $scope.med.quantity,
          'unit_cost' : $scope.med.unit_cost,
          'expiry_date' : $filter('date')($scope.med.expiry_date, "yyyy-MM-dd")
      }

      console.log(data);

      Main.add_med(data).then(function(response){
        if(response == 1){
          alert('Success!!');
        // swal("Success","", "success");
                  window.location.reload();
                  // location.reload(); 
        }else{
          // alert('ERROR! Something Wrong on adding Data!');
        swal("Error! Something was not right","", "error");

        }
      });
    }
    
  }

  $scope.edit_meds = function(id){
    if(confirm("Click OK to submit.")){
      var data = {
          'id' : id,
          'lot_no' : $scope.e_meds.lot_no,
          'item_description' : $scope.e_meds.item_description,
          'quantity' : $scope.e_meds.quantity,
          'unit_cost' : $scope.e_meds.unit_cost,
          'expiry_date' : $filter('date')($scope.e_meds.expiry_date, "yyyy-MM-dd")
      }

      Main.edit_meds(data).then(function(response){
      console.log(response);
        if(response == "true"){
          alert('Success!!');
          window.location.reload();
        }else{
          // alert('ERROR! Something Wrong on adding Data!');
        swal("ERROR! Something Wrong on adding Data!", "error");

        }
      });
    }
  }

  $scope.get_specific_orders = function(id){
    ord = id;

     var id = {
       'orderno' : id
     }
     console.log(id)
      Main.get_join_orders(id).then(function(response){
      if(!response || response == '0' || response == null || response == '' || response == 'null'){
      // console.log(response);
      swal("Something went wrong", "error");

      }else{
      console.log(response);
      $scope.spec_order = response;
      for(var x = 0;x<$scope.spec_order.length; x++){
        var amt = $scope.spec_order[x];
        tot += parseFloat(amt.total_amount);

        console.log(amt.total_amount);
      }

        $scope.o_tot = parseFloat(tot).toFixed(2);
        console.log(tot);
        tot = 0;

      // swal("Sorry, Duplicate Order No!", "Kindly input new one.", "error");
        } 
      })
  }

  $scope.ret_stock = function(t_id2,mid,desc,qty,itemzs){
    // t_id = 
      var det = {
        'tid' : t_id2,
        'orderno': ord,
        'item_id' : mid,
        'desc' : desc ,
        'qty': qty,
        'date_edit' :  $filter('date')($scope.date_now, "yyyy-MM-dd")
      }
      
      console.log(det);
  
      swal({
        title: "You have succesfully deleted the medicine!",
        text: "Kindly click 'Ok' to reload, Thank you!",
        type: "success",
      })
      .then((value) => {
        Main.delete_order(det).then(function(response){
          if(response == 1){
            Main.edit_trans(det).then(function(rep){
          $scope.spec_order.splice($scope.spec_order.indexOf(itemzs),1);

              console.log(rep);
            })
            // alert('The Data has been Deleted.');
                    // window.location.reload();
          }else{
            // alert('ERROR! Something Wrong on adding Data!');
          swal("Error! Something was not right","", "error");
  
          }
        });
      });

  }

   $scope.print_fun = function(orderno){
     window.open(base_url+'/rjmed/Admin/print/'+orderno, '_blank');
   }
});
