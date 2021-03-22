<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/categories');
	}

    public function create()
	{
	   if($this->input->post('btnlogin'))
	   { 
			$data['name']=$this->input->post('name');
			$data['type']=$this->input->post('type');
			$data['status']=$this->input->post('status');
            $this->load->model('Categories_model');
		    $user=$this->Categories_model->create_categories($data);
			
			if($user > 0){
					$this->session->set_flashdata('message', 'Categoties Created Successfully.');
					redirect('/categories/display','refresh');
			 }
			 else{
			 		echo "Insert error !";
			 }

	   } 
	   
	   $this->load->view('admin/create_categories');
	}

	public function display()
	{
		$this->load->model('Categories_model');
		$result['data']=$this->Categories_model->display_categories();
		$this->load->view('admin/categories',$result);
	}

    public function categories_update()
	{
		$id=$this->input->get('id');
		$this->load->model('Categories_model');
		$load=$this->Categories_model->update_categories($id);
        $this->load->view('admin/edit_categories',['data' => $load]);
	}
   
	 public function categories_update_success()
	 {
		 $id=$this->input->post('id');
		 
		if($this->input->post('btnlogin'))
		{
		$name=$this->input->post('name');
		$type=$this->input->post('type');
		$status=$this->input->post('status');
		$this->load->model('Categories_model');
		$update = $this->Categories_model->success_update_categories($name,$type,$status,$id);
		if($update)
		{
			$this->session->set_flashdata('update', 'Update Successfully.');
			redirect('/categories/display','refresh');

		}else{
			echo "can't updated";
		}
		
		}
	
	 }
    public function categories_delete()
	{
		$id=$this->input->get('id');
		
		$this->load->model('Categories_model');
		$del=$this->Categories_model->delete_categories($id);
		if(!empty($del))
		{
			echo " Your data is not delete";
		}
		else{     
			$this->session->set_flashdata('delete', 'Delete Successfully.');
			redirect('/categories/display');
		}
		
	}

    
}

