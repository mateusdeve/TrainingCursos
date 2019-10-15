<?php 
class Curso_model extends CI_Model {
    
 public function listar_curso( $id ){

        /*$this->db->select('imagens');*/
        $this->db->where('id', $id);

        $query = $this->db->get( 'dados' );

        if ($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return FALSE;
        }
    }
  
}
