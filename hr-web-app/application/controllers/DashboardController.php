<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'core/My_controller.php');

class DashboardController extends my_controller
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
		$this->_auth_();
		$attendance = json_decode($this->AttendanceModel->get(NULL, ['app_id' => get_cookie("app_id"), "attendance_date" => date("y-m-d"), "emp_id" => "1"], NULL, "today"), true);
		if(count($attendance) > 0){
			$attendance = $attendance[0];
			$this->data["attendance"] = [
				"date" => $attendance["attendance_date"],
				"time_in" => $attendance["timepunchIn"],
				"time_out" => $attendance["timepunchOut"],
			];
		} else {
			$this->data["attendance"] = [
				"date" => date("y-m-d"),
				"time_in" => NULL,
				"time_out" => NULL,
			];
		}
		$this->data['page'] = [
			"title" => "Dashboard" . " - " . $this->COMPANY_NAME
		];
		// $this->data["attendance"]["punch_time"] = "10:02:30";
		$this->load->employee_dashboard("employee/home", $this->data);

		/*
		else
			LeavesModel->get(null, ['reporting' => $employee['id']]); 
			LeavesModel->count(null, ['reporting' => $employee['id']]); 
		*/
	}

	public function attendance()
	{
		$this->data["local"] = $this->session->userdata;
		$this->data['page'] = [
			"title" => "Timing, Attendance & Leaves" . " - " . $this->COMPANY_NAME
		];
		if(NULL != $this->input->get('userid')){
			$this->load->admin_dashboard("admin/attendance", $this->data);
		} else {
			$this->load->employee_dashboard("employee/attendance", $this->data);
		}
	}
	
	public function employees()
	{
		
	}

}
