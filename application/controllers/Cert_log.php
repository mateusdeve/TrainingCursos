<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cert_log extends CI_Controller {
    private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('cert_log_model');
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
        $this->load->model('cert_log_model');
        

        $sessao =  $this->get_session();
        
        $where = $sessao['id_usuario'];
                
        $data['user_data'] = $this->cert_log_model->listar_usuario($where);

        $this->load->helper('form');
        $this->load->helper('url');
        $data['sessao'] =  $this->get_session();
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load_modal();
        $this->load->view('cert_log_view',$data);
        $this->load->view('footer',$data);

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