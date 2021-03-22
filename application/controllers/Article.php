<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function index()
	{
		$this->load->view('admin/article');
	}
     
    public function insert()
    {
            $config['upload_path']          = './public/image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->load->model('Article_model');
           if($this->input->post('btnlogin'))
		   {
            
              if($this->upload->do_upload('image'))
              {
                $upload_info = $this->upload->data();
                $path = base_url("public/image/".$upload_info['raw_name'].$upload_info['file_ext']);
    
                $data['categories']=$this->input->post('dropdown');
                $data['description']=$this->input->post('description');
                $data['type']=$this->input->post('type');
               
                $data['image'] = $path;
                 
               
                $user=$this->Article_model->insert_article($data);
                
                if($user>0){
                        $this->session->set_flashdata('message','Article Added Successfully');
                        redirect('article/article_display');
                }
              }
           
			else{
					echo "Insert error !";
			}
		}
        $save = $this->Article_model->dropdown();
        $this->load->view('admin/create_article',['data'=> $save]);
    }

    public function article_display()
    {
        $this->load->model('Article_model');
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = base_url() . 'article/article_display';
        $config['total_rows'] = $this->Article_model->record_count();
        $config['per_page'] = 2;
        $config['uri_segment'] = 3;

        // custom paging configuration
        
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
         
        $config['full_tag_open'] = '<div><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';
         
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<span class="firstlink">';
        $config['first_tag_close'] = '</span>';
         
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';
         
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<span class="nextlink">';
        $config['next_tag_close'] = '</span>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<span class="prevlink">';
        $config['prev_tag_close'] = '</span>';

        $config['cur_tag_open'] = '<span class="curlink">';
        $config['cur_tag_close'] = '</span>';

        $config['num_tag_open'] = '<span class="numlink">';
        $config['num_tag_close'] = '</span>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data['display'] = $this->Article_model->fetch_article($config["per_page"], $page);
        $data['links'] = $this->pagination->create_links(); 
        
        //$data['display']=$this->Article_model->display_article();
        $this->load->view('admin/article',$data);
    }

    public function article_update_load()
    {
        $id=$this->input->get('id');
        $this->load->model('Article_model');
        $save['save'] = $this->Article_model->dropdown();
        $save['load']=$this->Article_model->load_data_article($id);
        $this->load->view('admin/edit_article',$save);
    }

    public function article_update()  // with image 
    {
        $id=$this->input->post('id');
        
        $config['upload_path']          = './public/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->input->post('btnlogin'))
		{
            if($this->upload->do_upload('image'))
              {
                $dataa = array('upload_data'=>  $this->upload->data());
                $professional_info = array(
                          'professional_image'=> base_url('public/image/'.$dataa['upload_data']['file_name']));

		        $categories=$this->input->post('dropdown'); 
		        $description=$this->input->post('description');
		        $type=$this->input->post('type');
                $image=implode('',$professional_info);
        
                $this->load->model('Article_model');
		        $save=$this->Article_model->update_with_image_article($categories,$description,$type,$image,$id);
                if($save)
                   {
                      $this->session->set_flashdata('message','Article updated Successfully');
                        redirect('article/article_display');
                   }
              else
                  {
                     echo "can't updated successfully ";
                  }
		    }
            else
            {
                $categories=$this->input->post('dropdown'); 
		        $description=$this->input->post('description');
		        $type=$this->input->post('type');
                $this->load->model('Article_model');
                $save=$this->Article_model->update_without_image($categories,$description,$type,$id);
                if($save)
                   {
                      $this->session->set_flashdata('message','Updated Successfully');
                        redirect('article/article_display');

                   }
            }
	   }
    }
  
     public function article_delete()
     {
        $id=$this->input->get('id');
         $this->load->model('Article_model');
         $del=$this->Article_model->delete_article($id);
         if($del)
         {
            $this->session->set_flashdata('delete','Delete Successfully');
            redirect('article/article_display');

         }
         else
         {
             echo "you can't delete this data";
         }
     }


   public function join()
   {
       $this->load->model('Article_model');
       $result=$this->Article_model->table_join();
       echo "<pre>";
       print_r($result);
       exit;
       
   }



    

}

?>