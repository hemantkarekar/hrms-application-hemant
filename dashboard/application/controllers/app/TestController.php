<?php 

class TestController extends CI_Controller
{
    public function attendance_dump()
    {
        $this->db->select('*');
        $this->db->from('app_company_attendance');
        $this->db->where("id >=", 194344);
        $query = $this->db->get();
        echo "Loaded successfully! <br>";
        
        foreach ($query->result_array() as $key => $value) {
            echo "Updating record ID: " . $value['id'] . "<br>";
            $value['attendance_date'] = trim($value['attendance_date']);
            $value['timepunchIn'] = trim($value['timepunchIn']);
            $value['timepunchOut'] = trim($value['timepunchOut']);
            $in = $value['timepunchIn'] != NULL ? date_create_from_format("Y-m-d g:i a.", $value['attendance_date'] . " " . $value['timepunchIn'])->format("H:i:s") : NULL;
            $out = $value['timepunchOut'] != NULL ? date_create_from_format("Y-m-d g:i a.", $value['attendance_date'] . " " . $value['timepunchOut'])->format("H:i:s") : NULL;
            $added_at = $value['timepunchIn'] != NULL ? date_create_from_format("Y-m-d g:i a.", $value['attendance_date'] . " " . $value['timepunchIn'])->format("Y-m-d H:i:s") : NULL;
            $updated_at = $value['timepunchOut'] != NULL ? date_create_from_format("Y-m-d g:i a.", $value['attendance_date'] . " " . $value['timepunchOut'])->format("Y-m-d H:i:s") : NULL;
            
            $this->db->update('app_company_attendance', 
            array(
                    'timepunchIn' => $in,
                    'timepunchOut' => $out,
                    'added_at' => $added_at,
                    'updated_at' => $updated_at,
                ), 
                array('id' => $value['id'])
            );
            echo "Updated record ID: " . $value['id'] . "<br>";
        }
    }

    public function get_birthdays()
    {
        $this->load->model('events/GeneralEventsModel');
        $birthdays = json_decode($this->GeneralEventsModel->get_birthdays("current"), true);
        $birthdays =[];
        $this->load->view('templates/birthday_broadcast_template', array('birthdays' => $birthdays));
    }
}
