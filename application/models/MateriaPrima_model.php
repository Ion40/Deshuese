<?php
/**
 *  * Created by César Mejía Calderón.
 * User: César Mejía Calderón
 * Date: 4/8/2018
 * Time: 08:43
 */
class MateriaPrima_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getMateriasPrimas()
    {
        $query = $this->db->get("materiaprima");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;
    }

    public function SaveMatPrim($mp, $desc)
    {
        $data = array(
            "Materia_prima" => $mp,
            "Descripcion" => $desc,
            "Estado" => 1
        );
        $this->db->insert("materiaprima", $data);
    }

    public function UpdateMatPrim($id,$mp,$desc)
    {
        $this->db->where("Id_MP",$id);
        $data = array(
            "Materia_prima" => $mp,
            "Descripcion" => $desc
        );
        $this->db->update("materiaprima",$data);
    }

    public function UpdateEstado($id,$est)
    {
        $this->db->where("Id_MP",$id);
        $data = array(
            "Estado" => $est,
        );
        $this->db->update("materiaprima",$data);
    }
}
?>