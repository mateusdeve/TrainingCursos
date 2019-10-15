<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	private $post;
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('certificados_model');
    }

	public function index()
	{
        
        $data['js'] = array(
            'modal_caller',
            'validacao',
        );
        //print_r($this->post);
        $resultado = null;

        if (isset($this->post['busca']) && !empty($this->post['busca'])) {
           $resultados = $this->certificados_model->checar_codigo($this->post['busca']);

        }

        //return json_encode($resultado);
        print_r(json_encode($resultados));
	}
}
