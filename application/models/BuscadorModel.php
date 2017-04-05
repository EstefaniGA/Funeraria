<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BuscadorModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function buscar($busca, $tabl) {

        switch ($tabl) {
            case 'finado':
                $result = $this->db->query('SELECT *,orden.Estatus From orden, solicitantes WHERE NombreFinado like "%' . $busca . '%" and solicitantes.idSolicitantes=orden.Solicitantes_idSolicitantes ');


                return $result->result();
                break;
            case 'folio':
                $result = $this->db->query('SELECT *,orden.Estatus From orden, solicitantes WHERE Folio like "%' . $busca . '%" and solicitantes.idSolicitantes=orden.Solicitantes_idSolicitantes ');
                return $result->result();
                break;
            case 'solicitante';
                //$result= $this->db->query('SELECTi solicitantes.idSolicitantes  FROM orden.Folio, orden.NombreFinado,orden.Fecha,orden.Total,pagos.Cantidad  WHERE solicitantes.NombreSolicitante='.$buscar.' join orden on orden.Solicitantes_idSolicitantes=solicitantes.idSolicitantes jonn pagos on pagos.OrdenServicio_Folio=orden.Folio');
                $result = $this->db->query('SELECT *,orden.Estatus From orden, solicitantes WHERE NombreSolicitante like "%' . $busca . '%" and solicitantes.idSolicitantes=orden.Solicitantes_idSolicitantes ');

                return $result->result();
                break;
            default:
                $result = null;
                break;
        }
    }

    public function seleccionar($id) {
        $sql = $this->db->query('SELECT * FROM orden,solicitantes,comunidad,sucursal,usuarios WHERE orden.Folio= ' . $id . ' and usuarios.idUsuarios = orden.PersonaAtendio and orden.Sucursal_idSucursal = sucursal.idSucursal and solicitantes.idSolicitantes = orden.Solicitantes_idSolicitantes and solicitantes.Comunidad_idComunidad=comunidad.idComunidad ');
        return $sql->result();
    }

    public function buscarSolicitante($busca) {


        //$result= $this->db->query('SELECTi solicitantes.idSolicitantes  FROM orden.Folio, orden.NombreFinado,orden.Fecha,orden.Total,pagos.Cantidad  WHERE solicitantes.NombreSolicitante='.$buscar.' join orden on orden.Solicitantes_idSolicitantes=solicitantes.idSolicitantes jonn pagos on pagos.OrdenServicio_Folio=orden.Folio');
        $result = $this->db->query('SELECT * From  solicitantes WHERE NombreSolicitante like "%' . $busca . '%" ');

        return $result->result();
    }
    
    
    
      public function buscarCom($busca, $tabl) {

        switch ($tabl) {
            case 'comunidad':
                $result = $this->db->query('SELECT *,apoyo.Estatus From apoyo, solicitantes,comunidad WHERE NombreC like "%' . $busca . '%" and solicitantes.idSolicitantes=apoyo.Solicitantes_idSolicitantes and comunidad.idComunidad=solicitantes.Comunidad_idComunidad');


                return $result->result();
                break;
            case 'folio':
                $result = $this->db->query('SELECT *,apoyo.Estatus From apoyo,solicitantes,comunidad WHERE idApoyo like "%' . $busca . '%" and solicitantes.idSolicitantes=apoyo.Solicitantes_idSolicitantes and comunidad.idComunidad=solicitantes.Comunidad_idComunidad');
                return $result->result();
                break;
            case 'solicitante';
                //$result= $this->db->query('SELECTi solicitantes.idSolicitantes  FROM orden.Folio, orden.NombreFinado,orden.Fecha,orden.Total,pagos.Cantidad  WHERE solicitantes.NombreSolicitante='.$buscar.' join orden on orden.Solicitantes_idSolicitantes=solicitantes.idSolicitantes jonn pagos on pagos.OrdenServicio_Folio=orden.Folio');
                $result = $this->db->query('SELECT *,apoyo.Estatus From apoyo, solicitantes,comunidad WHERE NombreSolicitante like "%' . $busca . '%" and solicitantes.idSolicitantes=apoyo.Solicitantes_idSolicitantes and comunidad.idComunidad=solicitantes.Comunidad_idComunidad ');

                return $result->result();
                break;
            default:
                $result = null;
                break;
        }
        
    }
    
    public function seleccionarCom($idco) {
        $sql = $this->db->query('SELECT * FROM apoyo,solicitantes,comunidad,beneficiarios,tipo,sucursal,usuarios WHERE apoyo.idApoyo= ' . $idco . ' and usuarios.idUsuarios = apoyo.PersonaAtendio and apoyo.Sucursal_idSucursal = sucursal.idSucursal and solicitantes.idSolicitantes = apoyo.Solicitantes_idSolicitantes and solicitantes.Comunidad_idComunidad=comunidad.idComunidad and apoyo.idApoyo=beneficiarios.Apoyo_idApoyo and tipo.idTipo=beneficiarios.Tipo_idTipo');
        return $sql->row();
    } 
    
    public function selecBen($idco){
         $sql = $this->db->query('SELECT * FROM beneficiarios,apoyo,tipo WHERE  apoyo.idApoyo='.$idco.' and apoyo.idApoyo=beneficiarios.Apoyo_idApoyo and tipo.idTipo=beneficiarios.Tipo_idTipo');
        return $sql->result();
        
    }
public function selecapo($idco){
         $sql = $this->db->query('SELECT * FROM apoyo,sucursal WHERE apoyo.idApoyo='.$idco.' and apoyo.Sucursal_idSucursal=sucursal.idSucursal');
        return $sql->row();
        
    }
}
