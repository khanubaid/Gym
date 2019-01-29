<?php
class Admin extends CI_Controller {
	public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');

}

	public function index(){
    $this->load-> view('menu'); 
		$this->load->view('admin/login');
	}
	
public function register_admin_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

$email_check=$this->user_model->email_admin_check($user['user_email']);

if($email_check){
  $this->user_model->register_admin_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('admin/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error not define,Try again.');
  redirect('admin');
}

}

public function login_view(){
$this->load-> view('menu');
$this->load->view("login.php");

}


  function login_admin_user(){

   $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );
    $this->load->model('user_model');
    $data=$this->user_model->login_admin_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);

        redirect('admin/dashbord');



      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("admin/login");

      } 
    }

    public function dashbord(){
        $this->load->view('admin/menu');
       $this->load->view('admin/dashbord');
    }

    public function member(){
       $this->load->view('admin/menu');
       $this->load->model('book_model');
       $data['books']=$this->book_model->get_all_member();
       $this->load->view('admin/member',$data);

    }

    public function tranir(){
       $this->load->view('admin/menu');
       $this->load->model('book_model');
       $data['books']=$this->book_model->get_all_books();
       $this->load->view('admin/tranir',$data);

    }

    public function classinfo(){
       $this->load->view('admin/menu');
    }

    public function notifications(){
       $this->load->view('admin/menu');
    }

    public function about(){
       $this->load->view('admin/menu');
    }

    public function approve(){
       $this->load->view('admin/menu');
       $this->load->view('admin/approve');
    }

    

}
?>