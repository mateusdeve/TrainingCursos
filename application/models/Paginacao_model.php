<?php
class Paginacao_model extends CI_Model
{
    private $table = 'dados';
    
    public function listar_curso( $limite, $pagina )
    {
        $offset = $limite * $pagina;
        $this->db->limit( $limite, $offset );
        
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function contar_paginas( $limite )
    {
     
        $this->db->select( 'COUNT(*) AS qtd' );
        
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0)
        {
            $result = $query->result();
            $qtd    = $result[0]->qtd;

            return ceil($qtd / $limite);
        }
        else
        {
            return NULL;
        }
    }
}