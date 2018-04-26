<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function submit()
    {
        $post_input = $this->input->post();
        $this->load->model('users');
        $u = $this->users->add_new_user($post_input); //variable being created and data being passed to Users->add_new_user()
        if($u){
            $this->load->view('dashboard');
        }
    }
}
