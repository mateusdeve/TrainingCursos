<?php 
class Apresentar_certificado_model extends CI_Model {

     public function listar_usuario() 
     {

        $this->db->select('`cursos`.`curso`');
        $this->db->select('`cadastro`.`nome`');
        $this->db->select('`cadastro`.`sobrenome`');
        $this->db->select('`certificados`.`codigo`');
        $this->db->select('`certificados`.`link_certificado`');
        $this->db->select('`certificados`.`data`');
        $this->db->select('`certificados`.`id`');
        
        $this->db->join('`cadastro`','`cadastro`.`id` = `certificados`.`id_cadastro`','INNER');
        $this->db->join('`cursos`','`cursos`.`id` = `certificados`.`id_curso`','INNER');

        $query = $this->db->get('certificados');

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

            'codigo'             => $post['codigo'],
            'link_certificado'   => $post['link_certificado'],
        );
        $this->db->where('id', $post['id']);
    
        if($this->db->update('certificados', $data))
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

        
        if($this->db->delete('certificados'))
            return TRUE;
        else
          return FALSE;
    }

}