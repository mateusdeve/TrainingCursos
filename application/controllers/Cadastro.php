<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	private $post;
    public function __construct(){
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('cadastro_model');
    }
	public function index() {
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
            'modal_caller',
            'validacao',
            'jQuery-Mask-Plugin-master/src/jquery.mask',
            'mascara'
		);
        $data['sessao'] =  $this->get_session();
		
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('head',$data);
		$this->load->view('menu',$data);
        $this->load_modal();
		$this->load->view('cadastro_view',$data);
		$this->load->view('footer',$data);

		$data['resposta'] = $this->valida_formulario();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

                $this->load->model('cadastro_model');
                $this->cadastro_model->insere_cadastro($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Aguarde, entraremos em contato com seu login e senha... 
                         para mais informações entre em contato com a empresa',
                        'title' => 'Cadastrado',
                        'class' => 'success'
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../cadastro', 'redirect');
            }
            
        }

	}
    /*Validando o formulario*/
	 private function valida_formulario() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('sobrenome', 'Sobrenome', 'required');
            $this->form_validation->set_rules('telefonemovel', 'Telefone Movel', 'required');
            $this->form_validation->set_rules('telefonefixo', 'Telefone Fixo', 'required');
            $this->form_validation->set_rules('tipopessoa', 'Tipo de Pesssoa', 'required');
            $this->form_validation->set_rules('cpfcnpj', 'CPF ou CNPJ', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('cep', 'CEP', 'required');
            $this->form_validation->set_rules('cidade', 'Cidade', 'required');
            $this->form_validation->set_rules('bairro', 'Bairro', 'required');
            $this->form_validation->set_rules('curso', 'Curso que deseja fazer', 'required');
            $this->form_validation->set_rules('endereco', 'Endereço', 'required');
            
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
	
}
?>