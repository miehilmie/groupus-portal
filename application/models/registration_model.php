<?php

class registration_model extends CI_Model {
    function insert_student($student_tbl = array()) {
        if(empty($student_tbl)) {
            return false;
        }
        
        if($this->db->insert('student',$student_tbl)) {
            return mysql_insert_id();
        }else {
            return false;
        }
    }
    
    function insert_lecturer($lecturer_tbl = array()) {
        
        // @todo: commented because no field on lecturer table yet : 30/10/2012
//        if(empty($lecturer_tbl)) {
//            return false;
//        }
        $this->db->query('INSERT INTO `lecturer` (`id`) VALUES (NULL)');
        if($this->db->affected_rows()) {
            return mysql_insert_id();
        }else {
            return false;
        }
    }
    
    function insert_user($user_tbl = array()) {
        if(empty($user_tbl)) {
            return false;
        }
        
        if($this->db->insert('user',$user_tbl)) {
            return mysql_insert_id();
        }else {
            return false;
        }
    }
}