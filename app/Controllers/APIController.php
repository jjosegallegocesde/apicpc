<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIController extends ResourceController {
    
    protected $modelName = 'App\Models\UsuarioModelo';
    protected $format    = 'json';

    public function index() {
        return $this->respond($this->model->findAll());
    }

    public function registrar(){

        //SE RECIBEN DATOS DEL CLIENTE
        $nombre=$this->request->getPost("nombre");
        $correo=$this->request->getPost("correo");
        $password=$this->request->getPost("password");

        //SE CREA ARREGLO CON LOS DATOS RECIBIDOS
        $arregloDatos=array(

            "nombre"=>$nombre,
            "correo"=>$correo,
            "password"=>$password
        );

        //SE CREA LA OPERACIÓN EN LA BD PARA GRABAR LA INFORMACIÓN
        $id=$this->model->insert($arregloDatos);

        //CONFIGURO LA RESPUESTA
        $mensaje=array(
            "msj"=>"exito agregando el usuario",
            "estado"=>true
        );

        return $this->respond(json_encode($mensaje));


    }


    
}