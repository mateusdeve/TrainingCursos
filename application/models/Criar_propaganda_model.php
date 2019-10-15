<?php 
class Criar_propaganda_model extends CI_Model {
    
 public function insere_propaganda($post){
        $data = array(

            'curso'				=> $post['curso'],
            'modal'				=> $post['modal'],
            'imagem'			=> $post['nomeimg'],
            'valor'				=> $post['valor'],
            'sobre'				=> $post['sobre'],
            'implemento'		=> $post['implemento'],
            'sobre1'			=> $post['sobre1'],
            'sobre2'			=> $post['sobre2'],
            'sobre3'			=> $post['sobre3'],
            'sobre4'			=> $post['sobre4'],
            'chamada'           => md5($post['chamada']),
            'sobrecurso'        => $post['sobrecurso'],


        );
            
        $this->db->insert('dados', $data);
    }
  
}