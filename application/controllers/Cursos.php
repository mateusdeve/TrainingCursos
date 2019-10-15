<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
	public function index($file) {

		$this->load->helper('url');
		//header('Location: http://www.drenergia.net.br/curso/' . $file);exit;

		if(file_exists(base_url() . '/application/cursos/' . $file) && is_file(base_url() . '/application/cursos/' . $file))
		{
			header('Location: '.base_url() . '/application/cursos/' . $file);
		}
		else
		{
		    return array(
                'class'   => 'danger',
                'message' => 'Arquivo não encontrado!',
                'title'   => 'Erro Ao Enviar',
            );
		}
	   	
	}
}
?>