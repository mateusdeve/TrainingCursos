<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos_inscritos extends CI_Controller {

	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('alunos_inscritos_model');
        $this->valida_logado();

    }
	public function index() {

        $data['js'] = array(
            'contact_me',
            'jqBootstrapValidation',
            'script_cadastro',
            'modal_caller'
        );

		$data['sessao'] =  $this->get_session();

		$this->load->model('alunos_inscritos_model');
		$data['user_data'] = $this->alunos_inscritos_model->listar_usuario();

		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->helper('form');
		$this->load->view('modal_excluir_cadastro',$data);
        $this->load->view('modal_alterar_inscritos',$data);
        $this->load_modal();
		$this->load->view('alunos_inscritos_view',$data);
		$this->load->view('footer',$data);
		
	   
	}
        /*validando o pagamento*/
	 private function valida_pg() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('telefonemovel', 'Telefone Movel', 'required');
            $this->form_validation->set_rules('curso', 'Curso', 'required');
            $this->form_validation->set_rules('pg', 'Pagamento', 'required');

            
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
    
    /*metodo para excluir usuario*/
    public function excluir_usuario() 
    {	
        /*carregando o metodo do modal*/
    	$this->load_modal();

        if(isset($this->post['id_usuario']) && !empty($this->post['id_usuario']))
        {
            $deleted = $this->alunos_inscritos_model->deletar_usuario($this->post['id_usuario']);
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
            /*o modal só funciona com essa funçaõ*/
            $this->session->set_flashdata('modal', $modal);
            redirect('../alunos_inscritos', 'redirect');
        }    
        
    }
    /*metodo para alterar o usuario*/
     public function alterar_usuario()
    {
        $data['modal_alterar'] = 'modal_open';
        $data['resposta'] = $this->valida_pg();
        /*carregando a model e passando post*/
        $alterar= $this->alunos_inscritos_model->alterar_usuario($this->post);
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
            redirect('../alunos_inscritos', 'redirect');
    }

    /*metodo para usar a sessão*/
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
    /*metodo para saber se estar logao ou não*/
    private function valida_logado(){

        $sessao =  $this->get_session();
        if($sessao['logado'] === FALSE){
            redirect('../login', 'redirect');
        }
        if ($sessao['perfil'] == 'aluno') {
        	redirect('../login', 'redirect');	
        }
    }
    /*metodo que chama o modal na view*/
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