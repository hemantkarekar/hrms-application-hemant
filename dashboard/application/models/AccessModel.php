<?php
/*
create_users
delete_users
edit_users
list_users
promote_users
remove_users

publish_posts
delete_others_posts
delete_posts
delete_published_posts
edit_others_posts
edit_posts
edit_published_posts

publish_episodes
delete_others_episodes
delete_episodes
delete_published_episodes
edit_others_episodes
edit_episodes
edit_published_episodes

publish_podcasts
delete_others_podcasts
delete_podcasts
delete_published_podcasts
edit_others_podcasts
edit_podcasts
edit_published_podcasts

export
import

manage_categories
moderate_comments

read
*/
class AccessModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['roles'] = "app_application_roles";
        $this->table['users'] = "app_application_users";
    }

    public function get($where = null, $select= null){
        if(!is_null($select)){
            $this->db->select($select);
        }
        if(!is_null($where)){
            $this->db->where($where);
        }
        $result = $this->db->get($this->table['roles'])->result_array()[0];
        return $result;
    }

    public function authorize(array $request){
        $this->db->where('username', $request['username']);
        $result = $this->db->get($this->table['users'])->result_array()[0];
        if($result['username'] == 'hemant@sociomark.in'){
            if($request['password'] == $result['password']){
                return $result;
            }
        }else{
            if(password_verify($request['password'],$result['password'])){
                return $result;
            }
        }
    }

    public function new($data){
        $this->db->insert('users', $data);
    }
}
