<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
//listar sucursal
    public function listarSucursal() {
        $this->db->select('*');
        $this->db->from('sucursal');
        $sql = $this->db->get();
        return $sql->result();
    }
//agregar sucursal
    public function agregarSucursal($nom) {
        $datos = array(
            'NombreS' => $nom,
        );
        return $this->db->insert('sucursal', $datos);
    }

    /**
     * 
     * @param type $id integer
     * @param type $n
     */
//    actualizar sucursal
    public function actualizarSucursal($id, $n) {
        $data = array(
            'NombreS' => $n);

        $this->db->where('idSucursal', $id);
        $this->db->update('sucursal', $data);
    }
//    eliminar sucursal
    public function eliminarSucursal($id) {
        $datos = array(
            'Estatus'=>'no'
        );
        $this->db->where('idSucursal', $id);
        $this->db->update('sucursal',$datos);
    }
     public function activarSucursal($id) {
        $datos = array(
            'Estatus'=>'si'
        );
        $this->db->where('idSucursal', $id);
        $this->db->update('sucursal',$datos);
    }
//   seleccionar sucursal
    public function selecSucursal($id) {
        $data = array(
            'Seleccionada' => "");
        $this->db->update('sucursal', $data);
        $data = array(
            'Seleccionada' => "x");

        $this->db->where('idSucursal', $id);
        $this->db->update('sucursal', $data);
    }
//   traer datos de sucursal seleccionada
    public function sel() {
        $this->db->select('*');
        $this->db->from('sucursal');
        $this->db->where('Seleccionada', "x");
        $sql = $this->db->get();
        return $sql->result();
    }

    public function folio() {
        $this->db->select('Folio');
        $this->db->from('orden');
        $this->db->order_by('Folio', 'desc');
        $this->db->limit(1);
        $sql = $this->db->get();
        return $sql->result();
    }

    public function folioApoyo() {
        $this->db->select('idApoyo');
        $this->db->from('apoyo');
        $this->db->order_by('idApoyo', 'desc');
        $this->db->limit(1);
        $sql = $this->db->get();
        return $sql->result();
    }
//agregar Comunidad
        
 public function agregarComunidad($nom) {
        $datos = array(
            'NombreC' => $nom,
            'Estatus' => 'si',
        );
        return $this->db->insert('comunidad', $datos);
    }
        
    
   public function actualizarComunidad($id, $n) {
        $data = array(
            'NombreC' => $n);

        $this->db->where('idComunidad', $id);
        $this->db->update('comunidad', $data);
    }

    public function eliminarComunidad($id) {
       $datos = array(
            'Estatus'=>'no'
        );
        $this->db->where('idComunidad', $id);
        $this->db->update('comunidad',$datos);
    }
    // activarorden
    public function activarComunidad($id) {
        $datos = array(
            'Estatus'=>'si'
        );
        $this->db->where('idComunidad', $id);
        $this->db->update('Comunidad',$datos);
    }
    

    public function selCom(){
         $this->db->select('*');
        $this->db->from('comunidad');
        $sql = $this->db->get();
        return $sql->result();
        
    }
//    agregar un solicitante para una orden 

    public function agregarSolicitante($noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams,  $tels) {
        $datos = array(
            'NombreSolicitante' => $noms,
            'ApellidoSolPa' => $aps,
            'ApellidoSolMa' => $ams,
            'DomicilioSolicitante' => $doms,
            'NumeroSolicitante' => $nus,
            
            'Comunidad_idComunidad' => $cius,
            'ColoniaSolicitante' => $cols,
            'Telefono' => $tels,
            'EstadoCivilSolicitante' => $ecs,
            'Edad' => $eds,
            'Estatus' => 'si'
        );

        $this->db->insert('solicitantes', $datos);

        return $this->db->insert_id();
    }

//    agregar orden con el id de solicitante
    public function agregarOrden($soli,$pares,$foa, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono) {
        $res=$tote-$abono;
        $datos = array(
            'Solicitantes_idSolicitantes' => $soli,
             'Parentesco' => $pares,
            'ApoyoPert' => $foa,
            'FechaOrden' => date('Y-m-d'),
            'Sucursal_idSucursal' => $suc,
            'PersonaAtendio' => $pers,
            'LugarDifuncion' => $lug,
            'Fecha' => $fecd,
            'Hora' => $hord,
            'Causa' => $caud,
            'LugarVelacion' => $lud,
            'Panteon' => $panv,
            'HoraMisa' => $hov,
            'Ubicacion' => $ubv,
            'FechaMisa' => $fev,
            'Iglesia' => $igv,
            'Perpetuidad' => $prpv,
            'Temporal' => $tempv,
            'HoraSepelio' => $horv,
            'Ataud' => $ate,
            'ModeloAtaud' => $mode,
            'Urna' => $ure,
            'ModeloUrna' => $modee,
            'Capillas' => $cae,
            'Cremacion' => $creme,
            'Embalsamado' => $eme,
            'OtrosGastos' => $otre,
            'Adomicilio' => $adoe,
            'LugarCremacion' => $luge,
            'Carroza' => $care,
            'Traslado' => $trase,
            'SubTotal' => $sube,
            'Impuestos' => $ime,
            'CertificadoMedico' => $cere,
            'Otros' => $ote,
            'Observaciones' => $obe,
            'Total' => $tote,
            'NombreFinado' => $nomf,
            'DomicilioFinado' => $domfin,
            'CiudadFinado' => $ciu,
            'FechaNacimiento' => $fechf,
            'Edad' => $edf,
            'ApellidoFinPa' => $apf,
            'NumeroFinado' => $nuf,
            'ColoniaFinado' => $colf,
            'EstadoCivil' => $ecf,
            'Escolaridad' => $escf,
            'ApellidoFinMa' => $apmf,
            'Nacionalidad' => $naf,
            'Ocupacion' => $ocf,
            'DerechoHabiente' => $dhf,
            'Sexo' => $sef,
            'NombreFinExhumar' => $nev,
            'ApellidoPaterno' => $apav,
            'ApellidoMaterno' => $apmae,
            'FechaDifuncionExhumar' => $fede,
            'Restante' => $res,
            'Estatus' => 'si'
        );
        $this->db->insert('orden', $datos);
        return $this->db->insert_id();
    }

    public function agregarabono($ord, $abono, $fech, $suc) {
        $datos = array(
            'OrdenServicio_Folio' => $ord,
            'Cantidad' => $abono,
            'Fecha' => $fech,
            'OrdenServicio_Sucursal_idSucursal' => $suc
        );

        $this->db->insert('pagos', $datos);

        return $this->db->insert_id();
    }

    public function actualizarAbono($idpag, $abono) {
        $datos = array(
            
            'Cantidad' => $abono,
           
        );

        $this->db->where('idPagos', $idpag);
        $this->db->update('pagos', $datos);
    }

//  listar ordenes
    public function listarOrden() {
        $sql = $this->db->query('SELECT pagos.idPagos,pagos.OrdenServicio_Folio, orden.Folio, orden.FechaOrden,orden.NombreFinado,orden.ApellidoFinPa,orden.ApellidoFinMa, solicitantes.idSolicitantes,solicitantes.NombreSolicitante,solicitantes.ApellidoSolPa,solicitantes.ApellidoSolMa,orden.Total From orden, solicitantes,pagos WHERE  orden.Solicitantes_idSolicitantes = solicitantes.idSolicitantes and pagos.OrdenServicio_Folio=orden.Folio');

        return $sql->result();
    }

//   actualizar solicitante
    public function actualizarSolicitante($id, $noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $tels) {
        $datos = array(
            'NombreSolicitante' => $noms,
            'ApellidoSolPa' => $aps,
            'ApellidoSolMa' => $ams,
            'DomicilioSolicitante' => $doms,
            'NumeroSolicitante' => $nus,
            
            'Comunidad_idComunidad' => $cius,
            'ColoniaSolicitante' => $cols,
            'Telefono' => $tels,
            'EstadoCivilSolicitante' => $ecs,
            'Edad' => $eds
        );

        $this->db->where('idSolicitantes', $id);
        $this->db->update('solicitantes', $datos);
    }

//seleccionar orden a eliminar o modificar
    public function seleccionarOrden($id) {


        $sql = $this->db->query('SELECT * FROM orden,solicitantes,sucursal,usuarios,pagos,comunidad WHERE usuarios.idUsuarios = orden.PersonaAtendio and  orden.Folio= ' . $id . ' and orden.Sucursal_idSucursal = sucursal.idSucursal and solicitantes.idSolicitantes = orden.Solicitantes_idSolicitantes and pagos.OrdenServicio_Folio = orden.Folio and comunidad.idComunidad=solicitantes.Comunidad_idComunidad');
        return $sql->row();
    }

//   seleccionar tipo de beneficiarios
   public function seltipo() {
        $sql = $this->db->query('SELECT * FROM tipo');
       return $sql->result();
   }

//modificar orden con el solicitante
  

    public function modificarOrden($idf, $pares,  $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote, $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono) {
       $res=$tote-$abono;
        $datos = array(
            
//            'FechaOrden' => $fec,
//            'Solicitantes_idSolicitantes' => $soli,
//            'Sucursal_idSucursal' => $suc,
//            'PersonaAtendio' => $pers,
             'Parentesco' =>$pares,
            'LugarDifuncion' => $lug,
            'Fecha' => $fecd,
            'Hora' => $hord,
            'Causa' => $caud,
            'LugarVelacion' => $lud,
            'Panteon' => $panv,
            'HoraMisa' => $hov,
            'Ubicacion' => $ubv,
            'FechaMisa' => $fev,
            'Iglesia' => $igv,
            'Perpetuidad' => $prpv,
            'Temporal' => $tempv,
            'HoraSepelio' => $horv,
            'Ataud' => $ate,
            'ModeloAtaud' => $mode,
            'Urna' => $ure,
            'ModeloUrna' => $modee,
            'Capillas' => $cae,
            'Cremacion' => $creme,
            'Embalsamado' => $eme,
            'OtrosGastos' => $otre,
            'Adomicilio' => $adoe,
            'LugarCremacion' => $luge,
            'Carroza' => $care,
            'Traslado' => $trase,
            'SubTotal' => $sube,
            'Impuestos' => $ime,
            'CertificadoMedico' => $cere,
            'Otros' => $ote,
            'Observaciones' => $obe,
            'Total' => $tote,
            'NombreFinado' => $nomf,
            'ApellidoFinPa' => $apf,
            'ApellidoFinMa' => $apmf,
            'DomicilioFinado' => $domfin,
            'NumeroFinado' => $nuf,
            'Nacionalidad' => $naf,
            'CiudadFinado' => $ciu,
            'ColoniaFinado' => $colf,
            'Ocupacion' => $ocf,
            'FechaNacimiento' => $fechf,
            'EstadoCivil' => $ecf,
            'DerechoHabiente' => $dhf,
            'Edad' => $edf,
            'Escolaridad' => $escf,
            'Sexo' => $sef,
            'NombreFinExhumar' => $nev,
            'ApellidoPaterno' => $apav,
            'ApellidoMaterno' => $apmae,
            'FechaDifuncionExhumar' => $fede,
            'Restante' => $res
        );

        $this->db->where('Folio', $idf);
        $this->db->update('orden', $datos);
        
    }

//-------------------eliminar orden funeral-------
    public function eliminarOrden($id) {
        $datos = array(
            'Estatus'=>'no'
        );
        $this->db->where('Folio', $id);
        $this->db->update('orden',$datos);
    }
    // activarorden
    public function activarOrden($id) {
        $datos = array(
            'Estatus'=>'si'
        );
        $this->db->where('Folio', $id);
        $this->db->update('orden',$datos);
    }

//----------eliminar solicitante------------
    public function eliminarSolicitante($idsol) {
        $datos = array(
            'Estatus'=>'no'
        );
        $this->db->where('idSolicitantes', $idsol);
        $this->db->update('solicitantes',$datos);
    }
    //activar solicitante
    public function activarSolicitante($idsol) {
        $datos = array(
            'Estatus'=>'si'
        );
        $this->db->where('idSolicitantes', $idsol);
        $this->db->update('solicitantes',$datos);
    }
//eliminar abono
    public function eliminarAbono($id) {
        $this->db->where('idPagos', $id);
        $this->db->delete('pagos');
    }



    public function agregarOrdenComunidad($soli, $fec, $suc, $pers) {

        $datos = array(
            'Solicitantes_idSolicitantes' => $soli,
            'Fecha' => date('Y-m-d'),
            'Sucursal_idSucursal' => $suc,
            'PersonaAtendio' => $pers,
                'Estatus'=>'si');
        $this->db->insert('apoyo', $datos);
        return $this->db->insert_id();
    }
    public function actualizarOrdenComunidad($fo,$suc,$fec,$id,$pers){
        $datos = array(
            'Solicitantes_idSolicitantes' => $id,
            'Fecha' => $fec,
            'Sucursal_idSucursal' => $suc,
            'PersonaAtendio' => $pers);
         $this->db->where('idApoyo', $fo);
        $this->db->update('apoyo', $datos);
    }

    
    public function addbenef(array $bene) {
        $this->db->insert('beneficiarios',$bene);
    }
    public function actualizarBeneficiarios(array $bene){
       
        
        $this->db->update('beneficiarios', $bene);
    }


    public function listarOrdenComunidad() {
        $sql = $this->db->query('SELECT * From apoyo, solicitantes,beneficiarios WHERE  apoyo.Solicitantes_idSolicitantes = solicitantes.idSolicitantes and apoyo.idApoyo=beneficiarios.Apoyo_idApoyo');

        return $sql->result();
    }

    public function seleccionarOrdenCom($idor) {

        $sql = $this->db->query('SELECT * FROM comunidad,apoyo,solicitantes,sucursal,usuarios,beneficiarios,tipo WHERE usuarios.idUsuarios = apoyo.PersonaAtendio and  apoyo.idApoyo= ' . $idor . ' and apoyo.Sucursal_idSucursal = sucursal.idSucursal and solicitantes.idSolicitantes = apoyo.Solicitantes_idSolicitantes and beneficiarios.Apoyo_idApoyo=apoyo.idApoyo and tipo.idTipo=beneficiarios.Tipo_idTipo and comunidad.idComunidad=solicitantes.Comunidad_idComunidad');
        return $sql->row();
    }
    public function benefi($idor){
         $sql = $this->db->query('SELECT * FROM beneficiarios,apoyo,tipo where apoyo.idApoyo='.$idor.' and beneficiarios.Apoyo_idApoyo=apoyo.idApoyo and tipo.idTipo=beneficiarios.Tipo_idTipo');
         return $sql->result();
    }

    public function seleccionar($ido) {
        $sql = $this->db->query('SELECT * FROM solicitantes,comunidad,beneficiarios,tipo WHERE  idSolicitantes=' . $ido . ' and solicitantes.Comunidad_idComunidad=comunidad.idComunidad and tipo.idTipo=beneficiarios.Tipo_idTipo');
        return $sql->row();
    }
    
     public function seleccionarBene($idor) {
         
        $sql = $this->db->query('SELECT * FROM beneficiarios,apoyo,tipo WHERE apoyo.idApoyo='.$idor.' and beneficiarios.Apoyo_idApoyo = apoyo.idApoyo and tipo.idTipo=beneficiarios.Tipo_idTipo');
        return $sql->result();
    }
    public function selben($benef){
        
      $this->db->select('beneficiarios.NombreB,beneficiarios.ApellidoPa,beneficiarios.ApellidoMa,tipo.NombreT');  
      $this->db->from('beneficiarios'); 
       $this->db->join('tipo','beneficiarios.Tipo_idTipo=tipo.idTipo');
      $this->db->where('idBeneficiarios',$benef);
        $sql = $this->db->get();
      return $sql->result();
    }
    //-------------------eliminar orden comunidad-------
    public function eliminarOrdenComunidad($idcomu) {
        $datos = array(
            'Estatus'=>'no'
        );
        $this->db->where('idApoyo', $idcomu);
        $this->db->update('apoyo',$datos);
    }
    // activarorden
    public function activarOrdenComunidad($idcomu) {
        $datos = array(
            'Estatus'=>'si'
        );
        $this->db->where('idApoyo', $idcomu);
        $this->db->update('apoyo',$datos);
    }
    
    
//
////eliminar solicitante
//    /**
//     * 
//     * @param type $idcomu
//     */
//    public function eliminarSolicitanteCom($idcomu) {
//        $this->db->where('idSolicitantes', $idcomu);
//        $this->db->delete('solicitantes');
//    }
//    //eliminar beneficiario
//    /**
//     * 
//     * @param type $idcomu
//     */
//    public function eliminarBeneficiarios($idcomu) {
//        $this->db->where('idBeneficiarios', $idcomu);
//        $this->db->delete('beneficiarios');
//    }
   //------------------Reporte Exel-----------------//
//    orden funeral
    public function tuExel(){
        $fields = $this->db->field_data('orden','solicitantes','sucursal');
        $this->db->order_by('Folio','idSolicitantes','idSucursal','asc');
       
        $this->db->select('*');
        $this->db->From('orden');
          $this->db->join('solicitantes','orden.Solicitantes_idSolicitantes=solicitantes.idSolicitantes');
          $this->db->join('sucursal','orden.Sucursal_idSucursal=sucursal.idSucursal');
        $query =$this->db->get();
        return array("fields" => $fields, "query" => $query);
    }
//    orden apoyo
     public function tuExelA(){
        $fields = $this->db->field_data('apoyo');
        $this->db->order_by('idApoyo','asc');
        $this->db->select('*');
        $this->db->From('apoyo');
        $this->db->join('solicitantes','apoyo.Solicitantes_idSolicitantes=solicitantes.idSolicitantes');
          $this->db->join('sucursal','apoyo.Sucursal_idSucursal=sucursal.idSucursal');
          $this->db->join('beneficiarios','beneficiarios.Apoyo_idApoyo=apoyo.idApoyo');
        $query =$this->db->get();
        return array("fields" => $fields, "query" => $query);
    }
    
//--------------------  paginación-----------------------
//    orden funeral
    
    private $tb_orden='om_orden';
    function getNumOrden()
{
    return $this->db->count_all('orden');
}
    function getTodasOrdenes($limit,$start)
{
        $this->db->select('orden.Estatus, orden.Folio, orden.FechaOrden,orden.NombreFinado,orden.ApellidoFinPa,orden.ApellidoFinMa, solicitantes.idSolicitantes,solicitantes.NombreSolicitante,solicitantes.ApellidoSolPa,solicitantes.ApellidoSolMa,orden.Total');
        $this->db->From('orden');
          $this->db->join('solicitantes','orden.Solicitantes_idSolicitantes=solicitantes.idSolicitantes'); 
          
    $this->db->limit($limit,$start);
    $resultado = $this->db->get();
 
    return $resultado->result();
}

//orden apoyo
    private $tb_ordenc='om_ordenc';
    function getNumOrdenC()
{
    return $this->db->count_all('apoyo');
}
    function getTodasOrdenesC($limit,$start)
{
        
        $this->db->select('apoyo.idApoyo,apoyo.Fecha,apoyo.Estatus,solicitantes.NombreSolicitante,solicitantes.ApellidoSolPa,solicitantes.ApellidoSolMa');
        $this->db->From('apoyo');
          $this->db->join('solicitantes','apoyo.Solicitantes_idSolicitantes=solicitantes.idSolicitantes');   
          
    $this->db->limit($limit,$start);
    $resultado = $this->db->get();
 
    return $resultado->result();
}

    
    
    
}
