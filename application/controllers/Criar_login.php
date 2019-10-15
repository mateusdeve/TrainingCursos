<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criar_login extends CI_Controller {
	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('criar_login_model');
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
        $data['sessao']     =  $this->get_session();
        $data['user_data']  = $this->criar_login_model->listar_nome();
        $data['link']       = $this->criar_login_model->listar_curso();
		
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
        $this->load_modal();
		$this->load->view('criar_login_view',$data);
		$this->load->view('footer',$data);

		$data['resposta'] = $this->valida_formulario();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

                $this->load->model('criar_login_model');
                $this->criar_login_model->define($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Login e Senha cadastrados com sucesso',
                        'title' => 'Cadastrado',
                        'class' => 'success'
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../Criar_login', 'redirect');
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
            $this->form_validation->set_rules('nome', 'Nome Do Aluno',  'required');
            $this->form_validation->set_rules('login', 'Login',  'required');
            $this->form_validation->set_rules('senha', 'Senha', 'required');
            $this->form_validation->set_rules('curso', 'Curso  Desejado', 'required');
            
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
    
    public function valida_login($login)
    {

        $valida = $this->criar_login_model->checar_login($login);
        if ($valida === FALSE)
        {   
            $modal = array(
                        'success' => FALSE,
                        'message' => 'O login "'.$login.'" já stá sendo usado, escolha outro para continuar!',
                        'title' => 'Login já existe',
                        'class' => 'danger'
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../Criar_login', 'redirect');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
	
} 
?>