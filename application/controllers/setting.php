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
        $user = unserialize($this->session->userdata('user'));
        $type = $this->session->userdata('type');
        
        if($type == 1) {
            // load related model
            $this->load->model('announcement_model');
            $this->load->model('subject_model');
            
            $announcements = $this->announcement_model->get_announcements($user['student_id']);
            $subjects = $this->subject_model->get_student_subject($user['student_id']);

            $data_extra = array(
                'announcements' => $announcements,
                'subjects' => $subjects
            );
            
        }
        else if($type == 2) {
            $data_extra = array();
            // lecturer
        }

        $data = array(
            'name' => $user['name'],
            'username' => $user['username'],
            'password' => $user['password'],
            'gender' => $user['gender']
        );
        $data = array_merge($data, $data_extra);
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

