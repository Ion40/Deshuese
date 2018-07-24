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
	    $data["user"] = $this->Usuarios_model->getUsuarios();
		$this->load->view("header/header");
		$this->load->view("pages/menu");
		$this->load->view("Usuarios/Usuarios",$data);
		$this->load->view("footer/footer");
        $this->load->view("jsview/jsUsuarios");
	}

	public function guardarUsuario()
    {
        $username = $this->input->get_post("username");
        $Nombre = $this->input->get_post("Nombre");
        $Pass = $this->input->get_post("Pass");
        $permiso = $this->input->get_post("permiso");
        $this->Usuarios_model->guardarUsuario($username,$Nombre,$Pass,$permiso);
    }
}
?>
