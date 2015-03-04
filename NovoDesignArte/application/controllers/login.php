<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 14/02/2015
 * Time: 17:58
 */
class Login extends CI_Controller {

    public function index(){
        $this->load->template("login/index.php");
    }
    public function autenticar(){
        $this->output->enable_profiler(TRUE);
        $this->load->model("usuarios_model");
        $usuario = new Usuarios_model();
        $usuario->email = $this->input->post("email");
        $usuario->senha = $this->input->post("senha");
        $usuario = $usuario->buscaPorEmailESenha($usuario->email, $usuario->senha);
        if($usuario){
            $this->session->set_userdata(array("usuario_logado" => $usuario));
            $this->session->set_flashdata("success", "Logado com sucesso");
        } else {
            $this->session->set_flashdata("danger", "Usuario ou senha invalida");
        }
        //redirect('/');
    }


    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success", "Deslogado com sucesso");
        //$this->load->view("login/logout");
        redirect('/');
    }
}