<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 31/7/2018
 * Time: 16:09
 */
class Reportes_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getDeshuese($NoDH)
    {
        $query = $this->db->query("CALL usp_ReporteXNoDH('".$NoDH."')");
        $json = array();
        $i = 0;
        foreach ($query->result_array() as $key)
        {
            $json["data"][$i]["Materia_Prima"] = $key["Materia_Prima"]." ".$key["Descripcion"];
            $json["data"][$i]["Kilos"] = number_format($key["Kilos"],3);
            $json["data"][$i]["Calculo_Base"] = number_format($key["Calculo_Base"],3);
            $json["data"][$i]["Valor_Total_Mercado"] = number_format($key["Valor_Total_Mercado"],3);
            $json["data"][$i]["Rendimiento_D"] = $key["Rendimiento_D"];
            $json["data"][$i]["Total_Actual"] = number_format($key["Total_Actual"],3);
            $json["data"][$i]["Costo_Unitario"] = number_format($key["Costo_Unitario"],3);
            $json["data"][$i]["Rendimiento_B"] = number_format($key["Rendimiento_B"],2);
            $i++;
        }
        echo json_encode($json);
    }
}
?>