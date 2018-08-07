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

$route["ActualizarPrecioAnt/(:any)"] = "Deshuese_controller/actualizarPrecioAnt/$1";
// Fin Deshuese

// Distribucion de Recursos
$route["Distribucion"] = "DistribucionRecursos_controller";
$route["GuardarDistribucion"] = "DistribucionRecursos_controller/saveDistribucion";
//Fin Distribucion de Recursos

$route["Reportes"] = "Reportes_controller";
$route["GetDeshuese/(:any)"] = "Reportes_controller/getDeshuese/$1";
$route["GetDeshueseHeader/(:any)"] = "Reportes_controller/getDeshueseHeader/$1";
$route["PrintDeshuese/(:any)"] = "Reportes_controller/PrintDeshueseReport/$1";

$route["GetDistRecursos/(:any)"] = "Reportes_controller/getDistRecursos/$1";
$route["PrintDistribucionRec/(:any)"] = "Reportes_controller/PrintDistribucion/$1";

$route["GetDeshueseXFechas/(:any)/(:any)"] = "Reportes_controller/getDeshueseXFechas/$1/$2";

//Materia Prima
$route["Materia_Prima"] = "MateriaPrima_controller";
$route["GuardarMteriaPrima"] = "MateriaPrima_controller/SaveMatPrim";
$route["ActualizarMteriaPrima/(:any)"] = "MateriaPrima_controller/UpdateMatPrim/$1";
$route["ActualizarEstMteriaPrima/(:any)/(:any)"] = "MateriaPrima_controller/UpdateEstado/$1/$2";
//Fin Materia Prima