<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user/user_model');
	}

	public function index(){
		$data['main_content'] = 'user/dashboard';
		$this->load->view('user/includes/template',$data);
	}

	public function addnew(){
		$data['main_content'] = 'user/addnew';
		$data['mylisting']=$this->user_model->get_mylisting();
		$data['mylisting1']=$this->user_model->myitemlist();
		$this->load->view('user/includes/template',$data);
	}

	function add_mylisting(){
			$data['page_title'] = 'Home | ';
			$data['mylisting']=$this->user_model->get_mylisting();
			//$data['load_introduction_content']=$this->home_model->load_introduction_content();
			$data['main_content'] = 'user/addlisting';
			$this->load->view('user/includes/template',$data);
	}

	function save_mylisting(){
		$data = array(
			'business_name' => $this->input->post('business_name'),
			'business_regnumber' => $this->input->post('business_regnumber'),
			'business_regdate' => $this->input->post('business_regdate'),
			'business_krapin' => $this->input->post('business_krapin'),
			'business_phonenumber' => $this->input->post('business_phonenumber'),
			'business_email' => $this->input->post('business_email'),
			'business_fax' => $this->input->post('business_fax'),
			'business_website' => $this->input->post('business_website'),
			'procurement_date' => $this->input->post('procurement_date'),
			'invoice_overduedate' => $this->input->post('invoice_overduedate'),
			'invoice_amount' => $this->input->post('invoice_amount'),
			'product_description' => $this->input->post('product_description'),
			'measures_debtrecovery' => $this->input->post('measures_debtrecovery'),
			'more_information' => $this->input->post('more_information'),
			'created_at'=>date('y-m-d H:m:s')
		);

			$q = $this->user_model->save_mylisting($data);
			if ($q['res'] == true){
				$resp = array('status' => 'SUCCESS','message' => $q['dt']);
			}else{
				$resp = array('status' => 'ERR','message' => $q['dt']);
			}

		echo json_encode($resp);
	}

function edit_mylisting($no){
			$data['mylisting1'] = $this->user_model->myitemlist($no);
			$data['page_title'] = 'Edit | ';
			$data['main_content'] = 'user/editlisting';
			$this->load->view('user/includes/template',$data);
	}


	function update_mylisting($no){
		$data = array(
			'business_name' => $this->input->post('business_name'),
			'business_regnumber' => $this->input->post('business_regnumber'),
			'business_regdate' => $this->input->post('business_regdate'),
			'business_krapin' => $this->input->post('business_krapin'),
			'business_phonenumber' => $this->input->post('business_phonenumber'),
			'business_email' => $this->input->post('business_email'),
			'business_fax' => $this->input->post('business_fax'),
			'business_website' => $this->input->post('business_website'),
			'procurement_date' => $this->input->post('procurement_date'),
			'invoice_overduedate' => $this->input->post('invoice_overduedate'),
			'invoice_amount' => $this->input->post('invoice_amount'),
			'product_description' => $this->input->post('product_description'),
			'measures_debtrecovery' => $this->input->post('measures_debtrecovery'),
			'more_information' => $this->input->post('more_information'),
			'created_at'=>date('y-m-d H:m:s')
		);

			$q = $this->user_model->update_mylisting($data, $no);
			if ($q['res'] == true){
				$this->session->set_flashdata('success_msg','Record Updated Successifully');

			}else{
				$this->session->set-flashdata('err_msg','Record failed to update');
			}
			redirect('user/addnew');
	}


public function delete_mylisting($no){
		$result = $this->user_model->delete($no);

		if ($result){
				$this->session->set_flashdata('success_msg','Record Deleted Successifully');
			}
			else{
				$this->session->set_flashdata('err_msg','Record failed to Delete');
			}
			redirect(base_url('user/addnew'));
		}



  public function profile(){
    $data['main_content'] = 'user/profile';
		$data['myprofile']= $this->user_model->profile();
    $this->load->view('user/includes/template',$data);
  }
	public function editprofile(){
    $data['main_content'] = 'user/editprofile';
		$data['myprofile']= $this->user_model->profile();
    $this->load->view('user/includes/template',$data);
  }

	public function bookings(){
		$data['main_content'] = 'user/bookings';
		$this->load->view('user/includes/template',$data);
	}

	public function messages(){
		$data['main_content'] = 'user/messages';
		$this->load->view('user/includes/template',$data);
	}



	public function resetmypassword(){
		$data['main_content'] = 'user/resetpassword';
		$this->load->view('user/includes/template',$data);
	}

	public function reviews(){
		$data['main_content'] = 'user/reviews';
		$this->load->view('user/includes/template',$data);
	}


}
