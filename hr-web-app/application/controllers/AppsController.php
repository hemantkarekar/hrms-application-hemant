<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AppsController extends MY_Controller
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
