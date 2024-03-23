<?php

class DepartmentsModel extends CI_Model
{
	public $table;
	public function __construct()
	{
		parent::__construct();
		$this->table['department'] = "app_company_departments";
	}

	public function get($columns = NULL, $where = NULL)
	{
		if (NULL !== $columns && count($columns) > 0) {
			$this->db->select($columns);
		}
		if (NULL !== $where && count($where) > 0) {
			$this->db->where($where);
		}

		return json_encode($this->db->get($this->table['department'])->result_array());
	}
}
