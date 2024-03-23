<?php

class CoreCompanySettingsModel extends CI_Model
{
	public $table, $app_id;
	public function __construct()
	{
		parent::__construct();
		$this->table['company_settings'] = "app_company_settings";
	}

	public function company_settings($app_id){
		$this->db->where(["app_id" => $app_id]);
		return json_encode($this->db->get($this->table['company_settings'])->result_array());
	}
}

