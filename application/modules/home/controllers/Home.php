<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['hosts'] 		= $this->m_global->get_data_all('host', null, ['active' => '1']); 
		$data['c_pendek'] 	= $this->m_global->get_data_all('youtube', null, ['status' => '1'], '*', null, null,null,5); 

		$this->template->display('home', $data);
	}

}
