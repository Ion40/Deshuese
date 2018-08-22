<?php
class ProductosDH_controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library("session");
    $this->load->model("ProductosDH_model");
  }

  public function index()
  {
    $data["prod"] = $this->ProductosDH_model->getProductos();
    $this->load->view("header/header");
    $this->load->view("pages/menu");
    $this->load->view("ProductosDH/ProductosDH",$data);
    $this->load->view("footer/footer");
    $this->load->view("jsview/jsProductos");
  }

  public function getMatPrim()
  {
    $this->ProductosDH_model->getMatPrim();
  }

  public function GuardarPdh()
  {
    $array = $this->input->get_post("Array");
    $this->ProductosDH_model->Guardar($array);
  }
}
?>
