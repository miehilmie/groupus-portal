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
        $data = array(
            'name' => $user['name'],
            'username' => $user['username'],
            'password' => $user['password'],
            'gender' => $user['gender']
        );
        $this->load->view('setting/index_view',$data);
    }
}

