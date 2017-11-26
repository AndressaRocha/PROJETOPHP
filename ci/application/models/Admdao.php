<?php
    class Admdao extends CI_Model{
        
        public function getUser($email,$senha){
            //SELECT * FROM Usuario WHERE
            //email = $email AND senha = $senha 
            $this->db->where('email',$email);
		    $this->db->where('senha',$senha);
		    $adm = $this->db->get('adm');
		    require_once APPPATH."models/adm.php";
		    if ($adm->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $administrador = $adm->result()[0];
		        $id = $administrador->id;
		        $nome = $administrador->nome;
		        $emailAlu = $administrador->email;
		        $senhaAlu = $administrador->senha;
		        return new AdmModel($id,$nome,$emailAlu,$senhaAlu);
            }else{
                return null;
            }
    
        }
    }
    
?>