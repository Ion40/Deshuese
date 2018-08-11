<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 9/8/2018
 * Time: 09:10
 */
class DistribucionContable_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function saveDistribucionCont($array)
  {
    for ($i=0; $i < count($array); $i++) {
      $dataArray = explode(",",$array[$i]);
      $data = array(
          "Salario" => $dataArray[0],
          "Vacaciones" => $dataArray[1],
          "TreceavoMes" => $dataArray[2],
          "Inatec" => $dataArray[3],
          "Inss" => $dataArray[4],
          "Costo_MOD" => $dataArray[5],
          "Gasto_Indirecto_Libra" => $dataArray[6],
          "Fecha" => Date("Y-m-d")
      );
      $this->db->insert("distribucion_contable",$data);
    }
  }

  public function ultimaDistribucion()
  {
     $this->db->order_by("Id_Dis_Rec","DESC");
     $this->db->limit(1);
     $query = $this->db->get("distribucion_contable");
     $json = array();
     $i = 0;
     foreach ($query->result_array() as $key) {
       $json["data"][$i]["Id_Dis_Rec"] = $key["Id_Dis_Rec"];
       $json["data"][$i]["Costo_MOD"] = $key["Costo_MOD"];
       $json["data"][$i]["Gasto_Indirecto_Libra"] = $key["Gasto_Indirecto_Libra"];
       $i++;
     }
     echo json_encode($json);
  }

  public function ActualizarGI()
  {
      $this->db->order_by("Id_Dis_Rec","DESC");
      $this->db->limit(1);
      $query = $this->db->get("distribucion_contable");
      foreach ($query->result_array() as $key) {

      }
  }

  public function getDistCont()
  {
    $query = $this->db->get("view_distribucion_contable");
    if ($query->num_rows() > 0) {
      return $query->result_array();
    }
    return 0;
  }

}
 ?>
