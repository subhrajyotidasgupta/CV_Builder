<?php
    class Users extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function add_new_user($post_input)
        {
            $data= ['firstname'=> $post_input['firstname'],
                'lastname'=>$post_input['lastname'],
                'username'=>$post_input['username'],
                'email'=> $post_input['email'],
                'password'=> $post_input['password'],
                'phone'=>$post_input['phone'],
                'gender'=>$post_input['optradio']
                ];
        	if($this->db->insert('users',$data)){
        	    return true;
            }
            else{
                return false;
            }
        }
    }
?>
