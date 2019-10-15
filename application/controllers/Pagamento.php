<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagamento extends CI_Controller {
	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('pagamento_model');
    }
	public function index() {

        $this->valida_logado();

		$data['css'] = array(
			
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
            'modal_caller',
            'validacao',
		);


        $data['sessao'] =  $this->get_session();
        $this->load->model('pagamento_model');
        

        $sessao =  $this->get_session();
        
        $where = $sessao['id_usuario'];
                
        $data['user_data'] = $this->pagamento_model->listar_usuario($where);

		$this->load->helper('form');
		$this->load->helper('url');
		$data['sessao'] =  $this->get_session();
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load_modal();
		$this->load->view('pagamento_view',$data);
		$this->load->view('footer',$data);

	$data['resposta'] = $this->valida_formulario();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

                $this->load->model('pagamento_model');
                $this->pagamento_model->insere_pagamento($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Aluno cadastrado como pago!',
                        'title' => 'Sucesso',
                        'class' => 'success'
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../alunos_pagos', 'redirect');
            }
            
        }

	}
    /*Validando o formulario*/
	 private function valida_formulario() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('id_usuario','','required');
            $this->form_validation->set_rules('pg','','required');
            
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
    public function load_modal()
    {
        $modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
        }
        
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


	
}
?>