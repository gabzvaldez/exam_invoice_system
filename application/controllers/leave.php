<?php
 
class Leave extends CI_Controller {
 
    function __construct() {
        parent::__construct();
            header('Access-Control-Allow-Origin: *');
            Header('Access-Control-Allow-Headers: *');
             header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $this->load->model('leave_model');
        $this->load->library('Csvimport');
        $this->load->helper('date');
       $this->load->helper('url');
        $this->load->library('session');    

        // $this->load->model('_model');
    }
 
    function index() 
    {
        $this->load->view('index');
    }

    public function issue_ris()
    {
        $data = json_decode(file_get_contents('php://input'),true);
        $count = count($data['items']);
        // $count = count((array) $data['items']);
        // if (is_array($c)) {
        //             $count = count($c);
        //             // return $obj;
        //        } else {
        //         // return $obj;
        //         $count = 0;
        //        }
        // print_r($count);

        
        for($i=0; $i<$count; $i++) {
            $data2 = array(
                'item_id' => $data['items'][$i]['item_id'],
                'customer' => $data['details']['customer'],
                'orderno' => $data['details']['orderno'],
                'address' => $data['details']['address'],
                'type' => $data['details']['type'],
                'date' => $data['details']['date'],
                'total_amount' => $data['items'][$i]['total_amount'],
                'qty_issued' => $data['items'][$i]['qty_issued'],
                'discount' => $data['items'][$i]['discount']
            );

                 $medsz = $this->leave_model->get_spec_meds($data['items'][$i]['item_id']);
                 $rem =  $medsz->quantity-$data['items'][$i]['qty_issued'];
                // //  var_dump($medsz);
                 $q = $this->leave_model->update_quantity($data['items'][$i]['item_id'],$rem);
                 $result = $this->leave_model->insert_transaction($data2);
        }
        echo json_encode($result);
    }

    public function add_stock()
    {
        $data = json_decode(file_get_contents('php://input'),true);

        $result = $this->leave_model->add_stock($data);
        if($result != null){
            $medsz = $this->leave_model->get_spec_meds($data['item_id']);
            $res = $medsz->quantity+$data['quantity'];
            $res2 = $this->leave_model->update_quantity($data['item_id'],$res);
            // echo json_encode($res);
            if($res2 != null){
            echo json_encode($result);
            }else{
            echo json_encode($result);
            }
        }else{
            echo json_encode($result);
        }

         // $rem =  $medsz->quantity-$data['items'][$i]['qty_issued'];
        // //  var_dump($medsz);
         // $q = $this->leave_model->update_quantity($data['items'][$i]['item_id'],$rem);
         // $result = $this->leave_model->insert_transaction($data2);
    
    }

    public function add_med()
    {
        $data = json_decode(file_get_contents('php://input'),true);
        $count = count($data['items']);
        $unit_cost = 0;
            // $data2 = array(
            //     'lot_no' => $data['lot_no'],
            //     'item_description' => $data['item_description'],
            //     'expiry_date' => $data['expiry_date'],
            //     'quantity' => $data['quantity'],
            //     'unit_cost' => $data['unit_cost'],
            //     'sid' => $data['sid'],
            //     'stock_in' => $data['stock_in']
            // );
            
            // $result = $this->leave_model->add_med($data2);
            // echo json_encode($result);
            for($i=0; $i<$count; $i++) {
                        $data2 = array(
                            'lot_no' => $data['items'][$i]['lot_no'],
                            'item_description' => $data['items'][$i]['item_description'],
                            'expiry_date' => $data['items'][$i]['expiry_date'],
                            'quantity' => $data['items'][$i]['quantity'],
                            'unit_cost' => $unit_cost,
                            'sid' => $data['items'][$i]['sid'],
                            'stock_in' => $data['items'][$i]['stock_in']
                        );
                    $result = $this->leave_model->add_med($data2);
                    }
                    echo json_encode($result);
    }

    public function get_specific_order()
    {
        $data = json_decode(file_get_contents('php://input'),true);
        
            $result = $this->leave_model->get_specific_order($data['orderno']);
        echo json_encode($result);
    }

    public function get_sspecific_order()
    {
        $data = json_decode(file_get_contents('php://input'),true);
        
            $result = $this->leave_model->get_sspecific_order($data['orderno']);
        echo json_encode($result);
    }

    public function edit_meds()
    {
        $data = json_decode(file_get_contents('php://input'),true);

            $data2 = array(
                'lot_no' => $data['lot_no'],
                'item_description' => $data['item_description'],
                'expiry_date' => $data['expiry_date'],
                'quantity' => $data['quantity'],
                'stock_in' => $data['stock_in'],
                'unit_cost' => $data['unit_cost']
            );
            $result = $this->leave_model->edit_meds($data['id'],$data2);
            echo json_encode($result);
    }

    public function get_spec_meds()     
    {
        $data = json_decode(file_get_contents('php://input'),true);

            $result = $this->leave_model->get_spec_meds($data['id']);
        echo json_encode($result);
    }

    public function delete_med()     
    {
        $data = json_decode(file_get_contents('php://input'),true);

        $result = $this->leave_model->delete_med($data['id']);
        echo json_encode($result);
    }

    public function get_all_inventory()
    {
        $result = $this->leave_model->get_inventory();
        echo json_encode($result);  
    }

    public function get_all_customers()
    {
        $result = $this->leave_model->get_customers();
        echo json_encode($result);  
    }

    public function get_meds(){
        $result = $this->leave_model->get_meds();
        echo json_encode($result);
    }

    public function get_meds_all(){
        $result = $this->leave_model->get_meds_all();
        echo json_encode($result);
    }

    public function get_orders(){
        $result = $this->leave_model->get_order();
        echo json_encode($result);
    }

    public function get_join_orders(){
        $data = json_decode(file_get_contents('php://input'),true);
        $orderno = $data['orderno'];
        // $orderno = '1';
        $result = $this->leave_model->get_orders($orderno);
        echo json_encode($result);
    }

    public function all_get_orders(){
        $result = $this->leave_model->get_orderss();
        echo json_encode($result);
    }

    public function get_transaction()
    {
        $result = $this->leave_model->get_transaction();
        echo json_encode($result);  
    }

    public function daily_report_financial()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        $df = $_POST['datefrom'];
        $dt = $_POST['dateto'];
        $result = $this->leave_model->daily_report_financial($df,$dt);
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function report_2()
    {
        // $_POST = json_decode(file_get_contents('php://input'),true);
        // var_dump($_POST['eid']);
        // $result = $_POST['tid'];
        $result = $this->leave_model->report_2();
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function daily_report_meds()
    {
        $result = $this->leave_model->get_emp();
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function get_accs()
    {
        $result = $this->leave_model->get_accs();
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function delete_order()     
    {
        $data = json_decode(file_get_contents('php://input'),true);

            $result = $this->leave_model->delete_orderno($data['tid']);
        // $result = 1;
        echo json_encode($result);
    }

    public function edit_trans()
    {
        $data = json_decode(file_get_contents('php://input'),true);
        $data['item_id'];
        $daten = $data['date_edit'];
        $arr_d = array(
            'item_id'  => $data['item_id'],
            'quantity' => $data['qty'],
             'orderno' => $data['orderno'],
             'date_edit' => $daten,
             'desc' => $data['desc']
        );
        

            $qty_old = $this->leave_model->get_spec_meds_qty($data['item_id']);
            $qty_olds = $qty_old->quantity;
            $sum_qty = $qty_olds + $data['qty'];

            $res2 = $this->leave_model->update_quantity($data['item_id'],$sum_qty);
            $res3 = $this->leave_model->insert_logs($arr_d);

            // $result = $this->leave_model->edit_meds($data`['id'],$data2);
            // echo $daten;
            if($res2 != null){
                echo json_encode($res2);
                }else{
                echo json_encode($res2);
                }
    }
    public function edit_bregistry(){
        $_POST = json_decode(file_get_contents('php://input'),true);   
             
         if($_POST['DISBURSEMENT'] == NULL && $_POST['UNPAID_OBLIGATIONS'] == NULL){
            $DISBURSEMENT = 0;
            $UNPAID_OBLIGATIONS = 0;
         }elseif($_POST['DISBURSEMENT'] == NULL && $_POST['UNPAID_OBLIGATIONS'] != NULL){
            $DISBURSEMENT = 0;
            $UNPAID_OBLIGATIONS = $_POST['UNPAID_OBLIGATIONS'];
         }elseif($_POST['DISBURSEMENT'] != NULL && $_POST['UNPAID_OBLIGATIONS'] == NULL){
            $DISBURSEMENT = $_POST['DISBURSEMENT'];
            $UNPAID_OBLIGATIONS = 0;
         }else{
            $DISBURSEMENT = $_POST['DISBURSEMENT'];
            $UNPAID_OBLIGATIONS = $_POST['UNPAID_OBLIGATIONS'];
         }

         $data = array(
            'PROGRAMS' => $_POST['PROGRAMS'],
            'DATE' => $_POST['DATE'],
            'MONTH_OBLIGATED' => $_POST['MONTH_OBLIGATED'],
            'OBR_NUM' => $_POST['OBR_NUM'],
            'CREDITOR' => $_POST['CREDITOR'],
            'ACCOUNT_TITLE' => $_POST['ACCOUNT_TITLE'],
            'ACCOUNT_CODE' => $_POST['ACCOUNT_CODE'],
            'OBLIGATION' => $_POST['OBLIGATION'],
            'DISBURSEMENT' => $DISBURSEMENT,
            'UNPAID_OBLIGATIONS' => $UNPAID_OBLIGATIONS,
            'MONTH_DISBURSED' => $_POST['MONTH_DISBURSED'],
            'FUND_SOURCE' => $_POST['FUND_SOURCE'],
            'LINE' => $_POST['LINE'],
            'ACT_TITLE' => $_POST['ACT_TITLE'],
            'REMARKS' => $_POST['REMARKS']);
                  
             $this->leave_model->edit_bregistry($data);  
    }

}
/*END OF FILE*/
