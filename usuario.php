<?php

class Usuario
{
    private $idusuario;
    private $nombre;
    private $tipo;
    private $fechaNacimiento;
    
     function __construct($idusuario,$nombre,$tipo,$fechaNacimiento) {
       $this->idusuario = $idusuario;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fechaNacimiento = $fechaNacimiento;
     }
    
     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }
     function setFechanacimiento($fechaNacimiento){
       $this->fechaNacimiento = $fechaNacimiento;
     } 
     function getPass(){
       return $this->fechaNacimiento;
     }
}
?> 