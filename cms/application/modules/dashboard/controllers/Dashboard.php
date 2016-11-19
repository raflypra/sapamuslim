<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['title'] 		= 'Dashboard';
		$data['total_host'] = $this->m_global->count_data_all('host', null, ['type' => 'host']);
		$data['total_viewer'] = $this->m_global->count_data_all('user');

		$this->template->display('dashboard', $data);
	}

}
