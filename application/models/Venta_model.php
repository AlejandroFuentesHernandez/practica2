<?php
//Inicia la clase Venta_model//
class Venta_model extends CI_Model
{ 

          //Se manda a llamar al cliente//
        public function getCliente()
        {
            $this->load->database();
            $resultado=$this->db->get('tab_cliente');
            return $resultado->result_array();
        }//Fin de llamado de cliente//

            //Se manda a llamar al producto//
            public function getProducto()
        {
            $this->load->database();
            $this->db->where('estado_producto=1');
            $result=$this->db->get('tab_producto');
            return $result->result_array();
        }//Fin de llamado de producto//

       public function getExistencias($cantidad,$id)
        {
            $this->load->database();
            $result=$this->db->query('call existencia ('.$cantidad.','.$id.')');
            return $result->row()->campo;
            //print_r($result);
        } 

        public function getPrecio($id)
        {
            $this->load->database();
            $this->db->where('id_producto',$id);
            $result=$this->db->get('tab_producto');
            return $result->row()->precio_unitario_producto;
        }     

         //Insercion de datos//
        public function nuevoVenta($id_cliente,$fecha_venta,$id_producto, $total_productos_venta,$total_venta)
        {
            $this->load->database();
            $this->db->trans_begin();//Inicio de transacción//
            
            $this->db->query("INSERT INTO tab_venta(id_cliente,fecha_venta, total_venta,total_productos_venta) VALUES(".$id_cliente.", '".$fecha_venta."', ".$total_venta.",".$total_productos_venta.")");

            $id_venta=$this->db->insert_id();//Funciona para recuperar el ultimo id autoincrement ingresado//
            for ($i=0; $i <$total_productos_venta; $i++) { 
               $this->db->query("INSERT INTO tab_venta_producto(id_venta, id_producto) VALUES(".$id_venta.", ".$id_producto.")");
            }
             /*$this->db->query("UPDATE tab_producto SET existencias_producto=(existencias_producto-".$total_productos_venta.") WHERE id_producto=".$id_producto); se comento porque se hizo un trigger*/ 

             if($this->db->trans_status()===false)
             {
                $this->db->trans_rollback();//no se guarda nada en la base, todo volvera desde cero como que si no se hubiera hecho nada
                return 0;
             }else
             {
                $this->db->trans_commit(); //Guarda datos en la base
                return 1;
             }   //Fin de Insercion de datos//

        }

    
}//Fin de clase Venta_model//
