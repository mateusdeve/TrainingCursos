<?php 
class Log_model extends CI_Model {

    public function listar_usuario($id_usuario) {


        $this->db->select('`login_aluno`.`id`');
        $this->db->select('`login_aluno`.`login`');
        $this->db->select('`login_aluno`.`senha`');
        $this->db->select('`cursos`.`endereco_link`');
        $this->db->select('`cursos`.`curso`');
        $this->db->join('`cadastro`','`cadastro`.`id` = `login_aluno`.`id_cadastro`','INNER');
        $this->db->join('`usuario_curso`','`usuario_curso`.`id_cadastro` = `login_aluno`.`id_cadastro`','INNER');
        $this->db->join('`cursos`','`cursos`.`id` = `usuario_curso`.`id_curso`','INNER');


       if($id_usuario !== 'all')
       {
            $this->db->where('`login_aluno`.`id`', $id_usuario);
       }
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
} 