<?php

class RequestsController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function home(){
		// $this->load->employee_dashboard('employee/requests/home');
		$this->load->admin_dashboard('admin/requests/home');
	}
}
