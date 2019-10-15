<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criar_certificado extends CI_Controller {
	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('criar_certificado_model');
        $this->valida_logado();
    }
	public function index() {

		$data['css'] = array(
			
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
            'modal_caller',
            'validacao'
		);
        $data['sessao'] =  $this->get_session();

        $data['listar_cadastro'] = $this->criar_certificado_model->listar_cadastro();
        $data['curso'] = $this->criar_certificado_model->listar_curso();
		
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
        $this->load_modal();
		$this->load->view('criar_certificado_view',$data);
		$this->load->view('footer',$data);

		$data['resposta'] = $this->valida_formulario();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

                $this->load->model('criar_certificado_model');
                $this->criar_certificado_model->define($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Certificado cadastrado com sucesso',
                        'title' => 'Cadastrado',
                        'class' => 'success'
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../apresentar_certificado', 'redirect');
            }
            
        }

	}
    /*Validando o formulario de login*/
	 private function valida_formulario() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('codigo', 'Codigo', 'required');
            $this->form_validation->set_rules('link_certificado', 'Link para o certificado','required');
            $this->form_validation->set_rules('nome', 'Nome Do Aluno', 'required');
            $this->form_validation->set_rules('curso', 'Curso do Certificado', 'required');
            
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

    public function valida_codigo($codigo)
    {

        $valida = $this->criar_certificado_model->checar_codigo($codigo);
        if ($valida === FALSE)
        {   
            $modal = array(
                        'success' => FALSE,
                        'message' => 'O Código "'.$codigo.'" já stá sendo usado, escolha outro para continuar!',
                        'title' => 'Codigo já existe',
                        'class' => 'danger'
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../Criar_certificado', 'redirect');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
	
}
?>