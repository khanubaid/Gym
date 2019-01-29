<?php
class User_model extends CI_model{

//Trainer and Member Login & register
public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($email,$pass,$usertype){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);
  $this->db->where('trainer_member',$usertype);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_check($email){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}


//Class Student Login & register
public function register_student_user($user){


$this->db->insert('class', $user);

}

public function login_student_user($email,$pass){

  $this->db->select('*');
  $this->db->from('class');
  $this->db->where('student_email',$email);
  $this->db->where('student_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_student_check($email){

  $this->db->select('*');
  $this->db->from('class');
  $this->db->where('student_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}


//Admin User
public function register_admin_user($user){


$this->db->insert('admin', $user);

}

public function login_admin_user($email,$pass){

  $this->db->select('*');
  $this->db->from('admin');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_admin_check($email){

  $this->db->select('*');
  $this->db->from('admin');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

      public function approve() {
        
      }

      public function reject($user_email, $user_name) {
        
        $query = $this->db->where('user_email', $user_email and 'user_name', $user_name);
        return $this->db->delete('user');
      }

      public function deleterec($id) {
        $this->load->database();
        $this->db->where("user_id", $id);
        $res = $this->db->delete("user");
        return $res;
    }

}
?>