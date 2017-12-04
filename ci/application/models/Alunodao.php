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
		        $curso = $aluno->curso;
		        $ra = $aluno->ra;
		        $email = $aluno->email;
		        $senha = $aluno->senha;
		        return new AlunoModel($id,$nome,$curso,$ra,$email,$senha);
            }else{
                return null;
            }
    
        }
        public function getSenha($senha){
            //SELECT * FROM Usuario WHERE
            //email = $email AND senha = $senha 
		    $this->db->where('senha',$senha);
		    $alu = $this->db->get('aluno');
		    require_once APPPATH."models/aluno.php";
		    if ($alu->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $this->db->where ('senha',$senha);
		        $this->db->delete('aluno');
		        redirect ('home/form',refresh);
            }else{
                return null;
            }
    
        }
    }
    
?>