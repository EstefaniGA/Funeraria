<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenComunidad extends CI_Controller{
    public function __construct() {
        parent::__construct();
          $this->load->model('OrdenModel');
       
        
    }
    
    
  public function agregarOrdenComunidad(){ 
       $this->form_validation->set_rules('nombresolicitante','Nombre del solicitante','trim|required');
          $this->form_validation->set_rules('domiciliosolicitante','Domicilio del solicitante','trim|required');
           $this->form_validation->set_rules('ciudadadsolicitante','Ciudad del solicitante','trim|required');
          $this->form_validation->set_rules('edadsolicitante','Edad del solicitante','trim|required|integer');
           $this->form_validation->set_rules('apellidopasolicitante','Apellido Paterno del solicitante','trim|required');
           $this->form_validation->set_rules('coloniasolicitante','Colonia del solicitante','trim|required');
          $this->form_validation->set_rules('estadocivs','Estado Civil del solicitante','trim|required');
         $this->form_validation->set_rules('apellidomasolicitante','Apellido Materno del solicitante','trim|required');
          if($this->form_validation->run()==true){
              $fo=$this->input->post('folio');  
             $suc=$this->input->post('sucursal');  
             $fec=$this->input->post('fecha');  
             $noms=$this->input->post('nombresolicitante');
              $doms=$this->input->post('domiciliosolicitante');
              $cius=$this->input->post('ciudadadsolicitante');
               $eds=$this->input->post('edadsolicitante');
               $aps=$this->input->post('apellidopasolicitante');
               $nus=$this->input->post('numerosolicitante');
               $cols=$this->input->post('coloniasolicitante');
               $ecs=$this->input->post('estadocivs');
               $ams=$this->input->post('apellidomasolicitante');
               $pares=$this->input->post('parentesco');
               $tels=$this->input->post('telefonosolicitante');
               $pers=$this->input->post('personasolicitante');
                $ate=$this->input->post('ataudempresa');
                $mode=$this->input->post('modeloempresa');
                $cae=$this->input->post('capillasempresa');
                $eme=$this->input->post('embalsamadaempresa');
                $adoe=$this->input->post('adomicilioempresa');
                $care=$this->input->post('carrozaempresa');
                $trase=$this->input->post('trasladoempresa');
                $ure=$this->input->post('urnaempresa');
                $modee=$this->input->post('modelouempresa');
                $creme=$this->input->post('cremacionempresa');
                $otre=$this->input->post('otrosgasempresa');
                $luge=$this->input->post('lugarcremaempresa');
                $sube=$this->input->post('subtotalempresa');
                $ime=$this->input->post('impuestosempresa');
                $cere=$this->input->post('certificadoempresa');
                $ote=$this->input->post('otrosempresa');
                $obe=$this->input->post('observacionesempresa');
                $tote=$this->input->post('totalempresa');
                $cony=$this->input->post('conyugue');
                $ma=$this->input->post('madre');
               $sueg=$this->input->post('suegro');
                $pa=$this->input->post('padre');
                 $suega=$this->input->post('suegra');
                  $hi1=$this->input->post('hijo1');
                  $hi2=$this->input->post('hijo2');
                  $hi3=$this->input->post('hijo3');


                    $suc1=$this->OrdenModel->sel();
               foreach ($suc1 as $com){
                   $suc = $com->idSucursal;
               } 
               $soli= $this->OrdenModel->agregarSolicitante($noms,$doms,$cius,$eds,$aps,$nus,$cols,$ecs,$ams,$pares,$tels); 
             $ord=$this->OrdenModel->agregarOrden($soli,$fec,$suc,$pers,$ate,$mode,$ure,$modee,$cae,$creme,$eme,$otre,$adoe,$luge,$care,$trase,$sube,$ime,$cere,$ote,$obe,$tote);
             $bene=$this->OrdenModel->agregarBeneficiarios($cony,$ma,$sueg,$pa,$suega,$hi1,$hi2,$hi3);
              $this->OrdenModel->addOrdenComunidad($ord,$suc,$bene);
              
             
              redirect('Show/listarOrden');
         
              
             }else{
                  
             
                 $data['tit'] = 'Orden Nueva';
                    $data['cont'] = 'newOrden';
                    $data['nom'] =$this->session->userdata('nombre');
                     $data['fol'] = $this->OrdenModel->folio();
                      $data['su'] = $this->OrdenModel->sel();
                    $this->load->view('show', $data);   
                
             }
          }
  }  
    

    