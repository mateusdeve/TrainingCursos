<?php defined('BASEPATH') OR exit('No direct script access allowed');
class informar_pagamento extends CI_Controller
{
    private $post;
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('informar_pagamento_model');
    }
    public function index() 
    {
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

        $this->load->helper('form');
        $data['resposta'] = $this->validar_codigo();
        $this->load->view('head', $data);
        $this->load->view('menu', $data);
        $this->load->view('informar_pagamento_view', $data);
        $this->load_modal();
        $this->load->view('footer', $data);
    }
    public function validar_codigo() 
    {
        if (!empty($this->post)) 
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('codigo', '', 'required');
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
                $user = $this->informar_pagamento_model->checar_codigo($this->post);
                if ($user !== FALSE) 
                {

                    $sessao = array(
                        'id_usuario'    => $user->id, 
                        'nome'          => $user->nome,
                        'login'         => $user->login,
                        'perfil'        => 'admin',
                        'email'         => $user->email,
                        'logado'        => TRUE
                    );
                    $this->session->set_userdata($sessao);

                    $modal = array(
                        'success'   => TRUE,
                        'message'   =>'Aluno encontado',
                        'title'     => 'Sucesso',
                        'class'     => 'success'
                        );
            
                    $this->session->set_flashdata('modal', $modal);
                    redirect('../pagamento', 'redirect');
                }
                else
                {
                    $modal =  array(
                        'success'   => FALSE,
                        'class'     => 'danger',
                        'message'   => 'erro',
                        'title'     => 'Nõ existe aluno com esse código'
                    );
                    $this->session->set_flashdata('modal', $modal);
                     redirect('../informar_pagamento', 'redirect');
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