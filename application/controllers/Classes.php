<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Classes extends CI_Controller {
	public function index()
	{
		$this->load->view('menu');
		$this->load->view('class');
	}
}
?>