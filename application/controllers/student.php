<?php

class Student extends CI_Controller {
    function index() {
        if(!$this->session->userdata('is_login')) {
            redirect('');
        }
        
        $user = unserialize($this->session->userdata('user'));
        $info = unserialize($this->session->userdata('info'));
        
        if($user && ($this->session->userdata('type') == 1)) { // student type
            
            $data = array(
                'name' => $user['name']
            );
            $this->render(
                    array(
                        'master_page' => 'tmpl/tmpl_loggedin_master',
                        'left_content' => 'tmpl/tmpl_student_lcontent',
                        'right_content' => 'student/index_view',
                        'data_content' => $data
                        )
                    );
        }
        else {
            exit('You are not authorize to view this page');
        }
    }
    
    private function render($view_data = array()) {
        if(!empty($view_data)) {
            
            $master_data = $view_data['data_content'];
            $master_data['left_content'] = $this->load->view($view_data['left_content'], $view_data['data_content'],true);
            $master_data['right_content'] = $this->load->view($view_data['right_content'], $view_data['data_content'],true);
            
            $this->load->view($view_data['master_page'],$master_data);
        }
    }
}
