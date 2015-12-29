<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('form_page');
	}
	public function process_form()
	{
		$results = array();
		$results['name'] = $this->input->post('name');
		$results['location'] = $this->input->post('location');
		$results['language'] = $this->input->post('language');
		$results['comment'] = $this->input->post('comment');
		$this->session->set_userdata('results', $results);
		// see if counter exists in session
		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}
		redirect('/result');
	}
	public function result()
	{
		$results = $this->session->userdata('results');
		$this->load->view('result', $results);
	}	
	public function go_back()
	{
		redirect('/');
	    // $this->session->sess_destroy();
	    // would use above code but it would reset counter so don't want to use it here
	    // idea is to destroy session (to clear data) and then send user back to empty form page
	}
}

?>