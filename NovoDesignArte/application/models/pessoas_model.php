<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 19/02/2015
 * Time: 22:59
 */

class Pessoas_model extends MY_Model{

    const DB_TABLE = 'pessoa';
    const DB_TABLE_PK = 'id';

    public $id;
    public $nome;
    public $tipoPessoa;
    public $status;
    public $dataCadastro;
    public $telefone;
    public $celular;
    public $cidade_id;


}
