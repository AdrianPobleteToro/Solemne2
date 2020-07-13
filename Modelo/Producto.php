<?php

class Producto {
    private $id;
    private $nombre;
    private $precio;
    private $cantidad;
    
    function __construct() {
        $this->setId(-1);
        $this->setNombre("Sin nombre");
        $this->setPrecio(.0);
        $this->setCantidad(1);
    }
    
    function getId(){
        return $this->id;
    }
    
    function getNombre(){
        return $this->nombre;
    }
    
    function getPrecio(){
        return $this->precio;
    }
    
    function getCantidad(){
        return $this->cantidad;
    }
    
    function setId($id){
        return $this->id = $id;
    }
    
    function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    
    function setPrecio($precio){
        return $this->precio = $precio;
    }
    
    function setCantidad($cantidad){
        return $this->cantidad = $cantidad;
    }
    
    
}
