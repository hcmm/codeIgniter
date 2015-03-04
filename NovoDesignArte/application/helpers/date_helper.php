<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 16/02/2015
 * Time: 13:55
 */

function dataPtBrParaMysql($dataPtBr){
    $partes = explode("/", $dataPtBr);
    return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}


function dataMysqlParaPtBr($dataMysql){
    $data = new DateTime($dataMysql);
    return $data->format("d/m/Y");
}