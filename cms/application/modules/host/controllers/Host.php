<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Host extends CI_Controller {

	private $prefix         = 'Host';
    private $table_db       = 'host';

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['title'] 		= $this->prefix;
		$data['records']	= $this->m_global->get_data_all($this->table_db, null, ['active <>' => '99']);

		$this->template->display('host', $data);
	}

	public function show_add()
	{
		$data['title'] 		= $this->prefix.' Add';

		$this->template->display('host_add', $data);
	}

	public function show_edit($id)
	{
		$data['title'] 		= $this->prefix.' Edit';
		$data['id']			= $id;
		$data['record']		= $this->m_global->get_data_all($this->table_db, null, [strEncrypt('host_id', true) => $id])[0];

		$this->template->display('host_edit', $data);
	}

	public function action_add()
	{	
		$this->form_validation->set_rules('username',   'Username',  'trim|required');
		$this->form_validation->set_rules('full_name',   'Full Name',  'trim|required');
		$this->form_validation->set_rules('n_password',   'Password',  'trim|required');

		if ( $this->form_validation->run( $this ) )
        {

        	if($this->input->post('n_password') == $this->input->post('c_password')){

				$data['username'] 		= $this->input->post('username');
				$data['full_name'] 		= $this->input->post('full_name');
				$data['phone_number'] 	= $this->input->post('phone_number');
				$data['type'] 			= $this->input->post('type');
				$data['info_text'] 		= $this->input->post('info_text');
				$data['password'] 		= md5_mod($this->input->post('n_password'), $this->input->post('username'));

				$result = $this->m_global->insert($this->table_db, $data);

				if($result['status']){

					$this->alert_flash('validation', 'Success!', 'Success add '.$this->prefix.'.', 'success');
		            redirect( base_url().'host/show_add');

				}else{

					$this->alert_flash('validation', 'Failed!', 'Failed add '.$this->prefix.'.', 'danger');
		            redirect( base_url().'host/show_add');

				}

			}else{

				$this->alert_flash('validation', 'Failed!', 'Password do not match.', 'warning');
                redirect( base_url().'host/show_add');
			}

        }else{

        	$str                = ['<p>', '</p>'];
            $str_replace        = ['<li>', '</li>'];

            $this->alert_flash('validation', 'Failed!', str_replace($str, $str_replace, validation_errors()), 'warning');
            redirect( base_url().'host/show_add');
        }
	}

	public function action_edit($id)
	{	
		$this->form_validation->set_rules('username',   'Username',  'trim|required');
		$this->form_validation->set_rules('full_name',   'Full Name',  'trim|required');

		if ( $this->form_validation->run( $this ) )
        {
        	$data['username'] 		= $this->input->post('username');
			$data['full_name'] 		= $this->input->post('full_name');
			$data['phone_number'] 	= $this->input->post('phone_number');
			$data['type'] 			= $this->input->post('type');
			$data['info_text'] 		= $this->input->post('info_text');

			if($this->input->post('n_password') != ''){

				if($this->input->post('n_password') == $this->input->post('c_password')){

					$data['password'] = md5_mod($this->input->post('n_password'), $this->input->post('username'));

				}else{

					$this->alert_flash('validation', 'Failed!', 'Password do not match.', 'warning');
	                redirect( base_url().'host/show_edit/'.$id);
				}

			}

			$result = $this->m_global->update($this->table_db, $data, [strEncrypt('host_id', true) => $id]);

			if($result){

				$this->alert_flash('validation', 'Success!', 'Success edit '.$this->prefix.'.', 'success');
	            redirect( base_url().'host/show_edit/'.$id);

			}else{

				$this->alert_flash('validation', 'Failed!', 'Failed edit '.$this->prefix.'.', 'danger');
	            redirect( base_url().'host/show_edit/'.$id);

			}

        }else{

        	$str                = ['<p>', '</p>'];
            $str_replace        = ['<li>', '</li>'];

            $this->alert_flash('validation', 'Failed!', str_replace($str, $str_replace, validation_errors()), 'warning');
            redirect( base_url().'host/show_edit/'.$id);
        }
	}

	public function change_status( $id, $status )
    {
        $result = $this->m_global->update( 'host', ['active' => $status], [strEncrypt('host_id', true) => $id]);

        if ( $result )
        {
            redirect(base_url().'host');

        } else {

        }
    }

    public function alert_flash($name, $str_strong, $str_def, $color)
    {
    	$alert = '<div class="alert alert-'.$color.' alert-dismissible" role="alert">
		            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		            '.($str_strong != '' ? '<strong>'.$str_strong.'</strong>':'').' '. $str_def.'</div>';

    	$this->session->set_flashdata($name, $alert);
    }

}
