<?php
defined('BASEPATH') or exit('No direct script access allowed');
class TestController extends CI_Controller
{
	public function experiment($slug)
	{
		switch ($slug) {
			case 'clock':
				$this->load->view('testing/clock');
				break;
			case 'server':
				echo "<pre>";
				print_r(get_cookie("app_id"));
				echo "</pre>";
				break;
			case 'excel':
				$this->load->model("reports/General_ReportsModel", "ReportsModel");
				$this->ReportsModel->generate("filename.xlsx");
				break;

			case 'json':
				$arr = array(
					array(
						'name' => "Sociomark",
						'logo' => FCPATH . 'uploads/clients_logo/sc-colored-horizontal.png', //uploads\clients_logo\
						'address' => "Vashi, Navi Mumbai",
						'gstin' => "82179317732474237842",
						'pan' => "HJJGG7865H",
						'tan' => "HJJGG7865H",
					),
					array(
						'name' => "Sociomark",
						'logo' => FCPATH . 'uploads/clients_logo/sc-colored-horizontal.png',
						'reg_address' => "Vashi, Navi Mumbai",
						'billing_address' => "Vashi, Navi Mumbai",
						'state' => "Maharashtra",
						'pincode' => "400703",
						'gstin' => "82179317732474237842",
						'pan' => "HJJGG7865H",
						'tan' => "HJJGG7865H",
					),
				);
				
				echo "<img src='" . $settings[0]['logo'] . "'/>";
				break;

			default:
				break;
		}
	}
}
