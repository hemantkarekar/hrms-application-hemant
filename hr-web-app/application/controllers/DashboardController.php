<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'core/My_controller.php');

class DashboardController extends My_Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->data['globals']['app_id'] = $this->_auth_();
		$this->load->model("attendance/AttendanceModel", "AttendanceModel");
	}

	public function index()
	{
		/*
		$user = $this->session->get_userdata();
		$employee = UserModel->get(['username' => $user['username]]);
		EventsModel->get(); 
		HolidaysModel->get(); 
		if($user['app_role'] == "admin"){
			LeavesModel->get(); 
		*/
		$attendance =json_decode($this->AttendanceModel->get(NULL, ['app_id' => get_cookie("app_id"), "attendance_date" => date("y-m-d"), "emp_id" => "1"], NULL, "today"), true)[0];
		$this->data["attendance"] = [
			"date" => $attendance["attendance_date"],
			"time_in" => $attendance["timepunchIn"],
			"time_out" => $attendance["timepunchOut"],
		];
		// $this->data["attendance"]["punch_time"] = "10:02:30";
		$this->load->employee_dashboard("admin/home", $this->data);

		/*
		else
			LeavesModel->get(null, ['reporting' => $employee['id']]); 
			LeavesModel->count(null, ['reporting' => $employee['id']]); 
		*/
	}

	public function attendance()
	{
		die;
		if(NULL != $this->input->get('userid')){
			$this->load->admin_dashboard("admin/attendance", $this->data);
		} else {
			$this->load->employee_dashboard("admin/attendance", $this->data);
		}
	}
}
