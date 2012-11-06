<?php

class subject_model extends CI_Model {
    function get_student_subject($student_id) {
        $query = $this->db->select('b.id, b.name, b.subject_code')->from('enrollment a')
                      ->join('subject b', 'a.subject_id=b.id', 'inner')
                      ->where('a.student_id',$student_id)->get();
        
        return $query->result();
        //SELECT
        //    subject.name
        //    , subject.subject_code
        //FROM
        //    groupusdb.enrollment
        //    INNER JOIN groupusdb.subject 
        //        ON (enrollment.subject_id = subject.id)
        //WHERE enrollment.student_id=9                
    }
}