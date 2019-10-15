<?php
class Login_model extends CI_Model
{
    private $table = 'login_aluno';
    
    public function checar_login($post) 
    {
        
        $this->db->where('login', $post['user_login']);
        $this->db->where('senha', $post['user_password']);
        
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