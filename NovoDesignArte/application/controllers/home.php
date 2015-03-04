<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{

    public function index(){
        $this->load->template("home/index.php");
    }

    public function produtos(){
        $this->load->template("home/produtos.php");
    }

    public function contato(){
        $this->load->template("home/contato.php");
    }

}