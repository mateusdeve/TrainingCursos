<?php 
class Cadastro_model extends CI_Model {
    
 public function insere_cadastro($post){

        date_default_timezone_set('America/Sao_Paulo');
            
        $hora_dia   = date('h:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(
            'nome'          => $post['nome'],
            'sobrenome'     => $post['sobrenome'],
            'telefonemovel' => $post['telefonemovel'],
            'telefonefixo'  => $post['telefonefixo'],
            'tipopessoa'    => $post['tipopessoa'],
            'cpfcnpj'       => $post['cpfcnpj'],
            'email'         => $post['email'],
            'cep'           => $post['cep'],
            'cidade'        => $post['cidade'],
            'endereco'      => $post['endereco'],
            'bairro'        => $post['bairro'],
            'curso'         => $post['curso'],
            'data'          => $data_dia,
            'hora'          => $hora_dia,

        );
        
        $this->db->insert('cadastro', $data);
    }
  
}