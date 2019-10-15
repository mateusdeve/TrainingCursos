<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
    }

	public function index() {

		$data['css'] = array(
			/*'bootstrap-grid',
			'bootstrap-grid.min',
			'bootstrap-reboot',
			'bootstrap-reboot.min',
			'bootstrap'*/
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
			'script',
		);
		$data['sessao'] =  $this->get_session();
		
		$limite = 8;

		$this->load->model('home_model');
		$data['user_data'] = $this->home_model->listar_cursos($limite);
		
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->view('home_view',$data);
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