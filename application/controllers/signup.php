<?php
/**
 * @property registration_model $registration_model registration model
 */
class Signup extends CI_Controller {
    function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|min_length[6]|max_length[25]|is_unique[user.username]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password2]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('usertype', 'User Type', 'required');
        $this->form_validation->set_rules('university','University', 'required|callback_check_university');
        
        $this->form_validation->set_message('is_unique','%s already exist');

        $usertype = $this->input->post('usertype',true);
        
        if($usertype == 1) {
            $this->form_validation->set_rules('cgpa', 'CGPA', 'required');
            
        }else if($usertype == 2) {
            
        }
        
        if($this->form_validation->run() == FALSE) {
            // query all university for university list
            $query = $this->db->get('university');
            if(!($uni = $query->result())) {
                exit();
            }
            $data = array(
                'universities' => $uni
            );
            $this->load->view('signup_index', $data);
        }
        else {
            $this->do_register();
        }

    }
    
    function check_university($s) {
        if ($s == 'none')
        {
                $this->form_validation->set_message('check_university', 'The %s is required.');
                return FALSE;
        }
    }
    
    private function do_register() {
        $this->load->model('registration_model');
        $this->form_validation->run();
        
        // @todo: sanitize input here
        $u = $this->input->post('username',true);
        $p = md5($this->input->post('password',true));
        $p2 = $this->input->post('password2',true);
        $name = $this->input->post('name',true);
        $gender = $this->input->post('gender',true);
        $usertype = $this->input->post('usertype',true);
        $uni_id = $this->input->post('university', true);
        
        $s_id = null;
        $l_id = null;

        switch($usertype) {
            case 1:

                // @todo: sanitize input here
                $student_tbl = array(
                    'cgpa' => $this->input->post('cgpa', true),
                    'd_f_c' => $this->input->post('dfc', true)
                );
                
                if(!($s_id = $this->registration_model->insert_student($student_tbl))) return false;
                
                break;
            case 2:
                // @todo: approval for lecturer reg
                $lecturer_tbl = array(
                );

                if(!($l_id = $this->registration_model->insert_lecturer($lecturer_tbl))) return false;
                
                break;
            default:
                return false;
        }
        

        // user table structure
        $user_tbl = array(
            'username' => $u,
            'password' => $p,
            'name' => $name,
            'gender' => $gender,
            'student_id' => $s_id,
            'lecturer_id' => $l_id,
            'university_id' => $uni_id,
            'date_created' => null // must be null to insert current time
        );
        
        
        if($this->registration_model->insert_user($user_tbl)) {
            
            // @todo : redirect successful signup
            redirect('signup');
        }
    }
}