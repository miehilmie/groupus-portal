<?php
class announcement_model extends CI_Model {
    function get_announcements($id = NULL) {
        if(!$id) {
            return false;
        }
        $query = $this->db->select('*')->from('lec_announcement a')
                      ->join('enrollment b', 'a.lecture_id = b.lecture_id', 'left')
                      ->where('b.student_id',$id)->get();
        return $query->result();
    }
}
