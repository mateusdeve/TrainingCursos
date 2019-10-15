<?php 
class Home_model extends CI_Model {

     public function listar_cursos($limite) 
     {
        $this->db->limit( $limite, 0 );
        $query = $this->db->get('dados');

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