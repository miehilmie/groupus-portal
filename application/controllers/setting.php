<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter setting Class
 *
 * @package	CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author	Muhammad Hilmi <mhilmi1117@gmail.com>
 * 
 * @property User_self $user_self User_self
 */
class setting extends CI_Controller {

    function index() {
        if($this->session->userdata('type') == 1) {
            // student
        }
        else if($this->session->userdata('type') == 2) {
            // lecturer
        }
        $user = unserialize($this->session->userdata('user'));
        $type = $this->session->userdata('type');
        $data = array(
            'name' => $user['name'],
            'username' => $user['username'],
            'password' => $user['password'],
            'gender' => $user['gender']
        );
        $this->render(
                array(
                    'master_page' => 'tmpl/tmpl_loggedin_master',
                    'left_content' => (($type == 1) ? 'tmpl/tmpl_student_lcontent' : 'tmpl/tmpl_lecturer_lcontent'),
                    'right_content' => 'setting/index_view',
                    'data_content' => $data
                    )
                );
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

