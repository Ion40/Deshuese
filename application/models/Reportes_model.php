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
        $query = $this->db->query("CALL usp_ReporteXNoDH('" . $NoDH . "')");
        $json = array();
        $i = 0;
        foreach ($query->result_array() as $key) {
            $json["data"][$i]["No_DH"] = $key["No_DH"];
            $json["data"][$i]["Descripcion_DH"] = $key["Descripcion_DH"];
            $json["data"][$i]["Precio_Bruto"] = $key["Precio_Bruto"];
            $json["data"][$i]["Costo_Total"] = $key["Costo_Total"];
            $json["data"][$i]["Materia_Prima"] = $key["Materia_Prima"] . " " . $key["Descripcion"];
            $json["data"][$i]["Kilos"] = number_format($key["Kilos"], 3);
            $json["data"][$i]["Calculo_Base"] = number_format($key["Calculo_Base"], 3);
            $json["data"][$i]["Valor_Total_Mercado"] = number_format($key["Valor_Total_Mercado"], 3);
            $json["data"][$i]["Rendimiento_D"] = $key["Rendimiento_D"];
            $json["data"][$i]["Total_Actual"] = number_format($key["Total_Actual"], 3);
            $json["data"][$i]["Costo_Unitario"] = number_format($key["Costo_Unitario"], 3);
            $json["data"][$i]["Rendimiento_B"] = number_format($key["Rendimiento_B"], 2);
            $i++;
        }
        echo json_encode($json);
    }

    public function getDeshueseHeader($NoDH)
    {
        $query = $this->db->query("CALL usp_ReporteXNoDH('" . $NoDH . "')");
        $json = array();
        $i = 0;
        foreach ($query->result_array() as $key) {
            $json["data"][$i]["No_DH"] = $key["No_DH"];
            $json["data"][$i]["Descripcion_DH"] = $key["Descripcion_DH"];
            $json["data"][$i]["Precio_Bruto"] = number_format($key["Precio_Bruto"],2);
            $json["data"][$i]["Costo_Total"] = number_format($key["Costo_Total"],2);
            $json["data"][$i]["Fecha"] = $key["Fecha"];
            $i++;
        }
        echo json_encode($json);
    }

    public function printDesXNo($NoDH)
    {
        $query = $this->db->query("CALL usp_ReporteXNoDH('" . $NoDH . "')");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;
    }
/****************************************************************************************************/
    public function getDistRecursos($Fecha)
    {
        $query = $this->db->query("CALL usp_ReporteDistRecursos('" . $Fecha . "')");
        $json = array();
        $i = 0;
        foreach ($query->result_array() as $key) {
            $json["data"][$i]["Masa_Obtenida"] = $key["Masa_Obtenida"];
            $json["data"][$i]["Materia_Prima"] = $key["Materia_Prima"];
            $json["data"][$i]["Descripcion"] = $key["Descripcion"];
            $json["data"][$i]["Valor_Kg"] = $key["Valor_Kg"];
            $json["data"][$i]["Porcentaje_Apli"] = $key["Porcentaje_Apli"];
            $json["data"][$i]["Fecha_Distribucion"] = $key["Fecha_Distribucion"];
            $json["data"][$i]["Fecha_Creacion"] = $key["Fecha_Creacion"];
            $json["data"][$i]["ValorKg"] = $key["ValorKg"];
            $json["data"][$i]["Porcentaje"] = $key["Porcentaje"];
            $i++;
        }
        echo json_encode($json);
    }
}
?>