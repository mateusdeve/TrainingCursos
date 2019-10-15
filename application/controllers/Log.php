<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	public function index() {
		
		$this->valida_logado();

		$data['css'] = array(
			'temas'
			);
		$data['js'] = array(
			'modal_caller'
		);

		$data['sessao'] =  $this->get_session();
		$this->load->model('log_model');
		

		$sessao =  $this->get_session();
        
        if($sessao['logado'] === TRUE &&  $sessao['perfil'] == 'admin')
            $where = 'all';
        else
            $where = $sessao['id_usuario'];
                
        $data['user_data'] = $this->log_model->listar_usuario($where);
		
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load_modal();
		$this->load->view('log_view',$data);
		$this->load->view('footer',$data);
	   
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
    private function valida_logado(){
        $sessao =  $this->get_session();
        if($sessao['logado'] === FALSE){
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