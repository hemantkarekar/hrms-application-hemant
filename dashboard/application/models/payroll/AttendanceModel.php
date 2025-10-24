<?php 

class AttendanceModel extends CI_Model
{
    public function __construct()
    {
        
    }

    public function get_attendance_of_employee($employee_id, $month = "current"){
        if($month == "current"){
            $month = date('m');
        }

        $this->db->select('*');
        $this->db->from('app_company_attendance');

        $this->db->where('MONTH(attendance_date)', $month);
        $this->db->where('emp_id', $employee_id);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return json_encode($query->result_array());
    }
}
