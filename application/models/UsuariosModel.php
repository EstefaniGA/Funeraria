<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuariosModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($usu, $con) {
        $this->db->select('Contraseña');
        $this->db->from('usuarios');
        $this->db->where('Nombre', $usu);
        $sql = $this->db->get();

        if ($sql->num_rows() > 0) {

            $sess = $sql->row();
            $bb = $this->encrypt->decode($sess->Contraseña);
            if ($sess->Contraseña == $con) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function datos($n) {
        $this->db->from('usuarios');
        $this->db->where('Nombre', $n);
        $sql = $this->db->get();
        return $sql->row();
    }

    public function addUser($nom, $pas, $priv) {
        $datos = array(
            'Nombre' => $nom,
            'Contraseña' => $pas,
            'Privilegios' => $priv,
               'Estatus' => 'si'
        );
        return $this->db->insert('usuarios', $datos);
    }

    public function listarUsuario() {
        $this->db->select('*');
        $this->db->from('usuarios');
        $sql = $this->db->get();
        return $sql->result();
    }

    public function usu() {
        $this->db->select('idUsuarios');
        $this->db->from('usuarios');
        $this->db->order_by('idUsuarios', 'desc');
        $this->db->limit(1);
        $sql = $this->db->get();
        return $sql->result();
    }

    public function modificarUsuario($id) {
        $this->db->from('usuarios');
        $this->db->where('idUsuarios', $id);
        $sql = $this->db->get();
        return $sql->row();
    }

    public function actualizarUsuario($id, $n, $pa, $pri) {
        $data = array(
            'Nombre' => $n,
            'Contraseña' => $pa,
            'Privilegios' => $pri);
        $this->db->where('idUsuarios', $id);
        $this->db->update('usuarios', $data);
    }

    public function eliminarUsuario($id) {
        $data = array(
            'Estatus'=>'no'
        );
        $this->db->where('idUsuarios', $id);
        $this->db->update('usuarios', $data);
    }
     public function activarUsuario($idus) {
        $datos = array(
            'Estatus'=>'si'
        );
        $this->db->where('idUsuarios', $idus);
        $this->db->update('usuarios',$datos);
    }

}
