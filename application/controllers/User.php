<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view('menu');
$this->load->view("register.php");
}

//Class Student Login & register
public function register_student(){

      $user=array(
      'student_name'=>$this->input->post('student_name'),
      'student_email'=>$this->input->post('student_email'),
      'student_password'=>md5($this->input->post('student_password')),
      'student_age'=>$this->input->post('student_age'),
      'student_info'=>$this->input->post('student_info'),
      'student_mobile'=>$this->input->post('student_mobile')
        );
        print_r($user);

$email_check=$this->user_model->email_student_check($user['student_email']);

if($email_check){
  $this->user_model->register_student_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_student_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Try again.');
  redirect('user');


}

}

public function login_student_view(){
$this->load-> view('menu');
$this->load->view("student");

}

function login_student(){
  $this->load-> view('menu');
  $user_student_login=array(

  'student_email'=>$this->input->post('student_email'),
  'student_password'=>md5($this->input->post('student_password'))

    );

    $data=$this->user_model->login_student_user($user_student_login['student_email'],$user_student_login['student_password']);
      if($data)
      {
        $this->session->set_userdata('student_id',$data['student_id']);
        $this->session->set_userdata('student_email',$data['student_email']);
        $this->session->set_userdata('student_name',$data['student_name']);
        $this->session->set_userdata('student_age',$data['student_age']);
        $this->session->set_userdata('student_mobile',$data['student_mobile']);
        $this->session->set_userdata('student_info',$data['student_info']);

        $this->load->view('student_profile');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Try again.');
        $this->load->view("student");

      }


}

function user_student_profile(){
$this->load-> view('menu');
$this->load->view('student_profile');

}
public function user_student_logout(){

  $this->session->sess_destroy();
  redirect('user/login_student_view', 'refresh');
}


//Trainer Login & register
public function register_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'height' => 'NO',
      'weight' => 'NO',
      'DOB' => 'NO',
      'trainer_member' => 'Trainer',
      'class_name' => 'NO',
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

        $this->load->model('User_model');
$email_check=$this->User_model->email_check($user['user_email']);

if($email_check){
  $this->User_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');
}

}

public function login_view(){
$this->load-> view('menu');
$this->load->view("login.php");

}

function login_user(){
  $this->load-> view('menu'); 
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password')),
  'trainer_member'=>$this->input->post('trainer_member')

    );
    
    $this->load->model('User_model');
    $data=$this->User_model->login_user($user_login['user_email'],$user_login['user_password'],$user_login['trainer_member']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
        $this->session->set_userdata('trainer_member',$data['trainer_member']);
        

        $this->load->view('user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

function user_profile(){

$this->load->view('user_profile.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}







//Member Login & register
public function register_member(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      /*'height' => $this->input->post('height'),
      'weight' => $this->input->post('weight'),
      'DOB' => $this->input->post('DOB'),*/
      'trainer_member' => 'Member',
      'class_name' => $this->input->post('class_name'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

        $this-> load-> model('User_model');
$email_check=$this->User_model->email_check($user['user_email']);

if($email_check){
  $this->User_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_member_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Try again.');
  redirect('user');


}

}

public function login_member_view(){
$this->load-> view('menu');
$this->load->view("login.php");

}

function login_member(){
  $this->load-> view('menu');
  $user_member_login=array(

  'user_email'=>$this->input->post('user_email'),
  'trainer_member'=>$this->input->post('trainer_member'),
  'user_password'=>md5($this->input->post('user_password'))

    );
    $this->load->model('User_model');
    $data=$this->User_model->login_user($user_member_login['user_email'],$user_member_login['user_password'],$user_member_login['trainer_member']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('class_name',$data['class_name']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
        $this->session->set_userdata('trainer_member',$data['trainer_member']);

        $this->load->view('member_profile');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Try again.');
        $this->load->view("login");

      }


}

function user_member_profile(){
$this->load-> view('menu');
$this->load->view('member_profile');

}
public function user_member_logout(){

  $this->session->sess_destroy();
  redirect('user/login_member_view', 'refresh');
}









}
?>

