<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->template->display('login');
	}

	public function cek_login()
    {
        // $this->form_validation->set_rules('username',   'User Name',     'trim|xss_clean|required');
        // $this->form_validation->set_rules('password',   'Password',     'trim|xss_clean|required');
        
        // if ( $this->form_validation->run( $this ))
        // {
            $username   = $this->input->post('username');
            $password   = md5_mod( $this->input->post('password'), $username);

            // echo $username." - ".$password; exit;

            $result     = $this->m_global->get_data_all( 'host', NULL, ['username' => $username, 'password' => $password] );

            if ( ! empty( $result ) )
            {
                $this->session->set_userdata(config_item('session_id'), $result[0]);

                redirect( base_url());

            } else {

                $this->session->set_flashdata('status', '<strong>Error!</strong> Wrong Email or Password.');
                redirect( base_url().'login');
            }

        // } else {

        //     $this->session->set_flashdata('status', '<strong>Error!</strong> Field can not be empty.');
        //     redirect(base_url().'login');

        // }
    }

    function logout()
    {
        $this->session->sess_destroy(); 

        redirect(base_url());
    }

    public function arr()
    {
    	echo count($this->session->userdata(config_item('session_id')));
    	// print_r($this->session->userdata); exit;
    	// echo md5_mod('sapa123', 'host1');
    }
}
