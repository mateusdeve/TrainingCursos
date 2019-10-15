<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginacao extends CI_Controller {

	private $post;
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('paginacao_model');
    }

	public function index()
	{
        
        $data['js'] = array(
            'modal_caller',
            'validacao',
        );
        //print_r($this->post);

        $limite = 4;
        $pagina = isset($this->post['pagina']) ? $this->post['pagina'] : 0;

       $resultado  = $this->paginacao_model->listar_curso($limite, $pagina);
       $paginas    = $this->paginacao_model->contar_paginas( $limite );

       $dados       = [
            'cursos'  => $resultado,
            'paginas' => $paginas,
       ];

        print_r(json_encode($dados));
	}
}

/*$search = new Search();
$search->index();*/