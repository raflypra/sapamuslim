<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$token = $this->input->post('token');
		$data = $this->m_global->get_data_all('faq',null,['faq_status' => '1'],'*' , null,['faq_lastupdate', 'DESC']);
		// echo json_encode(check_token($token,$data));
		echo "dssd";
	}

	public function facility_detail(){

		$facility_id = $this->input->post('facility_id');

		$data = $this->m_global->get_data_all('facility',null,['facility_id' => $facility_id]);

		for ($i=0; $i < count($data) ; $i++) { 
			$data[$i]->facility_pict = $this->m_global->get_data_all('facility_gallery',null,['gallery_facility_id' => $data[$i]->facility_id],'gallery_img_location')[0]->gallery_img_location;
		}

		$data = ['data' => $data];
		echo json_encode($data);
	}

}
