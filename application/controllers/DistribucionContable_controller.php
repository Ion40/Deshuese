<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 8/8/2018
 * Time: 15:09
 */
 class DistribucionContable_controller extends CI_Controller
 {

   function __construct()
   {
     parent::__construct();
     $this->load->library("session");
     $this->load->model("DistribucionContable_model");
   }

   public function index()
   {
     $this->load->view("header/header");
     $this->load->view("pages/menu");
     $this->load->view("Recursos/RecursosContables");
     $this->load->view("footer/footer");
     $this->load->view("jsview/jsRecursosCont");
   }

   public function saveDistribucionCont()
   {
     $array = $this->input->get_post("array");
     $this->DistribucionContable_model->saveDistribucionCont($array);
   }

   public function ultimaDistribucion()
   {
     $this->DistribucionContable_model->ultimaDistribucion();
   }

 }
?>
