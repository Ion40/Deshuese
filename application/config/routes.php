<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/******** MIS RUTAS **********/
// LOGIN
$route['login'] = 'login_controller/Acreditar';
$route['salir'] = 'login_controller/Salir';

// FIN LOGIN

$route["Usuarios"] = "Usuarios_controller";
$route["SaveUsers"] = "Usuarios_controller/guardarUsuario";

// Deshuese
$route["Deshuese"] = "Deshuese_controller";
$route["GuardarEncabezado"] = "Deshuese_controller/SaveEncabezado";
$route["GuardarDeshuese"] = "Deshuese_controller/SaveDeshuese";
// Fin Deshuese

// Distribucion de Recursos
$route["Distribucion"] = "DistribucionRecursos_controller";
$route["GuardarDistribucion"] = "DistribucionRecursos_controller/saveDistribucion";
//Fin Distribucion de Recursos

$route["Reportes"] = "Reportes_controller";
$route["GetDeshuese/(:any)"] = "Reportes_controller/getDeshuese/$1";