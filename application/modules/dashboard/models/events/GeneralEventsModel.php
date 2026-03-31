<?php

class GeneralEventsModel extends CI_Model
{
    private $current_day;
    public function __construct()
    {
        $this->current_day = date('d');
    }
    public function get_birthdays($month = NULL)
    {
        $month = date('m');
        
        $this->db->select('*');
        $this->db->from('app_company_employees');

        if ($month == NULL || $month == "current") {
            $this->db->where('DAYOFMONTH(dob) >=', $this->current_day);
        }
        $this->db->where('MONTH(dob)', $month);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return json_encode($query->result_array());
    }
    public function get_holidays($month = NULL)
    {
        if ($month != NULL) {
            if ($month == "current") {
                $month = date('m');
            } else {
                $this->db->where('MONTH(dob)', $month);
            }
        }
        $this->db->select('*');
        $this->db->from('app_company_holidays');
        $this->db->where('MONTH(holiday_date)', $month);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return json_encode($query->result_array());
    }

    public function get_anniversaries($month = NULL)
    {
        $month = date('m');
        
        $this->db->select('*');
        $this->db->from('app_company_employees');

        if ($month == "current" || is_null($month)) {
            $this->db->where('DAYOFMONTH(joining_date) >=', $this->current_day);
        }
        $this->db->where('MONTH(joining_date)', $month);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return json_encode($query->result_array());
    }
}
