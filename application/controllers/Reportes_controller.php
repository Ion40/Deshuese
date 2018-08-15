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
        $this->load->model("DistribucionContable_model");
    }

    public function index()
    {
        $data["data"] = $this->DistribucionContable_model->getDistCont();
        $data["Mes"] = $this->Reportes_model->PrintDesuheseMesAnt();
        $data["Semana"] = $this->Reportes_model->PrintDesuheseSemanaAnt();
        $this->load->view("header/header");
        $this->load->view("pages/menu");
        $this->load->view("Reportes/Reportes",$data);
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

    //////////////////////////////////////////////////////////////////////////////////
    public function getDeshueseXFechas($fecha1,$fecha2)
    {
        $this->Reportes_model->getDeshueseXFechas($fecha1,$fecha2);
    }

    //////////////////////////////////////////////////////////////////////////////////
    public function PrintDeshueseRangos($fecha1,$fecha2)
    {
        $data["repo"] = $this->Reportes_model->printDesXFechas($fecha1,$fecha2);
        $this->load->view("Reportes/PrintDeshueseRango",$data);
    }

    public function PrintDistribucionCont($id)
    {
      $data["repo"] = $this->Reportes_model->PrintDistribucionCont($id);
      $this->load->view("Reportes/PrintDistribucionContable",$data);
    }

}
?>
