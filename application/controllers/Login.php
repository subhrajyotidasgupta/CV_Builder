<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends CI_Controller
{
    public function login()
    {
        $post_input = $this->input->post();
        $this->load->models(users);
        
    }
}
