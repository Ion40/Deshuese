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
        $json["data"][$i]["Campo"] = "<input type='text' value='0'>";
        $i++;
    }
    echo json_encode($json);
  }

}
?>
