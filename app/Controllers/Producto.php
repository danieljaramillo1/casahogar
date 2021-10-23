<?php

namespace App\Controllers;

class Producto extends BaseController
{
    public function index()
    {
        return view('registroProducto');
    }
    public function registrar()
    {
        $producto=$this->request->getPost("producto");
        $fotografia=$this->request->getPost("fotografia");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");
        
        if($this->validate('registroProducto'))
        {
            echo("todo bien");
        }
        else{
            $mensaje="tenemos campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }
        /*
        $datos = array(
            "producto"=>$producto,
            "fotografia"=>$fotografia,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);
*/
    }

}
