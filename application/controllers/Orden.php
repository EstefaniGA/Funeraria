<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orden extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('OrdenModel');
    }

    public function agregarSucursal() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|is_unique[sucursal.NombreS]');
        if ($this->form_validation->run() == true) {
            $n = $this->input->post('nombre');
            $this->OrdenModel->agregarSucursal($n);
            redirect('Show/listarSucursal');
        } else {
            redirect('Show/listarSucursal');
        }
    }
     

    public function actualizarSucursal() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|is_unique[usuarios.Nombre]');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $n = $this->input->post('nombre');
            $this->OrdenModel->actualizarSucursal($id, $n);
            redirect('Show/listarSucursal');
        } else {
            redirect('Show/listarSucursal');
        }
    }

    public function eliminarSucursal() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $this->OrdenModel->eliminarSucursal($id);
            redirect('Show/listarSucursal');
        } else {
            redirect('Show/listarSucursal');
        }
    }
    
     public function activarSucursal() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $this->OrdenModel->activarSucursal($id);
            redirect('Show/listarSucursal');
        } else {
            redirect('Show/listarSucursal');
        }
    }

    public function selecSucursal() {
        $this->form_validation->set_rules('sucursal', 'Sucursal', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('sucursal');
            $this->OrdenModel->selecSucursal($id);
            redirect('Show/administrador');
        }
    }
   public function agregarComunidad() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|is_unique[comunidad.NombreC]');
        if ($this->form_validation->run() == true) {
            $n = $this->input->post('nombre');
            $this->OrdenModel->agregarComunidad($n);
            redirect('Show/listarComunidad');
        } else {
            redirect('Show/index');
        }
    }
   
    public function actualizarComunidad() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|is_unique[comunidad.NombreC]');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $n = $this->input->post('nombre');
            $this->OrdenModel->actualizarComunidad($id, $n);
            redirect('Show/listarComunidad');
        } else {
            redirect('Show/listarSucursal');
        }
    }

    public function eliminarComunidad() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $this->OrdenModel->eliminarComunidad($id);
            redirect('Show/listarComunidad');
        } else {
            redirect('Show/listarSucursal');
        }
    }
    
     public function activarComunidad(){
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            
            $this->OrdenModel->ActivarComunidad($id);
            
            redirect('Show/listarComunidad');
        } else {
            redirect('Show/listarOrden');
        }
    }
    
    //--------------- eliminar solicitante-----------------
    public function eliminarSolicitante() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $idsol = $this->input->post('identificador');
          
            $this->OrdenModel->eliminarsolicitante($idsol);
            
            redirect('Show/Solicitantes');
        } else {
            redirect('Show/index');
        }
    }
//-----------------------activar solicitante----------------
    public function activarSolicitante(){
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $idsol = $this->input->post('identificador');
            
            $this->OrdenModel->Activarsolicitante($idsol);
            
            redirect('Show/Solicitantes');
        } else {
            redirect('Show/index');
        }
    }
    
     
    public function agregarOrden() {

        $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        //$this->form_validation->set_rules('personasolicitante','Persona que atendió','trim|required');
        //$this->form_validation->set_rules('subtotalempresa','Sub-Total ','trim|required|integer');
        //$this->form_validation->set_rules('stotalempresa','Total ','trim|required|integer');

        if ($this->form_validation->run() == true) {
            $foa = $this->input->post('foap');
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
            $fech = $this->input->post('fechabono');
            $nomf = $this->input->post('nombrefinado');
            $domfin = $this->input->post('domiciliofinado');
            $ciu = $this->input->post('ciudadadfinado');
            $fechf = $this->input->post('fechafinado');
            $edf = $this->input->post('edadfinado');
            $apf = $this->input->post('apellidopafinado');
            $nuf = $this->input->post('numerofinado');
            $colf = $this->input->post('coloniafinado');
            $ecf = $this->input->post('estadociv');
            $escf = $this->input->post('escolaridadfinado');
            $apmf = $this->input->post('apellidomafinado');
            $naf = $this->input->post('nacionalidadfinado');
            $ocf = $this->input->post('ocupacionfinado');
            $dhf = $this->input->post('derechofinado');
            $sef = $this->input->post('sexo');
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');
            $lug = $this->input->post('lugardifuncion');
            $hord = $this->input->post('horadifuncion');
            $fecd = $this->input->post('fechadifuncion');
            $caud = $this->input->post('causasdifuncion');
            $lud = $this->input->post('lugarvelacion');
            $hov = $this->input->post('horavelacion');
            $fev = $this->input->post('fechavelacion');
            $igv = $this->input->post('iglesiavelacion');
            $horv = $this->input->post('horasepvelacion');
            $nev = $this->input->post('nombreexhumar');
            $panv = $this->input->post('panteonvelacion');
            $ubv = $this->input->post('ubicacionvelacion');
            $prpv = $this->input->post('perpetuidad');
            $tempv = $this->input->post('temporalvelacion');
            $apav = $this->input->post('apellidopaexhumar');
            $fede = $this->input->post('fechadifexhumar');
            $apmae = $this->input->post('apellidomaexhumar');
            $ate = $this->input->post('ataudempresa');
            $mode = $this->input->post('modeloempresa');
            $cae = $this->input->post('capillasempresa');
            $eme = $this->input->post('embalsamadaempresa');
            $adoe = $this->input->post('adomicilioempresa');
            $care = $this->input->post('carrozaempresa');
            $trase = $this->input->post('trasladoempresa');
            $ure = $this->input->post('urnaempresa');
            $modee = $this->input->post('modelouempresa');
            $creme = $this->input->post('cremacionempresa');
            $otre = $this->input->post('otrosgasempresa');
            $luge = $this->input->post('lugarcremaempresa');
            $sube = $this->input->post('subtotalempresa');
            $ime = $this->input->post('impuestosempresa');
            $cere = $this->input->post('certificadoempresa');
            $ote = $this->input->post('otrosempresa');
            $obe = $this->input->post('observacionesempresa');
            $tote = $this->input->post('totalempresa');
            $abono = $this->input->post('abono');
            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }
            $soli = $this->OrdenModel->agregarSolicitante($noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $tels);
            $ord = $this->OrdenModel->agregarOrden($soli,$pares,$foa, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono);
            $this->OrdenModel->agregarabono($ord, $abono, $fech, $suc);



            redirect('Show/listarOrden');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrden';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }

    public function modificarOrden() {
         $this->form_validation->set_rules('identificador','Identificador','trim|required|integer');
        // $this->form_validation->set_rules('identificador','Identificador','trim|required|integer');
        //  $this->form_validation->set_rules('nombresolicitante','Nombre del solicitante','trim|required');
        // $this->form_validation->set_rules('domiciliosolicitante','Domicilio del solicitante','trim|required');
        //  $this->form_validation->set_rules('ciudadadsolicitante','Ciudad del solicitante','trim|required');
        // $this->form_validation->set_rules('edadsolicitante','Edad del solicitante','trim|required|integer');
        // $this->form_validation->set_rules('apellidopasolicitante','Apellido Paterno del solicitante','trim|required');
        //  $this->form_validation->set_rules('coloniasolicitante','Colonia del solicitante','trim|required');
        //$this->form_validation->set_rules('estadocivs','Estado Civil del solicitante','trim|required');
        //$this->form_validation->set_rules('apellidomasolicitante','Apellido Materno del solicitante','trim|required');
         if($this->form_validation->run()===true){

        //        solicitante
        $id = $this->input->post('ids');
        $noms = $this->input->post('nombresolicitante');
        $doms = $this->input->post('domiciliosolicitante');
        $cius = $this->input->post('ciudadadsolicitante');
        $eds = $this->input->post('edadsolicitante');
        $aps = $this->input->post('apellidopasolicitante');
        $nus = $this->input->post('numerosolicitante');
        $cols = $this->input->post('coloniasolicitante');
        $ecs = $this->input->post('estadocivs');
        $ams = $this->input->post('apellidomasolicitante');
        $pares = $this->input->post('parentesco');
        $tels = $this->input->post('telefonosolicitante');
//     ------------ orden-----------
//     ------encabezado
        $idf = $this->input->post('identificador');
       
        
//        PARTE FINADO
        $nomf = $this->input->post('nombrefinado');
        $domfin = $this->input->post('domiciliofinado');
        $ciu = $this->input->post('ciudadadfinado');
        $fechf = $this->input->post('fechafinado');
        $edf = $this->input->post('edadfinado');
        $apf = $this->input->post('apellidopafinado');
        $nuf = $this->input->post('numerofinado');
        $colf = $this->input->post('coloniafinado');
        $ecf = $this->input->post('estadociv');
        $escf = $this->input->post('escolaridadfinado');
        $apmf = $this->input->post('apellidomafinado');
        $naf = $this->input->post('nacionalidadfinado');
        $ocf = $this->input->post('ocupacionfinado');
        $dhf = $this->input->post('derechofinado');
        $sef = $this->input->post('sexo');
        
       
        //        modificar parte finado
       

//        parte de apartado solicitante 
        $pers = $this->input->post('personasolicitante');
//       defuncion
        $lug = $this->input->post('lugardifuncion');
        $hord = $this->input->post('horadifuncion');
        $fecd = $this->input->post('fechadifuncion');
        $caud = $this->input->post('causasdifuncion');
//        VIC
        $lud = $this->input->post('lugarvelacion');
        $hov = $this->input->post('horavelacion');
        $fev = $this->input->post('fechavelacion');
        $igv = $this->input->post('iglesiavelacion');
        $horv = $this->input->post('horasepvelacion');
        $nev = $this->input->post('nombreexhumar');
        $panv = $this->input->post('panteonvelacion');
        $ubv = $this->input->post('ubicacionvelacion');
        $prpv = $this->input->post('perpetuidad');
        $tempv = $this->input->post('temporalvelacion');
        $apav = $this->input->post('apellidopaexhumar');
        $fede = $this->input->post('fechadifexhumar');
        $apmae = $this->input->post('apellidomaexhumar');
//        Servicios empresa
        $ate = $this->input->post('ataudempresa');
        $mode = $this->input->post('modeloempresa');
        $cae = $this->input->post('capillasempresa');
        $eme = $this->input->post('embalsamadaempresa');
        $adoe = $this->input->post('adomicilioempresa');
        $care = $this->input->post('carrozaempresa');
        $trase = $this->input->post('trasladoempresa');
        $ure = $this->input->post('urnaempresa');
        $modee = $this->input->post('modelouempresa');
        $creme = $this->input->post('cremacionempresa');
        $otre = $this->input->post('otrosgasempresa');
        $luge = $this->input->post('lugarcremaempresa');
        $sube = $this->input->post('subtotalempresa');
        $ime = $this->input->post('impuestosempresa');
        $cere = $this->input->post('certificadoempresa');
        $ote = $this->input->post('otrosempresa');
        $obe = $this->input->post('observacionesempresa');
        $tote = $this->input->post('totalempresa');
//        pagos
        $abono = $this->input->post('abono');
        $idpag = $this->input->post('idpago');
//     modificar solicitante
        $this->OrdenModel->actualizarSolicitante($id, $noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams,  $tels);

//      
     $ord = $this->OrdenModel->modificarOrden($idf, $pares,  $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote, $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono);
        $this->OrdenModel->actualizarAbono($idpag, $abono);
        redirect('Show/listarOrden');
         }
        //redirect('Show/listarUsuario');    
    }

//--------------- eliminar orden funeral-----------------
    public function eliminarOrden() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
          
            $this->OrdenModel->eliminarOrden($id);
            
            redirect('Show/listarOrden');
        } else {
            redirect('Show/listarOrden');
        }
    }
//-----------------------activar orden funeral----------------
    public function activarOrden(){
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            
            $this->OrdenModel->ActivarOrden($id);
            
            redirect('Show/listarOrden');
        } else {
            redirect('Show/listarOrden');
        }
    }
//  ---------------agregar orden comunidad----------------

    public function agregarOrdenComunidad() {
        $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        if ($this->form_validation->run() == true) {
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
//             solicitante
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');



            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }
            
            
//               agregar solicitante
            $soli = $this->OrdenModel->agregarSolicitante($noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $pares, $tels);
//               agregar apoyo
            $ord = $this->OrdenModel->agregarOrdenComunidad($soli, $fec, $suc, $pers);
//          agregar tipo de beneficiario
//             $bene=$this->OrdenModel->agregarBeneficiarios($tipo);
//             agregar beneficiarios
            for($ben=1;$ben<9;$ben++){
                
               $no = 'nombreb'.$ben;
               $apep = 'apellidopab'.$ben;
               $apem = 'apellidomab'.$ben;
               $tip = 'tipo'.$ben;
               
               if($_POST[$no] && $_POST[$apep] && $_POST[$apem] && $_POST[$tip] ){
                $beneficiario=array(
                    'NombreB'=>$_POST[$no],
                    'ApellidoPa'=>$_POST[$apep],
                    'ApellidoMa'=>$_POST[$apem],
                    'Apoyo_idApoyo'=>$ord,
                    'Tipo_idTipo'=>$_POST[$tip]
                    );
                
                $this->OrdenModel->addbenef($beneficiario);   
               }        
            }
            
            redirect('Show/listarOrdenComunidad');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrdenComunidad';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }
    public function datos(){
        $selec= $this->input->post('be');
        $datos= $this->OrdenModel->selben($selec);
        echo json_encode($datos);
    }

//  -------------- modificar orden comunidad-----------------
    public function modificarOrdenComunidad(){
          $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        if ($this->form_validation->run() == true) {
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
//             solicitante
            $id = $this->input->post('ids');
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');
//               Nombres de beneficiarios
            
      
            }
           // actualizar solicitante
              $this->OrdenModel->actualizarSolicitante($id, $noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $tels);

             for($ben=1;$ben<9;$ben++){
                
               $nom = 'nombreb'.$ben;
               $apep = 'apellidopab'.$ben;
               $apem = 'apellidomab'.$ben;
               $tip = 'tipo'.$ben;
               $idben = 'idbe'.$ben;
               
               if($_POST[$nom] && $_POST[$apep] && $_POST[$apem] && $_POST[$tip] && $_POST[$idben]   ){
                $beneficiario=array(
                    'NombreB'=>$_POST[$nom],
                    'ApellidoPa'=>$_POST[$apep],
                    'ApellidoMa'=>$_POST[$apem],
                    
                    'Tipo_idTipo'=>$_POST[$tip]
                    );
                $this->db->where('idBeneficiarios',$_POST[ $idben]);
//                $benefi=array();
                
                $this->OrdenModel->actualizarBeneficiarios($beneficiario);   
               }        
            }
//            
             
               
         redirect('Show/listarOrdenComunidad');
    }
    
//  ------------------eliminar orden comunidad------------
       public function eliminarOrdenComunidad() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $idcomu = $this->input->post('identificador');
          
            $this->OrdenModel->eliminarOrdenComunidad($idcomu);
            
            redirect('Show/listarOrdenComunidad');
        } else {
            redirect('Show/listarOrdenComunidad');
        }
    }
    public function activarOrdenComunidad(){
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $idcomu = $this->input->post('identificador');
            
            $this->OrdenModel->ActivarOrdenComunidad($idcomu);
            
            redirect('Show/listarOrdenComunidad');
        } else {
            redirect('Show/listarOrdenComunidad');
        }
    }
    
    
    
// public function eliminarOrdenComunidad() {
//        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
//        if ($this->form_validation->run() == true) {
//            $idcomu = $this->input->post('identificador');
//            $this->OrdenModel->eliminarSolicitanteCom($idcomu);
//            $this->OrdenModel->eliminarOrdenComunidad($idcomu);
//            $this->OrdenModel->eliminarBeneficiarios($idcomu);
//            redirect('Show/listarOrden');
//        } else {
//            redirect('Show/listarOrden');
//        }
//    }
    
//    agregar orden comunidad con solicitante cargado
    public function agregarOrdenComunidadSol() {
        $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        if ($this->form_validation->run() == true) {
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
//             solicitante
            $soli= $this->input->post('ids');
            $pers = $this->input->post('personasolicitante');
            
            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }

//               agregar apoyo
            $ord = $this->OrdenModel->agregarOrdenComunidad($soli, $fec, $suc, $pers);
//          
//             agregar beneficiarios
           
            for($ben=1;$ben<9;$ben++){
                
               $no = 'nombreb'.$ben;
               $apep = 'apellidopab'.$ben;
               $apem = 'apellidomab'.$ben;
               $tip = 'tipo'.$ben;
               
               if($_POST[$no] && $_POST[$apep] && $_POST[$apem] && $_POST[$tip] ){
                $beneficiario=array(
                    'NombreB'=>$_POST[$no],
                    'ApellidoPa'=>$_POST[$apep],
                    'ApellidoMa'=>$_POST[$apem],
                    'Apoyo_idApoyo'=>$ord,
                    'Tipo_idTipo'=>$_POST[$tip]
                    );
                
                $this->OrdenModel->addbenef($beneficiario);   
               }        
            }


            redirect('Show/listarOrdenComunidad');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrdenComunidad';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }
    public function agregarOrdenSol() {

        $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        //$this->form_validation->set_rules('personasolicitante','Persona que atendió','trim|required');
        //$this->form_validation->set_rules('subtotalempresa','Sub-Total ','trim|required|integer');
        //$this->form_validation->set_rules('stotalempresa','Total ','trim|required|integer');

        if ($this->form_validation->run() == true) {
            $soli = $this->input->post('ids');
            
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
            $fech = $this->input->post('fechabono');
            $nomf = $this->input->post('nombrefinado');
            $domfin = $this->input->post('domiciliofinado');
            $ciu = $this->input->post('ciudadadfinado');
            $fechf = $this->input->post('fechafinado');
            $edf = $this->input->post('edadfinado');
            $apf = $this->input->post('apellidopafinado');
            $nuf = $this->input->post('numerofinado');
            $colf = $this->input->post('coloniafinado');
            $ecf = $this->input->post('estadociv');
            $escf = $this->input->post('escolaridadfinado');
            $apmf = $this->input->post('apellidomafinado');
            $naf = $this->input->post('nacionalidadfinado');
            $ocf = $this->input->post('ocupacionfinado');
            $dhf = $this->input->post('derechofinado');
            $sef = $this->input->post('sexo');
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');
            $lug = $this->input->post('lugardifuncion');
            $hord = $this->input->post('horadifuncion');
            $fecd = $this->input->post('fechadifuncion');
            $caud = $this->input->post('causasdifuncion');
            $lud = $this->input->post('lugarvelacion');
            $hov = $this->input->post('horavelacion');
            $fev = $this->input->post('fechavelacion');
            $igv = $this->input->post('iglesiavelacion');
            $horv = $this->input->post('horasepvelacion');
            $nev = $this->input->post('nombreexhumar');
            $panv = $this->input->post('panteonvelacion');
            $ubv = $this->input->post('ubicacionvelacion');
            $prpv = $this->input->post('perpetuidad');
            $tempv = $this->input->post('temporalvelacion');
            $apav = $this->input->post('apellidopaexhumar');
            $fede = $this->input->post('fechadifexhumar');
            $apmae = $this->input->post('apellidomaexhumar');
            $ate = $this->input->post('ataudempresa');
            $mode = $this->input->post('modeloempresa');
            $cae = $this->input->post('capillasempresa');
            $eme = $this->input->post('embalsamadaempresa');
            $adoe = $this->input->post('adomicilioempresa');
            $care = $this->input->post('carrozaempresa');
            $trase = $this->input->post('trasladoempresa');
            $ure = $this->input->post('urnaempresa');
            $modee = $this->input->post('modelouempresa');
            $creme = $this->input->post('cremacionempresa');
            $otre = $this->input->post('otrosgasempresa');
            $luge = $this->input->post('lugarcremaempresa');
            $sube = $this->input->post('subtotalempresa');
            $ime = $this->input->post('impuestosempresa');
            $cere = $this->input->post('certificadoempresa');
            $ote = $this->input->post('otrosempresa');
            $obe = $this->input->post('observacionesempresa');
            $tote = $this->input->post('totalempresa');
            $abono = $this->input->post('abono');
            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }
//               $soli= $this->OrdenModel->agregarSolicitante($noms,$doms,$cius,$eds,$aps,$nus,$cols,$ecs,$ams,$pares,$tels); 
            $ord = $this->OrdenModel->agregarOrden($soli, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
                    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono);
            $this->OrdenModel->agregarabono($ord, $abono, $fech, $suc);



            redirect('Show/listarOrden');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrden';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }

    
    
    public function agregarOrdenaApoyo() {

        $this->form_validation->set_rules('ids', 'idSol del solicitante', 'trim|required');
       

        if ($this->form_validation->run() == true) {
            
            $soli = $this->input->post('ids');
             $foa = $this->input->post('folioapoyo');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
            $fech = $this->input->post('fechabono');
            $nomf = $this->input->post('nombrefinado');
            $domfin = $this->input->post('domiciliofinado');
            $ciu = $this->input->post('ciudadadfinado');
            $fechf = $this->input->post('fechafinado');
            $edf = $this->input->post('edadfinado');
            $apf = $this->input->post('apellidopafinado');
            $nuf = $this->input->post('numerofinado');
            $colf = $this->input->post('coloniafinado');
            $ecf = $this->input->post('estadociv');
            $escf = $this->input->post('escolaridadfinado');
            $apmf = $this->input->post('apellidomafinado');
            $naf = $this->input->post('nacionalidadfinado');
            $ocf = $this->input->post('ocupacionfinado');
            $dhf = $this->input->post('derechofinado');
            $sef = $this->input->post('sexo');
            $pares = $this->input->post('parentesco');
           
            $pers = $this->input->post('personasolicitante');
            $lug = $this->input->post('lugardifuncion');
            $hord = $this->input->post('horadifuncion');
            $fecd = $this->input->post('fechadifuncion');
            $caud = $this->input->post('causasdifuncion');
            $lud = $this->input->post('lugarvelacion');
            $hov = $this->input->post('horavelacion');
            $fev = $this->input->post('fechavelacion');
            $igv = $this->input->post('iglesiavelacion');
            $horv = $this->input->post('horasepvelacion');
            $nev = $this->input->post('nombreexhumar');
            $panv = $this->input->post('panteonvelacion');
            $ubv = $this->input->post('ubicacionvelacion');
            $prpv = $this->input->post('perpetuidad');
            $tempv = $this->input->post('temporalvelacion');
            $apav = $this->input->post('apellidopaexhumar');
            $fede = $this->input->post('fechadifexhumar');
            $apmae = $this->input->post('apellidomaexhumar');
            $ate = $this->input->post('ataudempresa');
            $mode = $this->input->post('modeloempresa');
            $cae = $this->input->post('capillasempresa');
            $eme = $this->input->post('embalsamadaempresa');
            $adoe = $this->input->post('adomicilioempresa');
            $care = $this->input->post('carrozaempresa');
            $trase = $this->input->post('trasladoempresa');
            $ure = $this->input->post('urnaempresa');
            $modee = $this->input->post('modelouempresa');
            $creme = $this->input->post('cremacionempresa');
            $otre = $this->input->post('otrosgasempresa');
            $luge = $this->input->post('lugarcremaempresa');
            $sube = $this->input->post('subtotalempresa');
            $ime = $this->input->post('impuestosempresa');
            $cere = $this->input->post('certificadoempresa');
            $ote = $this->input->post('otrosempresa');
            $obe = $this->input->post('observacionesempresa');
            $tote = $this->input->post('totalempresa');
            $abono = $this->input->post('abono');
            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }
            
            $ord = $this->OrdenModel->agregarOrden($soli,$pares,$foa, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
                    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono);
            $this->OrdenModel->agregarabono($ord, $abono, $fech, $suc);



            redirect('Show/listarOrden');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrden';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     //------------------------Reporte Exel-----------------//
    public function tuExel(){
        $this->load->helper('mysql_to_excel');
        to_excel($this->OrdenModel->tuExel(),"ReporteOrden");
    } 
     public function tuExelA(){
        $this->load->helper('mysql_to_excel');
        to_excel($this->OrdenModel->tuExelA(),"ReporteApoyo_A_LaComunidad");
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
