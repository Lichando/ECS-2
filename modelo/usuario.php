<?php

class Usuario{

    public $Id;
    public $NombreUsuario;
    public $Clave;
    public $Email;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $NroDocumento;
    public $FechaAlta;
    

    public function MostrarDatos(){
        echo "ID " . $this->Id ."<br>"
        ." Nombre Usuario" . $this->NombreUsuario . "<br>"
        ." Clave  " . $this->Clave ."<br>"
        ." Email  " . $this->Email ."<br>"
        ." Nombre " . $this->Nombre ."<br>"
        ."Apellido " . $this->Apellido ."<br>"
        ."FechaNacimiento" . $this->FechaNacimiento . "<br>"
        ." NroDocumento  " . $this->NroDocumento  ."<br>"
        ." FechaAlta " . $this->FechaAlta . " años.";
    }
}