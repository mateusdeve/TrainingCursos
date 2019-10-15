<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criar_propaganda extends CI_Controller {

	private $post;
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('criar_propaganda_model');

    }

	public function index()
	{

         $data['css'] = array(
            'upload'
        );

        $data['js'] = array(

            'validacao',
            'modal_caller',
            'upload'
        );


        $data['sessao'] =  $this->get_session();

        $this->load->helper('form');
		$this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load_modal();
		$this->load->view('criar_propaganda_view', $data);
        $this->load->view('footer',$data);
	
        $data['resposta'] = $this->valida_propaganda();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {
                $this->load->model('criar_propaganda_model');
                $this->salvarImagem();
                $this->criar_propaganda_model->insere_propaganda($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Curso cadastrado com sucesso !',
                        'title' => 'Cadastrado',
                        'class' => 'success'
                        );

                $this->session->set_flashdata('modal', $modal);
                redirect('../criar_propaganda', 'redirect');

            }
            
        }

    }

    private function valida_propaganda() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('curso', 'Curso', 'required');
            $this->form_validation->set_rules('modal', 'O Que Vai Ter No Modal', 'required');
            $this->form_validation->set_rules('sobre', 'Sobre da Home', '');
            $this->form_validation->set_rules('implemento', 'Implemento da Home', 'required');
            $this->form_validation->set_rules('valor', 'Valor', 'required');
            $this->form_validation->set_rules('sobre1', 'Primeira informação', 'required');
            $this->form_validation->set_rules('sobre2', 'Segunda informação', 'required');
            $this->form_validation->set_rules('sobre3', 'Terceira informação', 'required');
            $this->form_validation->set_rules('sobre4', 'Quarta informação', 'required');
            $this->form_validation->set_rules('chamada', 'Chamada para o modal', 'required');
            $this->form_validation->set_rules('sobrecurso', 'Sobre o Curso', 'required');
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
                
                'logado' => FALSE
                
                );
            
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
            redirect('./criar_propaganda', 'redirect');
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
                redirect('./criar_propaganda', 'redirect');  
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
            redirect('./criar_propaganda', 'redirect');
        }
    }

}