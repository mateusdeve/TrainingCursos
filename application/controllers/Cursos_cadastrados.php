<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_cadastrados extends CI_Controller {

	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('cursos_cadastrados_model');
        $this->valida_logado();

    }
	public function index() {

		$data['css'] = array(
			'upload'
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
			'script_cursos',
            'modal_caller',
            'upload',
            'script_img'
		);

		$data['sessao'] =  $this->get_session();

		$this->load->model('cursos_cadastrados_model');
		$data['user_data'] = $this->cursos_cadastrados_model->listar_usuario();

		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->helper('form');
		$this->load->view('modal_excluir_cursos',$data);
        $this->load->view('modal_alterar_cursos',$data);
        $this->load->view('modal_img',$data);
        $this->load_modal();
		$this->load->view('cursos_cadastrados_view',$data);
		$this->load->view('footer',$data);

        $data['resposta'] = $this->valida_img();
        

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

                $this->load->model('cursos_cadastrados_model');
                $this->salvarImagem();
                $this->cursos_cadastrados_model->alterar_imagem($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Imagem alterada com sucesso!',
                        'title' => 'Ok',
                        'class' => 'success'
                        );

                $this->session->set_flashdata('modal', $modal);
                redirect('../cursos_cadastrados', 'redirect');

            }
            
        }
		
	   
	}

	 private function valida_cursos() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('nomeimg', 'Escolher Imagem', 'required');

            $this->form_validation->set_rules('modal', 'Modal', 'required');
            $this->form_validation->set_rules('curso', 'Curso', 'required');
            $this->form_validation->set_rules('sobre', 'Sobre', 'required');
            $this->form_validation->set_rules('implemento', 'Implemento', 'required');
            $this->form_validation->set_rules('valor', 'Valor', 'required');
            $this->form_validation->set_rules('sobre1', 'Primeira informação', 'required');
            $this->form_validation->set_rules('sobre2', 'Segunda informação', 'required');
            $this->form_validation->set_rules('sobre3', 'Terceira informação', 'required');
            $this->form_validation->set_rules('sobre4', 'Quarta informação', 'required');
            $this->form_validation->set_rules('chamada', 'Chamada para o modal', 'required');
            $this->form_validation->set_rules('sobrecurso', 'Sobre o Curso', 'required');

            
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

    private function valida_img() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('nomeimg', 'Escolher Imagem', 'required');

            
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
                $file_name = explode('.', $this->post['nomeimg']);
               
               $this->post['nomeimg'] = md5($file_name[0] . time()) . '.' . $file_name[1];
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
            $deleted = $this->cursos_cadastrados_model->deletar_usuario($this->post['id_usuario']);
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
            redirect('../cursos_cadastrados', 'redirect');
        }    
        
    }

     public function alterar_usuario()
    {
        $data['modal_alterar_cursos'] = 'modal_open';
        $data['resposta'] = $this->valida_cursos();
        $alterar= $this->cursos_cadastrados_model->alterar_usuario($this->post);
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
            redirect('../cursos_cadastrados', 'redirect');
    }


     public function load_modal()
    {
     	$modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
        }
        
    }

    public function alterar_imagem()
    {
        $data['modal_img'] = 'modal_open';
        $data['resposta'] = $this->valida_cursos();
        $this->salvarImagem();
        $alterar = $this->cursos_cadastrados_model->alterar_imagem($this->post);
        if($alterar)
        {
            $modal = array(
                        'success' => TRUE,
                        'message' => 'Imagem alterada com sucesso',
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
            redirect('../cursos_cadastrados', 'redirect');
    }


     private function salvarImagem() {

            $dir = './assets/img';
            if( !is_dir($dir) )
            {
                $modal = array(

                    'success' => FALSE,
                    'message' => 'Diretório não encontrado!',
                    'title'   => 'Erro ao salvar imagem',
                    'class'   => 'danger'
                );
    
                $this->session->set_flashdata('modal', $modal);
                redirect('../cursos_cadastrados', 'redirect');
            }
    
            if( isset($_FILES['fileimg']) && !empty($_FILES['fileimg']) )
            {
    
                $destination = $dir . '/' . $this->post['nomeimg'];

                $file        = file_get_contents($_FILES['fileimg']['tmp_name']);
    
                $type        = explode( '/', $_FILES['fileimg']['type']);
    
                if( !in_array( $type[1], ['jpeg', 'jpg', 'png']) )
                {
                    $modal = array(
                        'success' => FALSE,
                        'message' => 'Formato inválido',
                        'title'   => 'Erro ao salvar imagem',
                        'class'   => 'danger'
                    );
    
                    $this->session->set_flashdata('modal', $modal);
                    redirect('../cursos_cadastrados', 'redirect');  
                }
    
                file_put_contents($destination, $file);
    
            } else {
    
                $modal = array(
                    'success' => FALSE,
                    'message' => 'Imagem não enviada!',
                    'title'   => 'Erro ao salvar imagem',
                    'class'   => 'danger'
                );
    
                $this->session->set_flashdata('modal', $modal);
                redirect('../cursos_cadastrados', 'redirect');
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