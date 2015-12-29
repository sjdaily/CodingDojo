<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 // * Index Page for this controller.
	 // *
	 // * Maps to the following URL
	 // * 		http://example.com/index.php/welcome
	 // *	- or -  
	 // * 		http://example.com/index.php/welcome/index
	 // *	- or -
	 // * Since this controller is set as the default controller in 
	 // * config/routes.php, it's displayed at http://example.com/
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */