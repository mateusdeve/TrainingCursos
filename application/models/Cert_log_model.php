 <?php 
class Cert_log_model extends CI_Model {

    public function listar_usuario($id_usuario) {

        if($id_usuario)
            $this->db->where('codigo',$id_usuario);

        $query = $this->db->get('certificados');
 
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