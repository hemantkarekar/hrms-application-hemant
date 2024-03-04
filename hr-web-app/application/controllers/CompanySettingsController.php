<?php
// 
class CompanySettingsController extends MY_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	}

	public function appSettings($setting)
	{
		switch ($setting) {
			case 'home':
				// echo "General Company Settings";
				$this->load->admin_dashboard('admin/settings/home');
				break;

			case 'general':
				$this->load->admin_dashboard('admin/settings/general');
				break;

			case 'attendance':
				$this->load->model("org_settings/HolidaysModel");
				$this->data['org_holidays'] = json_decode($this->HolidaysModel->get(["title", "from_date", "to_date"]), true);
				$this->load->admin_dashboard('admin/settings/attendance', $this->data);
				break;

			case 'payroll':
				$this->load->admin_dashboard('admin/settings/payroll');
				break;

			case 'salary':
				$this->load->admin_dashboard('admin/settings/salary');
				break;

			case 'employee':
				$this->load->admin_dashboard('admin/settings/employee');
				break;

			case 'documents':
				$this->load->admin_dashboard('admin/settings/documents');
				break;

			case 'roles':
				$this->load->admin_dashboard('admin/settings/roles');
				break;

			case 'templates':
				$this->load->admin_dashboard('admin/settings/templates');
				break;

			default:
				# code...
				break;
		}
	}
}
