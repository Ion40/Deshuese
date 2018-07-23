<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 23/7/2018
 * Time: 14:15
 */
class Usuarios_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		$this->load->view("header/header");
		$this->load->view("pages/menu");
		$this->load->view("Usuarios/Usuarios");
		$this->load->view("footer/footer");
	}
}

?>
