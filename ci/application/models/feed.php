<?php
    
    class Feed extends Post{
        
        //METODO MOSTRAR AULAS CADASTRADAS 02/12 
        
        public function Mostrar($titulo, $disciplina, $data, $hora, $descricao){

		    $feed = $this->db->get('post');
		    require_once APPPATH."models/feed.php"; //Não sei qual chamar 
		    if ($feed->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $dados = $feed->result()[0];
		        $titulo = $dados->titulo;
		        $disciplina = $dados->disciplina;
		        $data = $dados->data;
		        $hora = $dados->hora;
		        $descricao = $dados->descricao;
		        
		        return new PostModel($titulo, $disciplina, $data, $hora, $descricao); //qual modal chamo? 
            }else{
                return null;
            }
    
        }
        
        
        //METODO PESQUISAR AULA  
        public function Pesquisar(){
            
        }
    
        public function getClassName(){
            return "Feed";
        }
    }
?>