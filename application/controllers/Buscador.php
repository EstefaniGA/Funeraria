<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buscador extends CI_Controller{
    public function __construct() {
        parent::__construct();
          $this->load->model("BuscadorModel");
       
        
    }
    public function buscar(){
         $this->form_validation->set_rules('tabla','Tabla','trim|required');
          $this->form_validation->set_rules('buscar','Buscar','trim|required');
         if($this->form_validation->run()==true){
             $busca=$this->input->post('buscar');
        $tabl=$this->input->post('tabla');
        $resultado= $this->BuscadorModel->buscar($busca,$tabl);
        
            
                  $data['tit'] = 'Buscador orden Funeral';
                  $data['cont'] = 'buscador';
                 
                  $data['nom'] =$this->session->userdata('nombre');
                  $data['resultado'] = $resultado;

                   $this->load->view('show', $data);
            
         
         }else{
            echo form_error();
         }
        
    }
       public function buscarSolicitante(){
         
          $this->form_validation->set_rules('buscar','Buscar','trim|required');
         if($this->form_validation->run()==true){
             $busca=$this->input->post('buscar');
        
        $resultado= $this->BuscadorModel->buscarSolicitante($busca);
                  $data['tit'] = 'solicitante';
                  $data['cont'] = 'solicitantes';
                  $data['nom'] =$this->session->userdata('nombre');
                  $data['resultado'] = $resultado;

                   $this->load->view('show', $data);
            
         
         }else{
            echo form_error();
         }
        
    }
  public function buscarCom(){
         $this->form_validation->set_rules('tabla','Tabla','trim|required');
          $this->form_validation->set_rules('buscar','Buscar','trim|required');
         if($this->form_validation->run()==true){
             $busca=$this->input->post('buscar');
        $tabl=$this->input->post('tabla');
        $resultado= $this->BuscadorModel->buscarCom($busca,$tabl);
        
            
                  $data['tit'] = 'Buscador Orden de apoyo';
                  $data['cont'] = 'buscadorCom';
                 
                  $data['nom'] =$this->session->userdata('nombre');
                  $data['resultado'] = $resultado;

                   $this->load->view('show', $data);
            
         
         }else{
            echo form_error();
         }
        
    }
    
}
