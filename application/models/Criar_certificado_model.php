 <?php 
class Criar_certificado_model extends CI_Model {
    
    public function insere_certificado($post){
        $data = array(
            'codigo'            => $post['codigo'],
            'id_cadastro'       => $post['nome'],
            
        );

        $this->db->where('codigo', $data['codigo']);
        $codigo = $this->db->get('certificados');

        if( !empty($codigo->result()))
        {
            $this->db->where('codigo',$post['codigo']);
            $this->db->update('certificados', $data);
        }
        else
        {
            $this->db->insert('certificados', $data);
        }
            
    }

    public function new_insert($post){

        $data = array(
            'codigo'            => $post['codigo'],
            'cpf'               => $post['cpf'],
            'data_inicio'       => $post['data_inicio'],
            'data_fim'          => $post['data_fim'],
           'id_cadastro'        => $post['nome'],
           'id_curso'           => $post['curso'],
           'aproveitamento'     => $post['aproveitamento'],


        );
            
        $this->db->insert('criar_certificado', $data);
    }

    public function define($post){
        
        $this->insere_certificado($post);
        $this->new_insert($post);

    }

    public function checar_codigo($codigo) {

        $this->db->where('codigo', $codigo);
        $query = $this->db->get('certificados'); 
        if($query->num_rows() == 1) 
        {
            return FALSE;
        }
        else return TRUE;   
    }

    public function listar_cadastro() {

        $query = $this->db->get('cadastro');

        if($query->num_rows() > 0) {

            return $query->result();
        }
        else {
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