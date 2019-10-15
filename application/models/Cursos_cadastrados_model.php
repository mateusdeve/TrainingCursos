<?php 
class Cursos_cadastrados_model extends CI_Model {

     public function listar_usuario() 
     {
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

    public function alterar_usuario($post)
    {
              
        $data = array(

            'modal'         => $post['modal'],
            'curso'         => $post['curso'],
            'sobre'         => $post['sobre'],
            'implemento'    => $post['implemento'],
            'valor'         => $post['valor'],
            'sobre1'        => $post['sobre1'],
            'sobre2'        => $post['sobre2'],
            'sobre3'        => $post['sobre3'],
            'sobre4'        => $post['sobre4'],
            'chamada'       => $post['chamada'],
            'sobrecurso'    => $post['sobrecurso'],
        );
        $this->db->where('id', $post['id']);
    
        if($this->db->update('dados', $data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function alterar_imagem($post)
    {
        $data = array(

            'imagem'    => $post['nomeimg'],
        );
        $this->db->where('id', $post['id']);
    
        if($this->db->update('dados', $data))
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

        
        if($this->db->delete('dados'))
            return TRUE;
        else
          return FALSE;
    }

}