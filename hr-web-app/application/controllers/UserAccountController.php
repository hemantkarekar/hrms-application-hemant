<?php

class UserAccountController extends My_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->data['globals']['app_id'] = $this->_auth_();
	}

	public function  profile()
	{
		$this->data["panel"] = [
			'admin_access' => false
		];
		if (NULL !== $this->input->get('employee_id')) {
			$this->data["panel"] = [
				'admin_access' => true
			];
		}
		$this->load->employee_dashboard('employee/profile', $this->data);
	}
}
