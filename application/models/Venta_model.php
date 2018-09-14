<?php
//Creamos la Insercion de datos de una tabla
class Venta_model extends CI_Model
{ //Inicio de consulta

          //Se manda a llamar al cliente//
        public function getCliente()
        {
            $this->load->database();
            $resultado=$this->db->get('tab_cliente');
            return $resultado->result_array();
        }//Fin de llamado de cliente//

            //Se manda a llamar al cliente//
            public function getProducto()
        {
            $this->load->database();
            $result=$this->db->get('tab_producto');
            return $result->result_array();
        }//Fin de llamado de producto//
         

         //Insercion de datos//
        public function nuevoVenta()
        {
            $this->load->database();
            $this->db->trans_begin();//Inicio de transacción//
            
            $this->db->query("INSERT INTO tab_venta(id_cliente,fecha_venta, total_productos_venta,total_venta) VALUES("$id_cliente", "$fecha_venta", "$total_productos_venta", "$total_venta")");

            $id_venta=$this->db->insert_id();//Funciona para recuperar el ultimo id autoincrement ingresado//

             $this->db->query("INSERT INTO tab_venta_producto(id_venta, id_producto) VALUES("$id_venta", "$id_producto")");

             if($this->db->trans_status()===false;
             {
                $this->db->trans_rollback();
                return 0;
             }else
             {
                $this->db->trans_commit();
                return 1;
             }   //Fin de Insercion de datos//

        }

    
}//Fin de Insercion de datos