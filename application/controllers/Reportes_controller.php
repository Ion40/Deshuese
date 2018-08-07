<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 31/7/2018
 * Time: 11:03
 */
class Reportes_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("Reportes_model");
    }

    public function index()
    {
        $this->load->view("header/header");
        $this->load->view("pages/menu");
        $this->load->view("Reportes/Reportes");
        $this->load->view("footer/footer");
        $this->load->view("jsview/jsReportes");
    }

    public function getDeshuese($NoDH)
    {
        $this->Reportes_model->getDeshuese($NoDH);
    }
    public function getDeshueseHeader($NoDH)
    {
        $this->Reportes_model->getDeshueseHeader($NoDH);
    }

    public function PrintDeshueseReport($NoDH)
    {
        $data["repor"] = $this->Reportes_model->printDesXNo($NoDH);
        $this->load->view("Reportes/PrintDeshuese",$data);
    }
    //////////////////////////////////////////////////////////////////////////////////
    public function getDistRecursos($Fecha)
    {
        $this->Reportes_model->getDistRecursos($Fecha);
    }

    public function PrintDistribucion($Fecha)
    {
        $data["repor"] = $this->Reportes_model->getDistribucionXFecha($Fecha);
        $this->load->view("Reportes/PrintDistribucion",$data);
    }
}
?>