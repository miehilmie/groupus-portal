<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter User_self Class
 *
 * @package	CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author	Muhammad Hilmi <mhilmi1117@gmail.com>
 */
class User_self {

    /**
     * Class Loader
     *
     * This function lets users load and instantiate classes.
     * It is designed to be called from a user's app controllers.
     *
     * @return	boolean
     */
    function set($user = array()) {
        $CI = &get_instance();
        if(!$CI->session->userdata('is_login'))
            return false;
        
        if(!$CI->session->set_userdata(''))
        return true;
    }
    
    function get() {
        $CI = &get_instance();

        return $CI->session->userdata('bbb');
    }

}