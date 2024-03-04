<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'core/My_controller.php');

class AuthController extends My_Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("UserModel");
		$this->load->model("website/EnquiriesModel");
	}

	public function login()
	{
		$this->load->mini_layout("auth/login", $this->data);
	}

	public function authenticate()
	{
		$form_data = $this->input->post();

		$user = json_decode($this->UserModel->get(NULL, ["email" => $form_data["email_emp_id"]]), true)[0];

		$_SESSION["local"]["user"] = $user;

		if (password_verify($form_data["password"], $user["password"])) {
			set_cookie("app_id", $user["app_id"], 60000);
			// $this->UserModel->update(['status' => 1],["email" =>$form_data["email_emp_id"]]);
			$this->session->set_flashdata('first_user', true);
			redirect('dashboard');
		} else {
			redirect('login');
		}
	}

	public function register()
	{
		$key = random_string('alnum', 16);
		$key_expires = date('Y-m-d h:i:s', strtotime("+1 day"));
		$data = [
			"full_name"	=> $this->input->post("full_name"),
			"organization_name" => 	$this->input->post("organization_name"),
			"contact_number" => $this->input->post("contact_number"),
			"work_email" =>	$this->input->post("work_email"),
			"max_employees" => $this->input->post("max_employees"),
			"email_validated" => 0,
			"email_validate_key" => $key,
			"email_validate_key_expires" => $key_expires,
		];
		$entry = json_decode($this->UserModel->get(['app_id'], ['email' => $data['work_email']]), true);
		if (count($entry) > 0) {
			$entry = $entry[0];
			set_cookie("app_id", $entry["app_id"], 60000);
			redirect('settings/app-settings/home');
		} else {
			if ($this->EnquiriesModel->create($data)) {
				$status = [
					'code' => "200",
					'data' => [
						"email_validate_key" => $key,
						"email_validate_key_expires" => $key_expires,
					]
				];
			} else {
				$status = [
					'code' => "500",
				];
			}
			$this->session->set_tempdata('signup_status', $status);
			redirect('signup');
		}
	}

	public function resend_key()
	{
		$result = json_decode($this->EnquiriesModel->get(['id'], ['work_email' => $this->input->post('work_email')]), true);
		if (count($result) > 0) {
			$result = $result[0];
			$key = random_string('alnum', 16);
			$key_expires = date('Y-m-d h:i:s', strtotime("+1 day"));
			$data = [
				"email_validated" => 0,
				"email_validate_key" => $key,
				"email_validate_key_expires" => $key_expires,
			];
			if ($this->EnquiriesModel->update($data, ['id' => $result['id']])) {
				redirect('onboarding/home?key=' . $key);
			} else {
				echo "ERROR";
			}
		}
	}
}
