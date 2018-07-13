<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->model('tpa');
}

	public function index(){
		$data['main_content'] = 'fe/home';
		$data['posts'] = $this->tpa->get_homeblog();
		$this->load->view('fe/includes/template',$data);
	}
	public function about(){
		$data['main_content'] = 'fe/about';
		$data['aboutus'] = $this->tpa->get_aboutus();
		$data['mission'] = $this->tpa->get_mission();
		$data['vision'] = $this->tpa->get_vision();
		$data['objectives'] = $this->tpa->get_objectives();
		$this->load->view('fe/includes/template',$data);
	}

	public function readproject($project_id){
			$data['main_content'] = 'fe/project';
			$data['projectlist'] = $this->tpa->get_projectlist();
			$data['project'] = $this->tpa->get_projects($project_id);
			$this->load->view('fe/includes/template',$data);
		}
	public function projectlist(){
			$data['main_content'] = 'fe/projectlist';
			$data['projectlist'] = $this->tpa->get_projectlist();
			$this->load->view('fe/includes/template',$data);
		}

  public function blog(){
		$data['main_content'] = 'fe/blog';
		$data['posts'] = $this->tpa->get_myblog();
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
