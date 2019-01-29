<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('book_model');
	 	}


	public function index()
	{

		$data['books']=$this->book_model->get_all_books();
		$this->load->view('book_view',$data);
	}
	public function book_add()
		{
			$data = array(
					'user_name' => $this->input->post('user_name'),
					'user_email' => $this->input->post('user_email'),
					'user_password' => $this->input->post('user_password'),
					'trainer_member' => $this->input->post('trainer_member'),
					'class_name' => $this->input->post('class_name'),
				);
			$insert = $this->book_model->book_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->book_model->get_by_id($id);

			echo json_encode($data);
		}

		public function book_update()
	{
		$data = array(
				'user_name' => $this->input->post('user_name'),
				'user_email' => $this->input->post('user_email'),
				'user_password' => $this->input->post('user_password'),
				'trainer_member' => $this->input->post('trainer_member'),
				'class_name' => $this->input->post('class_name'),
			);
		$this->book_model->book_update(array('user_id' => $this->input->post('user_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



//Member
	public function member()
	{
		$this->load->view('admin/menu');
		$data['books']=$this->book_model->get_all_member();
		$this->load->view('admin/member',$data);
	}
	public function book_update_member()
	{
		$data = array(
				'user_name' => $this->input->post('user_name'),
				'user_email' => $this->input->post('user_email'),
				'user_password' => $this->input->post('user_password'),
				'trainer_member' => $this->input->post('trainer_member'),
				'class_name' => $this->input->post('class_name'),
				'height' => $this->input->post('height'),
				'weight' => $this->input->post('weight'),
				'user_age' => $this->input->post('user_age'),
				'date' => $this->input->post('date'),
				'user_mobile' => $this->input->post('user_mobile'),
				'DOB' => $this->input->post('DOB'),
			);
		$this->book_model->book_update(array('user_id' => $this->input->post('user_id')), $data);
		echo json_encode(array("status" => TRUE));
	}
	public function book_add_member()
		{
			$data = array(
				'user_name' => $this->input->post('user_name'),
				'user_email' => $this->input->post('user_email'),
				'user_password' => $this->input->post('user_password'),
				'trainer_member' => $this->input->post('trainer_member'),
				'class_name' => $this->input->post('class_name'),
				'height' => $this->input->post('height'),
				'weight' => $this->input->post('weight'),
				'user_age' => $this->input->post('user_age'),
				'date' => $this->input->post('date'),
				'user_mobile' => $this->input->post('user_mobile'),
				'DOB' => $this->input->post('DOB'),
				);
			$insert = $this->book_model->book_add($data);
			echo json_encode(array("status" => TRUE));
		}

}