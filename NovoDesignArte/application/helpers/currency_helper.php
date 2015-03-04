<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 13/02/2015
 * Time: 00:41
 */

function numeroEmReais($numero) {
    return "R$ ". number_format($numero, 2, ",", ".");
}