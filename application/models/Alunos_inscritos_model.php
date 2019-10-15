<?php 
class Alunos_inscritos_model extends CI_Model {

	 public function listar_usuario() 
	 {
        $query = $this->db->get('cadastro');

        if($query->num_rows() > 0) 
        {
            return $query->result();
        }

        else
         {
         	return NULL;
         }
    }

    public function alterar_usuario($post)
    {
              
        $data = array(

            'nome'          => $post['nome'],
            'sobrenome'     => $post['sobrenome'],
            'telefonemovel' => $post['telefonemovel'],
            'telefonefixo'  => $post['telefonefixo'],
            'cpfcnpj'       => $post['cpfcnpj'],
            'email'         => $post['email'],
            'cep'           => $post['cep'],
            'cidade'        => $post['cidade'],
            'endereco'      => $post['endereco'],
            'bairro'        => $post['bairro'],
            'curso'         => $post['curso'],
            'tipopessoa'    => $post['tipopessoa'],
        );
        $this->db->where('id', $post['id']);
    
        if($this->db->update('cadastro', $data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function deletar_usuario($id) 
    {
        $this->db->where('id', $id);

        
        if($this->db->delete('cadastro'))
            return TRUE;
        else
          return FALSE;
    }
}