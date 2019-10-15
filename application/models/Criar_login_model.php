<?php 
class Criar_login_model extends CI_Model {
    
 public function insere_login($post){
        date_default_timezone_set('America/Sao_Paulo');
            
        $hora_dia   = date('h:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(
            
            'login'                 => $post['login'],
            'perfil'                => 'aluno',
            'senha'                 => $post['senha'],
            'id_cadastro'           => $post['nome'],//@mateus pegando o id do cadastro pelo nome
            'data'                  => $data_dia,
            'hora'                  => $hora_dia,

        );

        $this->db->where('login', $data['login']);
        $login = $this->db->get('login_aluno');

        if( !empty($login->result()))
        {
            $this->db->where('login',$post['login']);
            $this->db->update('login_aluno', $data);
        }
        else
        {
            $this->db->insert('login_aluno', $data);
        }
    }

     public function new_insert($post){
        $date = date('d-m-y');

        $data = array(
           'id_cadastro'    => $post['nome'],
           'id_curso'       => $post['curso'],
           'data_curso'     => $date,
           'login'          => $post['login'],

        );
            
        $this->db->insert('usuario_curso', $data);
    }

    public function define($post){
        
        $this->insere_login($post);
        $this->new_insert($post);

    }

    public function checar_login($login)
    {
        $this->db->where('login', $login);
        $query = $this->db->get('login_aluno'); 
        if($query->num_rows() == 1) 
        {
            return FALSE;
        }
        else return TRUE;   
    }

    public function listar_nome() 
    {
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

    public function listar_curso() 
    {
        $query = $this->db->get('cursos');

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