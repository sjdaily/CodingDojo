<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Words extends CI_Controller {

	public function index()
	{
		$this->load->view('word_generator');
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
	}
	public function random($len = 14) 
	{
	    $word = array_merge(range('A', 'Z'));
	    shuffle($word);
	    // var_dump($word);
	    $string = substr(implode($word), 0, $len);
	    $this->session->set_userdata('string', $string);
	    // var_dump($string);
	    redirect('/');
	}	
}

?>