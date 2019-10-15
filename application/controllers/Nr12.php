<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nr12 extends CI_Controller {
	public function index() {

		$data['css'] = array(
			
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
		);

		$data['sessao'] =  $this->get_session();
		
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->view('nr12_view',$data);
		$this->load->view('footer',$data);
		
	   
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

	
}
?>