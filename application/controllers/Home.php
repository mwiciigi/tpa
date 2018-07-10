<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('tpa');

}
public function index(){
  $data['main_content'] = 'fe/home';
  $this->load->view('fe/includes/template',$data);
}
}
