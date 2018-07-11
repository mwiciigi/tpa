<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->model('Tpa');
}

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
		$data['posts'] = $this->Tpa->find_posts();
		$data['pagetitle'] = $this->Tpa->find_pagetitle();
		$data['blogpostwithimage'] = $this->Tpa->find_blogpostwithimage();
		$data['blogpostwithslider'] = $this->Tpa->find_blogpostwithslider();
		$data['layerslier'] = $this->Tpa->find_layerslider();
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
