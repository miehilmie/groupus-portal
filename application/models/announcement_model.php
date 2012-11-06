<?php
class announcement_model extends CI_Model {
    function get_announcements($id = NULL) {
         /**
          * $a as announcement item
          * attributes:
          * code - subject code
          * time - announcement time
          * poster - poster
          * body - announcement conent
          **/
        if(!$id) {
            return false;
        }
        $query = $this->db->select('d.subject_code as code,a.date_created as time,c.name as poster,a.message as body')->from('lec_announcement a')
                      ->join('lecturer b', 'b.id = a.lecturer_id', 'inner')
                      ->join('user c', 'c.lecturer_id = b.id', 'inner')
                      ->join('subject d', 'd.id = a.subject_id', 'inner')
                      ->join('enrollment f', 'f.subject_id = d.id', 'inner')
                      ->where('f.student_id',$id)->order_by('a.date_created','desc')->limit(10,0)->get();
        return $query->result();
    }
}
