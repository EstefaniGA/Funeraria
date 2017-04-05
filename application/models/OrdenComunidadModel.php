<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenComunidadModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
 public function agregarOrdenComunidad($soli,$fec,$suc,$pers,$ate,$mode,$ure,$modee,$cae,$creme,$eme,$otre,$adoe,$luge,$care,$trase,$sube,$ime,$cere,$ote,$obe,$tote){
        
        $datos=array(  
            'Solicitantes_idSolicitantes'=>$soli,
             'FechaOrden'=>date('Y-m-d'),
            'Sucursal_idSucursal'=>$suc,
            'PersonaAtendio'=>$pers,
           
            'Ataud'=>$ate,
            'ModeloAtaud'=>$mode,
            'Urna'=>$ure,
            'ModeloUrna'=>$modee,
             'Capillas'=>$cae,
            'Cremacion'=>$creme,
            'Embalsamado'=>$eme,
            'OtrosGastos'=>$otre,
            'Adomicilio'=>$adoe,
            'LugarCremacion'=>$luge,
            'Carroza'=>$care,
            'Traslado'=>$trase,
            'SubTotal'=>$sube,
            'Impuestos'=>$ime,
            'CertificadoMedico'=>$cere,
            'Otros'=>$ote,
            'Observaciones'=>$obe,
            'Total'=>$tote,
          
        );
              $this->db->insert('orden', $datos);
         return $this->db->insert_id();
    
         
    }
    public function agregarBeneficiarios($cony,$ma,$sueg,$pa,$suega,$hi1,$hi2,$hi3){
    	$datos=array(  'Conyugue'=>$cony,
    	'Madre'=>$ma,
    	'Suegro'=>$sueg,
    	'Padre'=>$pa,
    	'Suegra'=>$suega,
    	'HijosSolteros1'=>$hi1,
    	'HijosSolteros2'=>$hi2,
    	'HijosSolteros3'=>$hi3);
    	 $this->db->insert('beneficiarios', $datos);
 
        return $this->db->insert_id();

    }
    public function addOrdenComunidad($ord,$suc,$bene){
    	 $datos=array(
            'OrdenServicio_Folio'=>$ord,
           '	OrdenServicio_Sucursal_idSucursal'=>$suc,
            '	Beneficiarios_idBeneficiarios'=>$bene    
        );
          
        $this->db->insert('ordenbeneficiarios', $datos);
 
        return $this->db->insert_id();
    }
    
    
    
 }
  

   
