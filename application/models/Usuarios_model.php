<?php
class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUsuarios()
    {
        $query = $this->db->get("usuarios");
        if ($query->num_rows()>0) {
            return $query->result_array();
        }
        return 0;
    }

    public function guardarUsuario()
    {
        date_default_timezone_set("America/Managua");
        $data = array(
        );
        $this->db->insert('usuarios',$data);
    }

    public function actualizarPassword($Id,$Pass)
    {
        $data = array(
            "IdUsuario" => $Id,
            "Password" => $Pass
        );
        $this->db->where("IdUsuario", $Id);
        $query = $this->db->update("usuarios",$data);
        if ($query) {
            echo true;
        }
        else {
            echo false;
        }
    }

    public function eliminarUsuario($id)
    {
        $this->db->where("IdUsuario", $id);
        $this->db->delete("usuarios");
    }
}
