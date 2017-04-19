<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Abono extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AbonoModel');
        $this->load->model('OrdenModel');
    }
    private $b=0;

    public function abono() {
        
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
            
            $user_array = array(
                    'idf' => $fol
                );
            $this->session->set_userdata($user_array);
                
            redirect('Show/abono');
        } else {
            redirect('Show/buscador');
        }
    }

}
