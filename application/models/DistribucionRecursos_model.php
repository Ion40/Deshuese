<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 30/7/2018
 * Time: 12:25
 */
class DistribucionRecursos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function saveDistribucion($array)
    {
        for ($i=0; $i < count($array); $i++) {
            $Array = explode(",", $array[$i]);
            $insertDis = array(
                "Masa_Obtenida" => $Array[0],
                "Materia_Prima" => $Array[1],
                "Descripcion" => $Array[2],
                "Valor_Kg" => $Array[3],
                "Porcentaje_Apli" => $Array[4],
                "Fecha_Distribucion" => $Array[5],
                "Fecha_Creacion" => date("Y-m-d")
            );
            $this->db->insert("DistribucionRecursos", $insertDis);
        }
    }

    public function getInfoDistribucion()
    {
        $query = $this->db->get("view_Distribucion");
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;
    }

    public function getArticulos()
    {
      $json = array();
      $i = 0;
      $query = $this->db->get("articulos");
      foreach ($query->result_array() as $key) {
        $json[$i]["Cod_Articulo"] = $key["Cod_Articulo"];
        $json[$i]["Descripcion"] = $key["Descripcion"];
        $i++;
      }
      echo json_encode($json);
    }
}
?>
