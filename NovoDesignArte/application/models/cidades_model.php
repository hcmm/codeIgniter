<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 19/02/2015
 * Time: 22:59
 */

class Cidades_model extends MY_Model{

    const DB_TABLE = 'cidade';
    const DB_TABLE_PK = 'id';

    public $id;
    public $nome;
    public $uf_id;

}
