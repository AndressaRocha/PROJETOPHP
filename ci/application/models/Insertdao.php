<?php
    require_once APPPATH."models/formulario.php";
    class InsertDAO extends CI_Model{
        public function insert(Formulario $formi){
            //INSERT INTO ...
		    $this->db->insert($formi->getClassName(),$formi->toArray());
	    }
    }
?>