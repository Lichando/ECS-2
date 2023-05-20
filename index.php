<?php
/*Respetando la arquitectura propuesta.
Declarar una clase “Usuario” con las siguientes propiedades: 
Id
NombreUsuario
Clave
Email
Nombre
Apellido
FechaNacimiento
NroDocumento
FechaAlta
Agregar un método “MostrarDatos” a la clase Usuario que imprima todas sus propiedades básicas.
En un archivo llamado index.php instanciar la clase Usuario, completar sus propiedades(Inventadas).
Finalmente llamar al método que imprime las propiedades de la clase Usuario.*/
require_once 'modelo/usuario.php'; 

$usuario = new Usuario();
$usuario->Id = "3";
$usuario->NombreUsuario = "JaviMilei";
$usuario->Clave = "VivaLaLibertad";
$usuario->Email= "javiermilei2023@gmail.com";
$usuario->Nombre = "Javier";
$usuario->Apellido = "Milei";
$usuario->FechaNacimiento = "22/10/1970";
$usuario->NroDocumento= "23.094.213";
$usuario->FechaAlta= "10/12/2023";

$usuario->MostrarDatos();
?>
