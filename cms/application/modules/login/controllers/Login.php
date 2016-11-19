<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function cek_login()
    {
        $this->form_validation->set_rules('username',   'User Name',     'trim|required');
        $this->form_validation->set_rules('password',   'Password',     'trim|required');
        
        if ( $this->form_validation->run( $this ))
        {
            $username   = $this->input->post('username');
            $password   = md5_mod( $this->input->post('password'), $username);

            // echo $username." - ".$password; exit;

            $result     = $this->m_global->get_data_all( 'admin', NULL, ['user_id' => $username, 'password' => $password] );

            if ( ! empty( $result ) )
            {
                $this->session->set_userdata(config_item('session_id'), $result[0]);

                redirect( base_url());

            } else {

                 $this->alert_flash('status', 'Error!', 'Wrong username or password.', 'danger');
                redirect( base_url().'login');
            }

        } else {
            $this->alert_flash('status', 'Error!', 'Field can not be empty.', 'warning');
            redirect(base_url().'login');

        }
    }

    function logout()
    {
        $this->session->sess_destroy(); 

        redirect(base_url());
    }

    public function alert_flash($name, $str_strong, $str_def, $color)
    {
        $alert = '<div class="alert alert-'.$color.' alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    '.($str_strong != '' ? '<strong>'.$str_strong.'</strong>':'').' '. $str_def.'</div>';

        $this->session->set_flashdata($name, $alert);
    }
}
