<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class MY_Controller extends CI_Controller
{
	public $COMPANY_NAME, $APP_ID = "", $IP;
	public function __construct()
	{
		parent::__construct();
		$this->COMPANY_NAME = "Sociomark";
		$this->IP = "114.79.151.88";
		if (!is_https()) {
			$this->session->set_flashdata('http_error', 'Please change url to HTTPS!!');
		}
		$this->APP_ID = get_cookie("app_id", true);
        $this->APP_STORAGE = directory_size(FILE_UPLOAD_FOLDER);
		
        if(!isset($_SESSION[USERSESSION])){
			$this->SESSION = $_SESSION[USERSESSION];
			$this->SESSION['name'] = implode(" ", [$this->SESSION['first_name'], $this->SESSION['last_name']]);
            redirect('login');
        } else {
            $this->data['active_user'] = $this->SESSION;
            $this->data["APP_STORAGE"] = $this->APP_STORAGE;
        }
	}
	public function _auth_(){
		$app_id = get_cookie("app_id", true);
		if(( $app_id == null) || ($app_id == "")) {
			redirect(base_url('login')) ;
		} else {
			return $app_id;
		}
		foreach ($variable as $key => $value) {
			# code...
		}
	}

	public function get_ip_info(){
		$this->load->model('core/IPLocationModel');
		return $this->IPLocationModel->get($this->IP);
	}
}
