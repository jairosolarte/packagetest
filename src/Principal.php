<?php
 
namespace Yantb\PackageTest;
 
use Yantb\PackageTest\Respuesta;
 
class Principal {
 
    public function __construct(){}
 
    public function saludo()
    {
        return Respuesta::verdadero();
    }
}