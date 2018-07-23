<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function mostrarInventario()
    {
        $query = $this->sqlsrv->fetchArray("SELECT * FROM dbo.AA_ARTICULO_PRECIO_TARIFA
        WHERE [PRECIO_S/IMP] !=0", SQLSRV_FETCH_ASSOC);
        $i = 0;
        $json = array();
        foreach ($query as $item) {
            $json["data"][$i]["ARTICULO"] = $item["ARTICULO"]; 
            $json["data"][$i]["DESCRIPCION"] = $item["DESCRIPCION"];
            $json["data"][$i]["PRECIO_S/IMP"] = $item["PRECIO_S/IMP"];
            $json["data"][$i]["NOMBRE_TARIFA"] = $item["NOMBRE_TARIFA"];
            $i++;
        }
        echo json_encode($json);
        $this->sqlsrv->close();
    }

}