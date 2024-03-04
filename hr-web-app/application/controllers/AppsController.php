<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH . 'core/My_controller.php');

class AppsController extends My_Controller
{
	public $data;
	
	public function __construct()
	{
		parent::__construct();
	}

	public function calendar()
	{
		$this->load->employee_dashboard("apps/calendar", $this->data);
	}
}
