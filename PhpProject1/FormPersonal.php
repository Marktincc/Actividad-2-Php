<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FormPersonal
 *
 * @author Aprendiz
 */
class FormPersonal {
    
    public $nombres = '';
    public $apellidos = '';
    public $fecha_nacimiento = '';
    public $documento = '';
    public $tipo_documento = '';
    public $telefono = '';
    public $direccion = '';
    public $ciudad = '';
    public $email = '';
    
    public function __construct($nombres, $apellidos, $fecha_nacimiento, $documento, $tipo_documento, $telefono, $direccion, $ciudad, $email) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->documento = $documento;
        $this->tipo_documento = $tipo_documento;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->email = $email;
    }
    
    
    
    public function getDataUser() {
        
        return $this->nombres . ' '.$this->apellidos;
    }
     public function getFullUser(){
    $data = "Nombres: " . $this->nombres . "\n";
    $data .= "Apellido: " . $this->apellidos . "\n";
    $data .= "Fecha de Nacimiento: " . $this->fecha_nacimiento . "\n";
    $data .= "Documento: " . $this->documento . "\n";
    $data .= "Tipo de Documento: " . $this->tipo_documento . "\n";
    $data .= "Teléfono: " . $this->telefono . "\n";
    $data .= "Dirección: " . $this->direccion . "\n";
    $data .= "Ciudad: " . $this->ciudad . "\n";
    $data .= "Email: " . $this->email . "\n";
   
    return $data;
       
    }
    //put your code here
}
