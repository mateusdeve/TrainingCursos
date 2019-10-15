 <?php 
class Pagamento_model extends CI_Model {

    public function insere_pagamento($post){
        $data = array(

            'pg'                => $post['pg'],
            'id_usuario'   		=> $post['id_usuario']
        );
            
        $this->db->insert('pagamento', $data);
    }

    public function listar_usuario($id_usuario) {

    	if($id_usuario)
        	$this->db->where('id',$id_usuario);

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