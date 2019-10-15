<?php 
class Apresentar_login_model extends CI_Model {

     public function listar_usuario() 
     {

        $this->db->select('`login_aluno`.`id`');
        $this->db->select('`login_aluno`.`login`');
        $this->db->select('`login_aluno`.`id_cadastro`');
        $this->db->select('`login_aluno`.`senha`');
        $this->db->select('`login_aluno`.`perfil`');
        $this->db->select('`cadastro`.`nome`');
        $this->db->select('`cadastro`.`sobrenome`');
        $this->db->join('`cadastro`','`cadastro`.`id` = `login_aluno`.`id_cadastro`','INNER');

        $query = $this->db->get('login_aluno');

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

            'login'             => $post['login'],
            'senha'             => $post['senha'],
            'perfil'            => $post['perfil']
        );
        $this->db->where('id', $post['id']);
    
        if($this->db->update('login_aluno', $data))
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

        if($this->db->delete('login_aluno'))
            return TRUE;
        else
          return FALSE;
    }

}