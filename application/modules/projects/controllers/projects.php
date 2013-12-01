<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		
		$this->globalTpl = $this->config->item('globalTpl');
	}

	public function index()
	{
		$data['mainContent'] = 'projects.tpl';
		
		$data['data'] = array(
			'baseUrl'	=> base_url(),
			'title'		=> 'Projects'
		);
		
		$this->load->view($this->globalTpl, $data);	
	}
	
	public function viewproject()
	{
		$data['mainContent'] = 'view.tpl';
		
		$data['data'] = array(
			'baseUrl'	=> base_url(),
			'title'		=> 'View Projects'
		);
		
		$this->load->view($this->globalTpl, $data);	
	}
}

/* End of file welcome.php */
/* Location: ./application/modules/projects/controllers/projects.php */