<?php

class Usuarios_model extends MY_Model{
    const DB_TABLE = 'usuario';
    const DB_TABLE_PK = 'id';

    public $id;
    public $email;
    public $senha;
    public $pessoa_id;


    public function buscaPorEmailEsenha($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuario")->row_array(); //linha
        return $usuario;
    }

}
