<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceramah_pendek extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
	}

	public function detail($id)
	{
		$data['record'] 	= $this->m_global->get_data_all('youtube', null, [strEncrypt('id', true) => $id]);
		$data['youtube'] 	= $this->m_global->get_data_all('youtube', null, ['status' => '1']);

		$this->template->display('ceramah_pendek', $data);
	}

}
