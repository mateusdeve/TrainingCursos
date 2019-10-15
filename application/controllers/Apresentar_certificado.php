<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class apresentar_certificado extends CI_Controller {

	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('apresentar_certificado_model');
        $this->valida_logado();

    }
	public function index() {

		$data['css'] = array(
			
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
			'script_certificado',
            'modal_caller'
		);

		$data['sessao'] =  $this->get_session();

		$this->load->model('apresentar_certificado_model');
		$data['user_data'] = $this->apresentar_certificado_model->listar_usuario();

		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->helper('form');
		$this->load->view('modal_excluir_certificado',$data);
        $this->load->view('modal_alterar_certificado',$data);
        $this->load_modal();
		$this->load->view('apresentar_certificado_view',$data);
		$this->load->view('footer',$data);
		
	   
	}

	 private function valida_certificado() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('codigo', 'Codigo', 'required');
            $this->form_validation->set_rules('link_certificado', 'Link para o certificado:', 'required');

            
            //configurando erro ou sucesso//
            if ($this->form_validation->run() === FALSE) 
            {
                return array(
                    'class' => 'danger',
                    'message' => validation_errors() ,
                    'title' => 'Erro Ao Enviar'
                );
            }
            else
            {
                return true;
            }
        }
        return NULL;
    }
    
    public function excluir_usuario() 
    {	
    	$this->load_modal();

        if(isset($this->post['id_usuario']) && !empty($this->post['id_usuario']))
        {
            $deleted = $this->apresentar_certificado_model->deletar_usuario($this->post['id_usuario']);
            if($deleted)
            {
                $modal = array(
                            'success'	=> TRUE,
                            'message'	=> 'Usuário removido com Sucesso',
                            'title'		=> 'Removido',
                            'class'		=> 'success'
                            );
            }
            else
            {
                $modal = array( 
                        'success'	=> FALSE,
                        'message'	=> 'Erro ao excluir o usuário, tente novamente!' ,
                        'title'		=> 'Erro',
                        'class'		=> 'danger'
                        );
            }
            $this->session->set_flashdata('modal', $modal);
            redirect('../apresentar_certificado', 'redirect');
        }    
        
    }

     public function alterar_usuario()
    {
        $data['modal_alterar_certificado'] = 'modal_open';
        $data['resposta'] = $this->valida_certificado();
        $alterar= $this->apresentar_certificado_model->alterar_usuario($this->post);
        if($alterar)
        {
            $modal = array(
                        'success' => TRUE,
                        'message' => 'Alterado com sucesso',
                        'title' => 'Alterado',
                        'class' => 'success'
                        );
        }
        else
        {
            $modal = array( 
                    'success' => FALSE,
                    'message' => 'Erro ao Alterar o usuário, tente novamente!' ,
                    'title' => 'Erro',
                    'class' => 'danger'
                    );
        }
         $this->session->set_flashdata('modal', $modal);
            redirect('../apresentar_certificado', 'redirect');
    }

	public function get_session(){
        
        $sessao = $this->session->all_userdata();
        if(isset($sessao['logado'])){
            return $sessao;
        }
        return array(
            
            'perfil' => NULL,
            'logado' => FALSE
            
            );
        
    }

    private function valida_logado(){

        $sessao =  $this->get_session();
        if($sessao['logado'] === FALSE){
            redirect('../login', 'redirect');
        }
        if ($sessao['perfil'] == 'aluno') {
        	 redirect('../login', 'redirect');	
        }
    }

     public function load_modal()
    {
     	$modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
        }
        
    }


	
}
?>