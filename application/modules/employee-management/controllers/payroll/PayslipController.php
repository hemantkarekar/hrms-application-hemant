<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . "core/MY_Controller.php";

class PayslipController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->error = [];

		$this->load->model('payroll/AttendanceModel');
		$this->load->model('UserModel', 'EmployeeModel');

		$this->load->library('calculators/Attendance');
	}

	public function index(){
		print_r($this->encryption->encrypt(json_encode(
			[
				'employee_id' => 95,
				'period' => "202509",
			]
		)));
		
	}


	public function download_single($employee_id)
	{
		$attendance = json_decode($this->AttendanceModel->get_attendance_of_employee($employee_id, "09"), true);
		$employee = json_decode($this->EmployeeModel->get(['status' => 1, 'id' => $employee_id]), true);
		echo "<pre>";
		print_r($employee);
		$payroll = $this->attendance->initiate($employee, $attendance)->process("09-25")->payroll;
		print_r($payroll);
		die;
		$this->data['payroll'] = [
			'attendance' => $attendance,
		];
		$this->load->admin_dashboard('payroll/payslips', $this->data);
	}
}
