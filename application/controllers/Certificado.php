<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificado extends CI_Controller {

      private $post;
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('certificados_model');
    }

    public function index()
    {
        $data['css'] = array(
            'busca'
        );

        $data['js'] = array(
            'modal_caller',
            'validacao',
            'search'
        );
        
        $this->load->helper('form');

        $data['sessao'] =  $this->get_session();

        if (!isset($this->post['busca'])) {
            $this->post['busca'] = '';
        }else
             $data['user_data'] = $this->certificados_model->checar_codigo($this->post['busca']);


       

        $data['busca'] = $this->post['busca'];
        $this->load->helper('form');
        $this->procurar_certificado();

        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('certificado_view',$data);
        $this->load_modal();
        $this->load->view('footer',$data);
    
    }

    /*validando se existe o software*/
    public function procurar_certificado() 
    {
        if (!empty($this->post)) 
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('busca', 'Insira o Codigo', 'required');

            if ($this->form_validation->run() == FALSE) 
            {
                return array(
                    'success'   => FALSE,
                    'class'     => 'danger',
                    'message'   => validation_errors("<span>", "</span>") ,
                    'title'     => 'Erro Ao Enviar'
                );
            }
            else
            { 
                $user = $this->certificados_model->checar_codigo($this->post['busca']);
                if ($user ==FALSE) 
                {
                    $modal =  array(
                        'success'   => FALSE,
                        'class'     => 'danger',
                        'message'   => 'Não encontrado',
                        'title'     => 'Não existe um software com esse nome'
                    );

                    $this->session->set_flashdata('modal', $modal);
                }
            }
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

    public function get_session(){
            
            $sessao = $this->session->all_userdata();
            if(isset($sessao['logado'])){
                return $sessao;
            }
            return array(
                
                'logado' => FALSE,
                'perfil' => NULL
                
                );
            
        }
}
