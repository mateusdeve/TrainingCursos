<?php 
class Alunos_inadiplentes_model extends CI_Model {

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
}