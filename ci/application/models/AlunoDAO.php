<?php
    class AlunoDAO extends CI_Model{
        
        public function getUser($email,$senha){
            //SELECT * FROM Usuario WHERE
            //email = $email AND senha = $senha 
            $this->db->where('email',$email);
		    $this->db->where('senha',$senha);
		    $alu = $this->db->get('aluno');
		    require_once APPPATH."models/aluno.php";
		    if ($alu->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $aluno = $alu->result()[0];
		        $id = $aluno->id;
		        $nome = $aluno->nome;
		        $emailAlu = $aluno->email;
		        $senhaAlu = $aluno->senha;
		        return new AlunoModel($id,$nome,$emailAlu,$senhaAlu);
            }else{
                return null;
            }
    
        }
    }
    
?>