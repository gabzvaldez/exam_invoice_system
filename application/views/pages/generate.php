 <div ng-controller="StudentController">

<div class="container">
  <input class="form-control" type="text" ng-model="hanap" list="names" required>
    <datalist id="names" class="form-control hidden" ng-model="obrs_program.OBR_NUM">
      <!-- <option value=''>-- select an option --</option> -->
      <option ng-repeat="obr in obr | filter:hanap | limitTo:10" value="{{obr.OBR_NUM}}">{{obr.PROGRAMS}} || {{obr.OBLIGATION}}</option>
    </datalist>
</div>
<!--   <div  id="printSectionId2">
        <div ng-if="search.report == 'obligation' && search.quarter == '1stq'">
        <h4>OBLIGATIONS OF ACCOUNT TITLE PER PROGRAM</h4>
        </div>
        <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: #173F5F;
    color: white;">
          <tr>
            <th>Account Title</th>
            <th>JANUARY</th>
            <th>FEBRUARY</th>
            <th>MARCH</th>
            <th>GRAND TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="item in report_per_acc_title.val">
            <td>{{item.account_title}}</td>
            <td>{{item.JAN | number : 2}}</td>
            <td>{{item.FEB | number : 2}}</td>
            <td>{{item.MAR | number : 2}}</td>
            <td style="font-weight: bold;">{{item.GRAND_TOTAL | number : 2}}</td>
          </tr>
          <tr>
             <td class="hidden-print"></td> 
            <td>GRAND TOTAL</td>
            <td style=" font-weight: bold;">{{jan_gt | number : 2}}</td>
            <td style=" font-weight: bold;">{{feb_gt | number : 2}}</td>
           <td style=" font-weight: bold;">{{mar_gt | number : 2}}</td>
           <td style=" font-weight: bold;">{{fst_gt | number : 2}}</td>
          </tr>
        </tbody>
      </table>  -->
<!--     <table class="table">
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
  <!-- </div> -->

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
      <button ng-click="printToCart('printSectionId2')" class="button">Print</button>
      <!-- <input type="button" value="Print" onclick="PrintElem('#yourdiv')" /> -->

<script>
    // document.getElementById('sketchpad-post').value = "";
    //     function PrintElem(elem)
    // {
    //     Popup($(elem).html());
    // }

    // function Popup(data)
    // {
    //     var mywindow = window.open('','_blank', 'new div', 'height=400,width=600');
    //     mywindow.document.write('<html><head><title>my div</title>');
    //     mywindow.document.write('<html><head><link rel="stylesheet" type="text/css" href="../assets/css/table.css" media="print"/></head><body onload="window.print()">' + data + '</html>');
    //     mywindow.document.write('</body></html>');

    //     mywindow.print();
    //     mywindow.close();
    //     return true;
    // }
</script>
        </div>
</div> 