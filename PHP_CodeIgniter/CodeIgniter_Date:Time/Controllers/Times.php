<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {
     public function main()
     {
        $this->load->view('date_time');
        $time = $this->session->userdata('last_activity');
     }
}

?>