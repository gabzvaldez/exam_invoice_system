<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
			$this->load->view('pages/reports');
			$this->load->view('templates/footer');
		}else{
			redirect(base_url()."Main");
		}
	}

    public function reps()
    {
        if($this->session->userdata('is_logged_in') == 1 && $this->session->userdata('dept') == "budget"){
            $data['session_data'] = array(
                'dept' => $this->session->userdata('dept')
            );
            $this->load->view('templates/header',$data);
            $this->load->view('pages/generate');
            $this->load->view('templates/footer');
        }else{
            redirect(base_url()."Main");
        }
    }
   
    public function daily_report_meds()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        // var_dump($_POST['eid']);
        // $line = $_POST['re'];
        // $fund = $_POST['fund_source'];
        // $nf = new Date($_POST['datefrom']);
        // $nt = new Date($_POST['dateto']);
        $res = $this->leave_model->daily_report_meds($_POST['datefrom'], $_POST['dateto']);
        // echo json_encode(date('Y-m-d',strtotime($_POST['dateto'] . "+1 days")));
        echo json_encode($res);
    }

    public function daily_report_meds_stock_in()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        // var_dump($_POST['eid']);
        // $line = $_POST['re'];
        // $fund = $_POST['fund_source'];
        // $nf = new Date($_POST['datefrom']);
        // $nt = new Date($_POST['dateto']);
        $res = $this->leave_model->daily_report_meds_stock_in($_POST['datefrom'], $_POST['dateto']);
        // echo json_encode(date('Y-m-d',strtotime($_POST['dateto'] . "+1 days")));
        echo json_encode($res);
    }

    public function daily_report1()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        $res = $this->leave_model->daily_report_stocks($_POST['datefrom'], $_POST['dateto']);
        echo json_encode($res);
    }

    public function daily_report_financial()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);

        $res = $this->leave_model->daily_report_financial($_POST['datefrom'], $_POST['dateto']);
        // echo json_encode(date('Y-m-d',strtotime($_POST['dateto'] . "+1 days")));
        echo json_encode($res);
    }

    public function monthly_report_financial()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);

        $res = $this->leave_model->monthly_report_financial($_POST['year']);
        // echo json_encode(date('Y-m-d',strtotime($_POST['dateto'] . "+1 days")));
        echo json_encode($res);
    }

    public function yearly_report_financial()
    {

        $res = $this->leave_model->yearly_report_financial();

        echo json_encode($res);
    }

    public function monthly_report_meds()
    {
        $_POST = json_decode(file_get_contents('php://input'),true);
        if($_POST['year'] == '2020'){
            $datefrom = '2020-01-01';
            $dateto = '2020-12-31';
        }elseif($_POST['year'] == '2021') {
            $datefrom = '2021-01-01';
            $dateto = '2021-12-31';
        }elseif($_POST['year'] == '2022') {
            $datefrom = '2022-01-01';
            $dateto = '2022-12-31';
        }
        $res = $this->leave_model->monthly_report_meds($datefrom,$dateto);
        echo json_encode($res);
    }
    
}
