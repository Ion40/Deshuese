<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->library("session");
        if ($this->session->userdata('logged') == 0) {

            redirect(base_url() . 'index.php', 'refresh');

        }
    }
    
    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('pages/menu');
        $this->load->view('pages/Main');
        $this->load->view('footer/footer');
        $this->load->view('jsview/jsMain');
    }

    public function mostrarInventario()
    {
        $this->Main_model->mostrarInventario();
    }

}