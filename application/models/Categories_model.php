<?php

class Categories_model extends CI_Model{

    public function create_categories($arrdata)
    {
        $this->db->insert('categories',$arrdata);
        return $this->db->insert_id();
    }

    public function display_categories()
    {
        $query=$this->db->get('categories');
	     return $query->result();
    }

    public function delete_categories($id)
    {
        // $save=$this->db->where('id',$id)
        //           ->get('categories');
        //           return $save->result();
        $this->db->query("delete  from categories where id='".$id."'");
    }
    
    public function update_categories($id)
    {
        $save=$this->db->where('id',$id)
                        ->get('categories');
                        return $save->row_array();
                        
    }

    public function success_update_categories($name,$type,$status,$id)
    {
        return $this->db->query("update categories SET name='$name',type='$type',status='$status' where id='$id'");
        
    }
}


?>