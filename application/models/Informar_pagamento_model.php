<?php
class Informar_pagamento_model extends CI_Model
{
    private $table = 'cadastro';
    
    public function checar_codigo($post) 
    {
        $this->db->where('id', $post['codigo']);
        $query = $this->db->get($this->table);
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


