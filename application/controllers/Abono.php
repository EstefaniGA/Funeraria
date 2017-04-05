<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Abono extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AbonoModel');
        $this->load->model('OrdenModel');
    }

    public function abono() {
        //$this->form_validation->set_rules('folio', 'Folio', 'trim|required');
        //$this->form_validation->set_rules('sucursal', 'Sucursal', 'trim');
        //$this->form_validation->set_rules('fecha', 'Fecha', 'trim|required');
        $this->form_validation->set_rules('abono', 'Abono', 'trim|required');
        $this->form_validation->set_rules('fore', 'Folio Resivo', 'trim|required');
        $this->form_validation->set_rules('saldo', 'saldo', 'trim|required');
        if ($this->form_validation->run() == true) {
            $fol = $this->input->post('folio');
            $sucu = $this->input->post('sucursal');
            $fech = $this->input->post('fecha');
            $abono = $this->input->post('abono');
            $fore = $this->input->post('fore');
            $saldo= $this->input->post('saldo');
//            actualiza restante de tb orden
            $this->AbonoModel->ActualizarRestante($fol, $abono,$saldo);
//            agregar abono
            $this->AbonoModel->agregarabono($fol, $sucu, $abono, $fore, $fech);
            $data['tit'] = 'Abono';
            $data['cont'] = 'abono';
            $data['su'] = $this->OrdenModel->sel();
            $data['nom'] = $this->session->userdata('nombre');
            
            $data['resultado'] = $this->AbonoModel->seleccionar($fol);
            $data['res'] = $this->AbonoModel->abonos($fol);
            $this->load->view('show', $data);
        } else {
            redirect('Show/buscador');
        }
    }

}
