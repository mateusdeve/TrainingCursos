<?php 
class Alunos_pagos_model extends CI_Model {

     public function listar_usuario() 
     {
        $this->db->select('`cadastro`.*, `pagamento`.`id` AS id_pagamento, `pagamento`.`id_usuario`, `pagamento`.`pg`');
        $this->db->join( '`pagamento`', '`cadastro`.`id` = `pagamento`.`id_usuario`', 'INNER' );

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

            'id_usuario'        => $post['id'],
            'pg'                => $post['pg'],
        );
        $this->db->where('id_usuario', $post['id']);
    
        if($this->db->update('pagamento', $data))
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
        $this->db->where('id_usuario', $id);

        
        if($this->db->delete('pagamento'))
            return TRUE;
        else
          return FALSE;
    }

}