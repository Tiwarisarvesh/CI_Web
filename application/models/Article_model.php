<?php

class Article_model extends CI_Model{


     public function dropdown()
     {
        $save=$this->db->select('name')
                 ->get('categories');
                  return $save->result();  
     }
     
     public function insert_article($arrdata)
     {
        $this->db->insert('article',$arrdata);
        return $this->db->insert_id();
     }

     public function display_article()
     {
        $query=$this->db->select()
                 ->get('article');
                 return $query->result();
     }

     public function load_data_article($id)
     {
        $save= $this->db->where('id',$id)
                        ->get('article');
                        return $save->row_array();
     }

     public function update_with_image_article($categories,$description,$type,$image,$id)
     {
      //   echo "update article SET categories='$categories',description='$description',
      //   type='$type' image='$image' where id='$id'";
    return $this->db->query("update article SET categories= '$categories' , description='$description',
      type='$type', image='$image' where id='$id' ");
     }
      // update_with_image_article and update_without_image both the same in use update image with content 
      //please use both function in update with image ; 
     public function update_without_image($categories,$description,$type,$id) 
     {
      return $this->db->query("update article SET categories= '$categories' , description='$description',
      type='$type' where id='$id' ");
     }

     public function delete_article($id)
     {
        return $this->db->where('id',$id)
                  ->delete('article');
      // $this->db->query("delete  from article where id='".$id."'");
     }

     //pagination in article list
     public function record_count()
      {
         return $this->db->count_all("article");
      }

      public function fetch_article($limit, $start) {
         $this->db->limit($limit, $start);
         $query = $this->db->get("article");
 
         if ($query->num_rows() > 0) {
             foreach ($query->result() as $row) {
                 $data[] = $row;
             }
             return $data;
         }
         return false;
    }

      public function table_join()
      {
         //'porder.id , customer.customer_name , porder.product_name '
         //
         $this->db->select('porder.id ,customer_name , product_name');
         $this->db->from('porder');
         $this->db->join('customer', 'porder.customer_id  = customer.id');
         $query = $this->db->get();

          if($query->num_rows() != 0)
        {
           return $query->result();
        }
    else
    {
        return false;
    }
         

      }
}