<?php
class ProductosDH_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getMatPrim()
  {
    $i = 0;
    $json = array();
    $query = $this->db->get("materiaprima");
    foreach ($query->result_array() as $key) {
        $json["data"][$i]["Materia_prima"] = $key["Materia_prima"];
        $json["data"][$i]["Descripcion"] = $key["Descripcion"];
        $json["data"][$i]["Campo"] = "<input class='base' type='text' value='0' id='base".$key["Materia_prima"]."'>";
        $i++;
    }
    echo json_encode($json);
  }

  public function Guardar($array)
  {
    for ($i=0; $i < count($array); $i++) { 
      $Arraydata = explode(",", $array[$i]);
      $data = array(
        "Codigo" => $Arraydata[0],
        "Producto" => $Arraydata[1],
        "Materia_prima" => $Arraydata[2],
        "Descripcion" => $Arraydata[3],
        "Calculo_base" => $Arraydata[4]
      );
      $this->db->insert("productosdh",$data);
    }
  }

  public function getProductos()
  {
    $this->db->group_by("Codigo");
    $query = $this->db->get("productosdh");
    if ($query->num_rows() > 0) {
      return $query->result_array();
    }
    return 0;
  }

}
?>
