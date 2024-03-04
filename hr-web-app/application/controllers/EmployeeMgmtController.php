<?php

class EmployeeMgmtController extends My_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->data['globals']['app_id'] = $this->_auth_();
		$this->load->model("attendance/AttendanceModel", "AttendanceModel");
	}

	public function home()
	{
		$this->data['page'] = [
			"title" => "Employee Management" . " - " . $this->COMPANY_NAME
		];
		$this->load->admin_dashboard("admin/employee/employees_list", $this->data);
	}

	public function  all_departments() {
		$this->data['page'] = [
			"title" => "All Departments" . " - " . $this->COMPANY_NAME
		];
		$this->load->admin_dashboard("admin/employee/all_departments", $this->data);
	}
	public function  add_department() {}
	public function  all_designations() {
		$this->data['page'] = [
			"title" => "All Designations" . " - " . $this->COMPANY_NAME
		];
		$this->load->admin_dashboard("admin/employee/all_designations", $this->data);
	}
	public function  add_designation() {}




	public function new_employee()
	{
		$this->data['control_options'] = [
			'fields' => ["first_name", "middle_name", "last_name", "email", "mobile", "dob", "gender", "photo"]
		];
		$this->data['page'] = [
			"title" => "All Employees" . " - " . $this->COMPANY_NAME
		];
		$this->load->admin_dashboard("admin/employee/new_employee", $this->data);
	}
	public function new_bulk_employee()
	{
		$this->data['control_options'] = [
			'fields' => ["first_name", "middle_name", "last_name", "email", "mobile", "dob", "gender", "photo"]
		];
		$this->data['page'] = [
			"title" => "All Employees" . " - " . $this->COMPANY_NAME
		];
		$this->load->admin_dashboard("admin/employee/bulk_add", $this->data);
	}

	public function add_action_status($status)
	{
		switch ($status) {
			case 'success':
				$this->load->admin_dashboard("status/employee_add_success", $this->data);
				break;

			default:
				# code...
				break;
		}
	}

	/*
	$_FILE = Array ( [name,type,tmp_name,error,size])  
	*/
	public function single_document_upload()
	{
		$config['upload_path']          = './documents/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;

		print_r($_FILES);
		print_r($this->input->post());
	}
	public function bulk_upload()
	{
		$config['upload_path']          = './temporary/';
		$config['allowed_types']        = 'csv';
		$config['max_size']             = 100;

		print_r($_FILES);
		print_r($this->input->post());
	}
}
