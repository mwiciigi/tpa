<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['main_content'] = 'fe/home';
		$this->load->view('fe/includes/template',$data);
	}
  public function blog(){
		$data['main_content'] = 'fe/blog';
		$this->load->view('fe/includes/template',$data);
	}
=======
	function __construct(){
		parent::__construct();
		$this->load->model('tpa');

}
public function index(){
  $data['main_content'] = 'fe/home';
  $this->load->view('fe/includes/template',$data);
}
}
