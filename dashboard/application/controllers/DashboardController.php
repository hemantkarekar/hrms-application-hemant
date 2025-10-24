<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . "core/MY_Controller.php";

class DashboardController extends MY_Controller
{
	public $error;

	public function __construct()
	{
		parent::__construct();
		$this->error = [];
	}
	public function index()
	{
		$this->load->model('events/GeneralEventsModel');
		$this->load->model('payroll/AttendanceModel');

		$birthdays = json_decode($this->GeneralEventsModel->get_birthdays(), true);
		$anniversaries = json_decode($this->GeneralEventsModel->get_anniversaries(), true);

		$attendance = json_decode($this->AttendanceModel->get_attendance_of_employee(95, "09"), true);
		$this->data = [
			'page' => [
				'title' => "Dashboard" . " • " . $this->COMPANY_NAME ?? APP_NAME
			],
			'payroll' => [
				'attendance' => $attendance,
			],
			'events' =>[
				'birthdays' => $birthdays,
				'anniversaries' => $anniversaries,
			]
		];
        $this->load->admin_dashboard('index', $this->data);
    }

	public function login()
	{
		$this->data = [
			'page' => [
				'title' => "Login Page" . " • " . $this->COMPANY_NAME ?? APP_NAME
			]
		];
		$this->load->view('pages/login', $this->data);
	}
	public function register()
	{
		$formdata = $this->input->post();
	}

	public function qrcode_render()
	{
		$data  = [];
		// $this->encryption->initialize(
		// 	array(
		// 		'cipher' => ENCRYPTION_ALGO,
		// 		'mode' => ENCRYPTION_MODE,
		// 	)
		// );
		try {
			$plain_text = 'This is a plain-text message!';
			// $ciphertext = $this->encryption->encrypt($plain_text);

			// echo $ciphertext . "<br>";
			echo $this->encryption->decrypt("4f3a26d0b0fb60b6a1958caa1386578afc33dff5181e6c6ccbbf7121308ddc39b8e61ce052b6f6e8f0ae8447828bdca1679dc84f5dfb6cd47080d63897884e1cSTiaDf8XdMWZWpRUBYr5NN7rauJpE7gUVXyhjj7auDDH/RRswNL86TVA43yc500E");
		} catch (Exception $th) {
			$this->error['status'] = 'failed';
			$this->error['code'] = 'InvalidKeyError';
			$this->error['message'] = 'The Key passed does not match with the records or is expired!';
		}
		try {
			$this->load->library('QRCodeLib');
			$image = $this->qrcodelib->render($this->input->post('url'));

			$data['status'] = "success";
			$data['qrcode'] = $image;
		} catch (Exception $ex) {
			$this->error['status'] = 'failed';
			$this->error['code'] = 'InvalidData';
			$this->error['message'] = 'The Data Passed does not match with the records!';

			return $this->error;
		}

		if ($data['status'] == 'success') {
			echo "<img src='" . $data['qrcode'] . "' width='300'/>";
		} else {
			print_r(json_encode($this->error));
		}
	}
}
