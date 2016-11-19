<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Host extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
	}

	public function detail($host_id)
	{
		$data['record'] = $this->m_global->get_data_all('host', null, [strEncrypt('host_id', true) => $host_id]);

		$this->template->display('host', $data);
	}

}
