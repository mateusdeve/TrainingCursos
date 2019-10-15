<?php
class certificados_model extends CI_Model
{
    
    public function checar_codigo($search) 
    {
        $this->db->select('`cursos`.`curso`');
        $this->db->select('`cadastro`.`nome`');
        $this->db->select('`cadastro`.`sobrenome`');
        $this->db->select('`certificados`.`codigo`');
        $this->db->select('`certificados`.`data`');
        $this->db->select('`certificados`.`link_certificado`');
        
        $this->db->join('`cadastro`','`cadastro`.`id` = `certificados`.`id_cadastro`','INNER');
        $this->db->join('`cursos`','`cursos`.`id` = `certificados`.`id_curso`','INNER');

        $this->db->where('codigo', $search);

        $query = $this->db->get('certificados');
        
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }
}


