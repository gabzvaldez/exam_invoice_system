<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            // $this->load->model('admin_model');
            // $this->load->model('meds_model');
            // $this->load->model('consignee_model');
            // $this->load->model('users_model');
            $this->load->model('leave_model');
            // Your own constructor code
    }

	public function index()
	{
		if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == "admin"){

            $data['role'] = $this->session->userdata('role');

			$this->load->view('templates/header',$data);
			$this->load->view('pages/home');
			$this->load->view('templates/footer');
		}else{
			redirect(base_url()."Main");
		}
	}

    public function add_order()
    {
        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == "admin"){

            $data['role'] = $this->session->userdata('role');

            $this->load->view('templates/header',$data);
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url()."Main");
        }
    }

    public function orders()
    {
        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == "admin"){
            
            $data['role'] = $this->session->userdata('role');

            $this->load->view('templates/header',$data);
            $this->load->view('pages/orders');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url()."Main");
        }
    }

    public function print($orderid){
        // var_dump($this->session->all_userdata());
        $total_meds = 0;
        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == 'admin'){
            // $data['session_data'] = array(
            //     'dept' => $this->session->userdata('dept')
            // );

          $result['orderid'] = $orderid;
            $result['content'] = $this->leave_model->get_orders($orderid);
            $c = count($this->leave_model->get_orders($orderid));
            $result['counts'] = 20-$c;

        for($i = 0; $i < count($result['content']); $i++){
           $product = $result['content'][$i];
            $total_meds += $product->total_amount;
          }
          $result['x'] = $total_meds;
          // $x1 = date('m/d/Y', strtotime('-1 day', strtotime($result['content'][0]->date)));
          // $x1 = $result['content'][0]->date;

          // var_dump($x1);
            $this->load->view('pages/print',$result);
            
        }else{
            redirect(base_url('main/'));
        }
    }

    public function edit_order($orderid){
        // var_dump($this->session->all_userdata());
        $total_meds = 0;
        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == 'admin'){
            // $data['session_data'] = array(
            //     'dept' => $this->session->userdata('dept')
            // );

         $result['orderid'] = $orderid;
        $result['content'] = $this->leave_model->get_orders($orderid);

        for($i = 0; $i < count($result['content']); $i++){
           $product = $result['content'][$i];
            $total_meds += $product->total_amount;
          }
          $result['x'] = $total_meds;
         // var_dump($result['content']);
            $this->load->view('templates/header');
            $this->load->view('pages/edit_order',$result);
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }
    }


    public function add_cregistry(){
        // var_dump($this->session->all_userdata());

        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('dept') == 'cashier'){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/add_cregistry');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }


    }

    public function medicines(){
        // var_dump($this->session->all_userdata());
            $data['role'] = $this->session->userdata('role');

        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == 'admin'){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/medicines');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }


    }

    public function medicines_stock_in(){
        $data['role'] = $this->session->userdata('role');

        // var_dump($this->session->all_userdata());
        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == 'admin'){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/medicines_in');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }


    }
    public function reports(){
        // var_dump($this->session->all_userdata());

        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('role') == 'admin'){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/reports');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }

    }

    public function gen_reports(){
        // var_dump($this->session->all_userdata());

        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('dept') == 'budget'){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/gen_reports');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }

    }

    public function add_bregistry(){
        // var_dump($this->session->all_userdata());

        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('dept') == 'budget'){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/add_bregistry');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }

    }

    public function search_list($tid){
        // var_dump($this->session->all_userdata());

        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('dept') == 'budget'){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );

          $result['tid'] = $tid;
             $result['content'] = $this->leave_model->get_trans_id($tid);

            var_dump($result['content']);
            $this->load->view('templates/header', $data);
            $this->load->view('pages/edit_bregistry',$result);
            $this->load->view('templates/footer');
        }else{
            redirect(base_url('main/'));
        }
    }

    public function add_disbursement(){
    // var_dump(, , );
    $data = array(
        'tid' =>  $_POST['tid'],
        'disbursement' => $_POST['disbursement'],
        'month_disbursed' => $_POST['month_disbursed']
        );

    // var_dump($data);
        $result = $this->leave_model->add_disbursement($data);
        // var_dump($data['disbursement']);
        // if($result != 1){
            echo "<script>
                    alert('Success Receiving Document!!');
                    window.location.href = '" . base_url() . "Admin/search_list/".$_POST['tid']."';
                    </script>";
        // }

    }

    public function add_budget(){
    $data =array(
                'DATE' =>  $this->session->userdata('id'),
                'MONTH_OBLIGATED' =>  date("Y-m-d", strtotime($this->input->post('datefile'))),
                'OBR_NUM' => $this->input->post('datefrom'),
                'CREDITOR' => $this->input->post('dateto'),
                'PROGRAMS' => $this->input->post('type'),
                'ACCOUNT_TTILE' => $this->input->post('reason1'),
                'ACCOUNT_CODE' => $this->input->post('reason1'),
                'OBLIGATION' => $this->input->post('reason1'),
                'DISBURSEMENT' => $this->input->post('reason1'),
                'MONTH_DISBURSED' => $this->input->post('reason1'),
                'UNPAID_OLBIGATIONS' => $this->input->post('reason1'),
                'REMARKS' => $this->input->post('reason1')
            );

    // var_dump($data);
    }
	public function get_emp()
    {
        $result = $this->leave_model->get_emp();
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function get_trans()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        $divi = $_POST['division'];
        $section = $_POST['section'];
        // echo json_encode($eidd);
        // var_dump($eidd);
        $result = $this->leave_model->get_trans1($divi,$section);
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function get_leave_id()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        $eidd = intval($_POST['eid']);
        $result = $this->leave_model->get_leave_by_id($eidd);
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }


    public function get_trans_id()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        // var_dump($_POST['eid']);
        // $result = $_POST['tid'];
        $result = $this->leave_model->get_trans_id($_POST['cid']);
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function get_program()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        // var_dump($_POST['eid']);
        // $result = $_POST['tid'];
        $result = $this->leave_model->get_program($_POST['cluster'],$_POST['division']);
        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }

    public function update_act_title()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        // $Payee = $_POST['Payee'];
        // $id = $_POST["eid"];
        $val = $_POST["ACT_TITLE"];
        // $val = intval($_POST["ACT_TITLE"]);
        $cid = $_POST["cid"];
        $result = $this->leave_model->update_act_title($val,$cid);

        if($result != null){
            echo json_encode($result);
        }else{
            echo json_encode($result);
        }
    }
}
