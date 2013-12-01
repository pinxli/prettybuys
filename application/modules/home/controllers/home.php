<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		
		$this->globalTpl = $this->config->item('globalTpl');
	}

	public function index()
	{
		$data['mainContent'] = 'home.tpl';		
		
		$data['data'] = array(
			'baseUrl'	=> base_url(),
			'title'		=> 'Home'
		);
		
		$this->load->view($this->globalTpl, $data);	
	}
}

/* End of file home.php */
/* Location: ./application/modules/home/controllers/home.php */