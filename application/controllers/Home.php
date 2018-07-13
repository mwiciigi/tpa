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
		$data['keepgirlinschool'] = $this->tpa->get_keepgirlinschool();
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
	function comment(){

		$data = array(
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('comment')
            );

            $q = $this->tpa->save_comment($data);
            if ($q['res'] == true){
                $resp = array('status' => 'SUCCESS','message' => $q['dt']);
            }else{
                $resp = array('status' => 'ERR','message' => $q['dt']);
            }

            echo json_encode($resp);
            }

  if ($this->form_validation->run() == FALSE) {
				$query = $this->tpa->save_comment($fullname,$email,$message);
   	$this->load->view('fe/home');
		$this->load->view('fe/includes/template');
  }else{
		$this->load->view('fe/home');
		$this->load->view('fe/includes/template');
  }
 }
}
