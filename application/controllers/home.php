<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Home Class
 *
 * @package	CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author	Muhammad Hilmi <mhilmi1117@gmail.com>
 */
class Home extends CI_Controller {
    function index() {
        if((($u = $this->input->cookie('u',true)) && ($p = $this->input->cookie('p',true))) || 
           (($u = $this->session->userdata('u')) && ($p = $this->session->userdata('p')))) {
            $query = $this->db->query('SELECT * FROM `user` WHERE `username`=? AND `password`=?', array($u, $p));
            if($query->num_rows() == 1) {
                $user = $query->row_array();
                if($user['student_id']) {
                    $query = $this->db->query('SELECT * FROM `student` WHERE `id`=?', array($user->student_id));
                    $info = $query->row_array();
                    $type = 1;
                }
                else if($user['lecturer_id']) {
                    $query = $this->db->query('SELECT * FROM `lecturer` WHERE `id`=?', array($user->lecturer_id));
                    $info = $query->row_array();
                    $type = 2;
                }
                else { exit('Invalid User Type'); }
                $session_data = array(
                    'user' => serialize($user),
                    'is_login' => true,
                    'info' => serialize($info),
                    'type' => $type
                );
                $this->session->set_userdata($session_data);
            }
        }
        
        if($this->session->userdata('is_login')) {
            switch ($type) {
                case 1:
                    redirect('student');
                    break;
                case 2:
                    redirect('lecturer');
                    break;
                default:
                    break;
            }
        }
        else {
            $this->load->view('site_index');
        }
    }
    function do_login() {
        if($this->input->post('login')) {
            $u = $this->input->post('username');
            $p = md5($this->input->post('password'));
            $query = $this->db->query('SELECT * FROM `user` WHERE `username`=? AND `password`=?', array($u,$p));
            if($query->num_rows() == 1) {
                $u_cookie = array(
                    'name'   => 'u',
                    'value'  => $u,
                    'expire' => '86500'
                );
                $p_cookie = array(
                    'name'   => 'p',
                    'value'  => $p,
                    'expire' => '86500'
                );
                $user = $query->row();
                
                if($user->student_id) {
                    $query = $this->db->query('SELECT * FROM `student` WHERE `id`=?', array($user->student_id));
                    $info = $query->row();
                    $type = 1;
                }
                else if($user->lecturer_id) {
                    $query = $this->db->query('SELECT * FROM `lecturer` WHERE `id`=?', array($user->lecturer_id));
                    $info = $query->row();
                    $type = 2;
                }
                
                if($this->input->post('remember')) {
                    $this->input->set_cookie($u_cookie);
                    $this->input->set_cookie($p_cookie);
                }
                
                $session_data = array(
                    'u' => $u,
                    'p' => $p,
                );
                
                $this->session->set_userdata($session_data);
                redirect('');
            }
            
            
        }
    }
}