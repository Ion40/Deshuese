<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 24/7/2018
 * Time: 16:20
 */
class Deshuese_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("Deshuese_model");
    }

    public function index()
    {
        $data["mp"] = $this->Deshuese_model->getmateriaPrima();
        $data["ds"] = $this->Deshuese_model->getInfoDeshuese();
        $this->load->view("header/header");
        $this->load->view("pages/menu");
        $this->load->view("Deshuese/Deshuese",$data);
        $this->load->view("footer/footer");
        $this->load->view("jsview/jsDeshuese");
    }

    public function SaveEncabezado()
    {
        $Ndh = $this->input->get_post("Ndh");
        $FechaDH = $this->input->get_post("FechaDH");
        $DescDH = $this->input->get_post("DescDH");
        $PB = $this->input->get_post("PB");
        $CT = $this->input->get_post("CT");
        $MOD = $this->input->get_post("MOD");
        $GI = $this->input->get_post("GI");
        $ID = $this->input->get_post("ID");
        $this->Deshuese_model->saveEncabezado($Ndh,$FechaDH,$DescDH,$PB,$CT,$MOD,$GI,$ID);
    }

    public function SaveDeshuese()
    {
        $deshuese = $this->input->get_post("deshuese");
       $this->Deshuese_model->saveDeshuese($deshuese);
    }

    public function actualizarPrecioAnt($No_DH)
    {
        $this->Deshuese_model->actualizarPrecioAnt($No_DH);
    }
}
?>
