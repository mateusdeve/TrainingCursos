<?php 
class Apresentar_matricula_model extends CI_Model {

     public function listar_usuario() 
     {

        $this->db->select('`usuario_curso`.`id`');
        $this->db->select('`login_aluno`.`data`');
        $this->db->select('`login_aluno`.`hora`');
        $this->db->select('`usuario_curso`.`login`');
        $this->db->select('`usuario_curso`.`id_cadastro`');
        $this->db->select('`cadastro`.`nome`');
        $this->db->select('`cadastro`.`sobrenome`');
        $this->db->select('`cursos`.`endereco_link`');
        $this->db->select('`cursos`.`curso`');
        $this->db->select('`login_aluno`.`login`');
        $this->db->select('`login_aluno`.`senha`');
        $this->db->select('`login_aluno`.`perfil`');
        $this->db->join('`cadastro`','`cadastro`.`id` = `usuario_curso`.`id_cadastro`','INNER');
        $this->db->join('`login_aluno`','`login_aluno`.`login` = `usuario_curso`.`login`','INNER');
        $this->db->join('`cursos`','`cursos`.`id` = `usuario_curso`.`id_curso`','INNER');

        $query = $this->db->get('usuario_curso');

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

        if($this->db->delete('usuario_curso'))
            return TRUE;
        else
          return FALSE;
    }

    public function listar_curso() 
    {
        $query = $this->db->get('cursos');

        if($query->num_rows() > 0) 
        {
            return $query->result();
        }

        else
         {
            return NULL;
         }
    }

}