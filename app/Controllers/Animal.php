<?php

namespace App\Controllers;

class Animal extends BaseController
{
    public function index()
    {
        return view('registroAnimal');
    }

    public function registrarA()
    {
        $nombre=$this->request->getPost("nombre");
        $edad=$this->request->getPost("edad");
        $foto=$this->request->getPost("foto");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        if($this->validate('registroAnimal')){
            echo("todo bien");
        }
        else{

            $mensaje="tenemos campos sin llenar";
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje',$mensaje);
            
        }
        /*
        $datos = array(
            "nombre"=>$nombre,
            "edad"=>$edad,
            "foto"=>$foto,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);
        */
    }
}