<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 27/7/2018
 * Time: 14:43
 */
class DistribucionRecursos_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("Deshuese_model");
        $this->load->model("DistribucionRecursos_model");
    }

    public function index()
    {
        $data["mp"] = $this->Deshuese_model->getmateriaPrima();
        $data["dis"] = $this->DistribucionRecursos_model->getInfoDistribucion();
        $this->load->view("header/header");
        $this->load->view("pages/menu");
        $this->load->view("Recursos/Recursos",$data);
        $this->load->view("footer/footer");
        $this->load->view("jsview/jsRecursos");
    }

    public function saveDistribucion()
    {
        $recursos = $this->input->get_post("recursos");
        $this->DistribucionRecursos_model->saveDistribucion($recursos);
        print_r($recursos);
    }

    public function getArticulos()
    {
      $this->DistribucionRecursos_model->getArticulos();
    }
}
?>
