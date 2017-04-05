<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AbonoModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function seleccionar($idf) {
        $sql = $this->db->query('SELECT orden.Restante, orden.Folio,orden.NombreFinado,orden.ApellidoFinPa,orden.ApellidoFinMa,orden.Total,solicitantes.NombreSolicitante,solicitantes.ApellidoSolPa,Solicitantes.ApellidoSolMa FROM orden,solicitantes,usuarios,pagos WHERE orden.Folio= ' . $idf . ' and solicitantes.idSolicitantes = orden.Solicitantes_idSolicitantes ');
        return $sql->result();
    }

    public function abonos($idf) {
        $sql = $this->db->query('SELECT pagos.NoRecibo,pagos.Cantidad,pagos.Fecha, pagos.OrdenServicio_Sucursal_idSucursal, sucursal.NombreS FROM orden,pagos,sucursal WHERE orden.Folio= ' . $idf . '  and pagos.OrdenServicio_Folio=orden.Folio and sucursal.idSucursal=pagos.OrdenServicio_Sucursal_idSucursal');
        
        return $sql->result();
    }

    public function agregarabono($fol, $sucu, $abono, $fore, $fech) {
        $datos = array(
            'OrdenServicio_Folio' => $fol,
            'OrdenServicio_Sucursal_idSucursal' => $sucu,
            'Fecha' => date('Y-m-d'),
            'Cantidad' => $abono,
            'NoRecibo' => $fore
        );
        return $this->db->insert('pagos', $datos);
    }
    
    public function ActualizarRestante($fol, $abono,$saldo){
        $res=$abono-$saldo;
        $datos = array(
            'Restante'=>$res
        );
        $this->db->where('Folio', $fol);
        $this->db->update('orden',$datos);
    }

}
