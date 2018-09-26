<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model
{
	public function mostrar_producto(){
        $this->db->select("p.nombre_producto, tp.nombre_tipo, p.descripcion_producto, pv.nombre_proveedor, p.stock_minimo_producto, p.existencias_producto, if(p.estado_producto>0,'Activo','Inactivo') as estado_producto, p.fecha_caducidad_producto, p.precio_unitario_producto");
        $this->db->from('tab_producto p');
        $this->db->join('tab_tipo_producto tp','tp.id_tipo= p.id_tipo_producto');
        $this->db->join('tab_proveedor pv','pv.id_proveedor= p.id_proveedor_producto'); 
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    
}
