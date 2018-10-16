<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('queries');
		$posts = $this->queries->getPosts();
		$this->load->view('welcome_message', ['posts'=>$posts]);
	}

	public function create(){
		$this->load->view('create');
	}

	public function update($id){
		$this->load->model('queries');
		$post = $this->queries->getSinglePosts($id);
		$this->load->view('update', ['post'=>$post]);
	}

	public function save(){

		$this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
                if ($this->form_validation->run())
                {

                       	$data = $this->input->post();
                       	$today = date('Y-m-d');
                       	$data['date'] = $today;
                       	unset($data['submit']);
                       	$this->load->model('queries');
                       	if($this->queries->addPost($data)){
                       		$this->session->set_flashdata('msg', 'Post Saved Successfully');
                       	}
                       	else {
                       		$this->session->set_flashdata('msg', 'Failed to Save');
                       	}
                       	return redirect('Welcome');
                }
                else
                {
                        $this->load->view('create');
                }
	}

	public function change($id){
			$this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
                if ($this->form_validation->run())
                {

                       	$data = $this->input->post();
                       	$today = date('Y-m-d');
                       	$data['date'] = $today;
                       	unset($data['submit']);
                       	$this->load->model('queries');
                       	if($this->queries->updatePost($data, $id)){
                       		$this->session->set_flashdata('msg', 'Updated Successfully');
                       	}
                       	else {
                       		$this->session->set_flashdata('msg', 'Failed to Update');
                       	}
                       	return redirect('Welcome');
                }
                else
                {
                        $this->load->view('create');
                }

			}

			public function view($id){
				$this->load->model('queries');
				$post = $this->queries->getSinglePosts($id);
				$this->load->view('view', ['post'=>$post]);
			}

			public function delete($id){
				$this->load->model('queries');
				if($post = $this->queries->deletePosts($id)){
					$this->session->set_flashdata('msg', 'Post Deleted Successfully');
				}
				else {
					$this->session->set_flashdata('msg', 'Failed to Delete');
				}
				return redirect('Welcome');
			}
}

