<?php
 
namespace Jsolarte\PackageTest;
 
use Jsolarte\PackageTest\Respuesta;
 
class Principal {
 
    public function __construct(){}
 
    public function saludo()
    {
        return Respuesta::verdadero();
    }
}