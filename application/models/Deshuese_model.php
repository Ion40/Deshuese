<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 25/7/2018
 * Time: 08:06
 */
class Deshuese_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getmateriaPrima()
    {
        $query = $this->db->get("MateriaPrima");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;
    }

    public function saveEncabezado($NDH,$fecha,$DescDH,$PB,$CT)
    {
        $data = array(
            "No_DH" => $NDH,
            "Fecha" => $fecha,
            "Descripcion_DH" => $DescDH,
            "Precio_Bruto" => $PB,
            "Costo_Total" => $CT
        );
        $this->db->insert("Encabezado_Deshuese",$data);
    }

    public function saveDeshuese($deshuese)
    {
        for ($i=0; $i < count($deshuese); $i++) {
            $array = explode(",", $deshuese[$i]);
            $insertDes = array(
                "No_DH" => $array[0],
                "Materia_Prima" => $array[1],
                "Descripcion" => $array[2],
                "Prec_Act_Kilo" => number_format($array[3],2),
                "Calculo_Base" => $array[4],
                "Rendimiento_B" => number_format($array[5],2),
                "Rendimiento_D" => $array[6],
                "Kilos" => $array[7],
                "Valor_Total_Mercado" => $array[8],
                "Costo_Unitario" => $array[9],
                "Total_Actual" => $array[10]
            );
            $this->db->insert("Deshuese", $insertDes);
        }
    }

    public function getInfoDeshuese()
    {
        $query = $this->db->get("view_Deshuese");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;
    }
}
?>