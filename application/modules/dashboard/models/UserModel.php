<?php
class UserModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        $this->table = "app_company_employees";
        parent::__construct();
    }

    public function get($where = null, $select= null){
        if(!is_null($select)){
            $this->db->select($select);
        }
        if(!is_null($where)){
            $this->db->where($where);
        }
        $result = $this->db->get($this->table)->result_array()[0];
        return json_encode($result);
    }

    public function authorize(array $request){
        $this->db->where('email', $request['username']);
        $result = $this->db->get($this->table)->result_array()[0];
        if($result['username'] == $request['username'] && md5(sha1($request['password'])) == $result['password']){
            print_r("SUCCESS");die;
            // return $result;
            } else {
                print_r([
                    md5(sha1($request['password'])) , $result['password']
                ]);die;
            }
    }

    public function new($data){
        $this->db->insert('users', $data);
    }
}
