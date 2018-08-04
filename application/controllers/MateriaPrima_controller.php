<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 3/8/2018
 * Time: 16:14
 */
class MateriaPrima_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("MateriaPrima_model");
    }

    public function index()
    {
        $data["materia"] = $this->MateriaPrima_model->getMateriasPrimas();
        $this->load->view("header/header");
        $this->load->view("pages/menu");
        $this->load->view("MateriaPrima/MateriaPrima",$data);
        $this->load->view("footer/footer");
        $this->load->view("jsview/jsMateriaPrima");
    }

    public function SaveMatPrim()
    {
        $numMatPrim = $this->input->get_post("numMatPrim");
        $Descripcion = $this->input->get_post("Descripcion");
        $this->MateriaPrima_model->SaveMatPrim($numMatPrim,$Descripcion);
    }

    public function UpdateMatPrim($id)
    {
        $numMatPrim = $this->input->get_post("numMatPrimedit");
        $Descripcion = $this->input->get_post("Descripcionedit");
        $this->MateriaPrima_model->UpdateMatPrim($id,$numMatPrim, $Descripcion);
    }

    public function UpdateEstado($id,$estado)
    {
        if ($estado == 1){
            $estad = 0;
        }else{
            $estad = 1;
        }
        $this->MateriaPrima_model->UpdateEstado($id,$estad);
    }
}
?>