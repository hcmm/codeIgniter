<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller{


    public function index(){
        $this->load->template("usuarios/index.php");
    }

    public function novo(){
        $this->output->enable_profiler(TRUE);
        $this->load->model(array("pessoas_model", "usuarios_model", "cidades_model"));
        $this->cidades_model->nome = $this->input->post("cidade");
        $this->cidades_model->save();

//         echo "<tt><pre>" . var_export($this->cidades_model, TRUE). "</pre></tt>";

        $pessoa = new Pessoas_model();
        $pessoa->cidade_id = $this->cidades_model->id;
        $pessoa->nome = $this->input->post("nome");
        $pessoa->telefone = $this->input->post("telefone");
        $pessoa->celular = $this->input->post("celular");
        $pessoa->tipoPessoa = $this->input->post("tipo_de_usuario");
        $pessoa->save();

        $usuario = new Usuarios_model();
        $usuario->email = $this->input->post("email");
        $usuario->senha = $this->input->post("senha");
        $usuario->pessoa_id = $pessoa->id;
        $usuario->save();

        $data["usuario"] = $usuario;
        $data["pessoa"] = $pessoa;

//        if($pessoa["tipoPessoa"] == 1){
//            $this->load->template_cliente("usuarios/novo");
//        } else {
//            $this->load->template_design("usuarios/novo");
//        }
//        $this->load->template("home/index", $data);

       // echo html_escape($usuario->nome);
    }


    public function enviaEstados(){
        $estados = $this->load->model("estados_model");
        $lista = $estados->get();
        $estados_form = array();
        foreach($lista as $id => $estado){
            $estados_form[$id] = $estado->nome;
        }

        $this->load->view("index", array("estados_form" => $estados_form));

        //html

//        foreach($estados_form as $estado_id => $estado_name){
//            echo '<option value="'. html_escape($estado_id) . '">' . html_escape($estado_name) . '</option>';
//        }
    }

}