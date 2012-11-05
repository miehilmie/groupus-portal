<?php

class Lecturer extends CI_Controller {
    function index() {
        if(!$this->session->userdata('is_login')) {
            redirect('');
        }
        
        $user = unserialize($this->session->userdata('user'));
        $info = unserialize($this->session->userdata('info'));
        
        if($user && ($this->session->userdata('type') == 2)) { // student type
            
            $data = array(
                'name' => $user['name']
            );
            
            $this->load->view('lecturer/index_view', $data);
        }
        else {
            exit('You are not authorize to view this page');
        }
    }
}