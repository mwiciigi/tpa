<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['main_content'] = 'fe/home';
		$this->load->view('fe/includes/template',$data);
	}
	public function about(){
		$data['main_content'] = 'fe/about';
		$this->load->view('fe/includes/template',$data);
	}

	public function project(){
			$data['main_content'] = 'fe/project';
			$this->load->view('fe/includes/template',$data);
		}
	public function projectlist(){
			$data['main_content'] = 'fe/projectlist';
			$this->load->view('fe/includes/template',$data);
		}

  public function blog(){
		$data['main_content'] = 'fe/blog';
		$this->load->view('fe/includes/template',$data);
	}

	public function gallery(){
		$data['main_content'] = 'fe/gallery';
		$this->load->view('fe/includes/template',$data);
	}
	public function contact(){
		$data['main_content'] = 'fe/contact';
		$this->load->view('fe/includes/template',$data);
	}
}
