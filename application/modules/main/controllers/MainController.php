<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . "core/MY_Controller.php";

class MainController extends MY_Controller
{
	public $error, $data;

	public function __construct()
	{
		parent::__construct();
		$this->error = [];
	}
	public function index()
	{
		$this->data['page'] = [
			'title' => "Choose Application" . " • " . APP_NAME
		];
		$this->load->mini_layout('home', $this->data);
	}

	public function login()
	{
		$this->data['page'] = [
			'title' => "Login Page" . " • " . APP_NAME
		];
		$this->load->mini_layout('login', $this->data);
	}
	public function register()
	{
		$formdata = $this->input->post();
	}
}
