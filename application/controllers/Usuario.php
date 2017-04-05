<?php

include_once 'Show.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UsuariosModel');
    }

    public function inicioSesion() {
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
        $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required');
        if ($this->form_validation->run() == true) {
            $n = $this->input->post('usuario');
            $p = $this->input->post('pass');
            $user = $this->UsuariosModel->login($n, $p);
            if ($user == TRUE) {
                $datos = $this->UsuariosModel->datos($n);

                $user_array = array(
                    'usuario' => $datos->idUsuarios,
                    'nombre' => $n,
                    'login' => TRUE,
                    'privilegios' => $datos->Privilegios
                );
                $this->session->set_userdata($user_array);
                if ($datos->Privilegios == 0 || $datos->Privilegios == 1) {

                    redirect('Show/administrador');
                }
                if ($datos->Privilegios == 2) {
                    redirect('Show/usuario');
                }
            } else {
                $data['nom'] = $this->session->userdata('');
                $data['tit'] = 'Inicio';
                $data['cont'] = 'index';
                $data['msg'] = true;
                $this->load->view('showIndex', $data);
            }
        } else {
            $data['nom'] = $this->session->userdata('');
            $data['tit'] = 'Inicio';
            $data['cont'] = 'index';
            $this->load->view('showIndex', $data);
        }
    }

    public function logOut() {
        $user_array = array(
            'login' => FALSE
        );
        $this->session->set_userdata($user_array);
        $data['nom'] = '';
        $data['tit'] = 'inicio';
        $data['cont'] = 'index';
        $this->load->view('showIndex', $data);
    }

    //agregar usuario
    public function addUser() {
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|is_unique[usuarios.Nombre]');
        $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('passdos', 'Verificar', 'trim|required|min_length[5]|matches[pass]');
        $this->form_validation->set_rules('privilegios', 'Privilegios', 'trim|required');

        if ($this->form_validation->run() == true) {
            $n = $this->input->post('usuario');
            $p = $this->input->post('pass');
            $pri = $this->input->post('privilegios');
            $pa = $this->encrypt->encode($p);
            $this->UsuariosModel->addUser($n, $p, $pri);
            $data['tit'] = 'Listar usuario';
            $data['cont'] = 'listarUsuario';
            redirect('Show/listarUsuario');
        } else {
            $data['nom'] = $this->session->userdata('nombre');
            $data['tit'] = 'Nuevo usuario';
            $data['cont'] = 'newUser';
            $this->load->view('show', $data);
        }
    }

//modificar Usuario


    public function modificarUsuario() {
        $this->form_validation->set_rules('id', 'Identificador', 'trim|required|integer');
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
        $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('passdos', 'Verificar', 'trim|required|min_length[5]|matches[pass]');
        $this->form_validation->set_rules('privilegios', 'Privilegios', 'trim|required');

        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $n = $this->input->post('usuario');
            $p = $this->input->post('pass');
            $pri = $this->input->post('privilegios');
            $pa = $this->encrypt->encode($p);
            $this->UsuariosModel->actualizarUsuario($id, $n, $p, $pri);
            $data['tit'] = 'Listar usuario';
            $data['cont'] = 'listarUsuario';
            redirect('Show/listarUsuario');
        } else {
            $data['tit'] = 'Modificar usuario';
            $data['cont'] = 'listarUsuario';
            redirect(('Show/menuUsuarios'));
        }
    }

    public function eliminarUsuario() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $this->UsuariosModel->eliminarUsuario($id);
            redirect('Show/listarUsuario');
        } else {
            redirect('Show/listarUsuario');
        }
    }
    
    public function activarUsuario(){
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $idus = $this->input->post('identificador');
            
            $this->UsuariosModel->activarUsuario($idus);
            
            redirect('Show/listarUsuario');
        } else {
            redirect('Show/index');
        }
    }

}
