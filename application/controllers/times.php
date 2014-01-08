<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {
	public function index(){
		$data['time'] = array(
				'day' => date('M d, Y'),
				'hour' => date('g:i A')
			);
		$this->load->view('view_home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */