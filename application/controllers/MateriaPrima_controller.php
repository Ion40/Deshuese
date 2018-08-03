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
    }

    public function index()
    {
        $this->load->view("header/header");
        $this->load->view("pages/menu");
        $this->load->view("MateriaPrima/MateriaPrima");
        $this->load->view("footer/footer");
        $this->load->view("jsview/jsMateriaPrima");
    }
}
?>