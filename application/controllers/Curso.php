<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {
	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
    }

	public function index() {

		$data['css'] = array(
			
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
		);

		if ( !isset($this->post['id']) ) {

			redirect('../home', 'redirect');

		}

		if( isset($this->post['id']) && !empty($this->post['id']) )
        {

            $this->load->model('Curso_model');
            $curso = $this->Curso_model->listar_curso($this->post['id']);
            $data['curso'] = $curso;
            unset( $this->post['id'] );

            /*print_r($data['curso']);exit;*/
        }

		$data['sessao'] =  $this->get_session();
		
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->view('curso_view',$data);
		$this->load->view('footer',$data);
		
	   
	}

	public function get_session(){
        
        $sessao = $this->session->all_userdata();
        if(isset($sessao['logado'])){
            return $sessao;
        }
        return array(
            
            'perfil' => NULL,
            'logado' => FALSE,
            
            );
        
    }

	
}
?>