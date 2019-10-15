<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index() {

		$this->valida_logado();

		$data['css'] = array(
		
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
			'modal_caller'
		);
		
		$data['sessao'] =  $this->get_session();
		
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load_modal();
		$this->load->view('admim_view',$data);
		$this->load->view('footer',$data);
		
	}

	/*metodo para a sessão */
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
    /*verifica se esta logado*/
      private function valida_logado(){
        $sessao =  $this->get_session();
        if($sessao['logado'] === FALSE){
            redirect('../login', 'redirect');
        }
        if ($sessao['perfil'] == 'aluno') {
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
?>