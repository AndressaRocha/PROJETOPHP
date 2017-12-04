<?php
require_once APPPATH."models/post.php";   
    class FeedModel extends PostModel{ //post
        
        public function getmostrar(){
	    $dados = $this->db->get_where('post', array('titulo' => $titulo));
	    require_once APPPATH."models/PostModel.php";
	    if($dados->num_rows() > 0){
	        $dado = $dados->result()[0];
	        $id = $dado->id;
	        $titulo = $dado->titulo;
	        $disciplina = $dado->disciplina;
	        $data = $dado->data;
	        $hora = $dado->hora;
	        $descricao = $dado->descricao;
	        return new PostModel($id, $titulo, $disciplina, $data, $hora, $descricao);
	    }
	    else{
	        return null;
	    }
	}
             
       
        
    
        public function getClassName(){
            return "Feed";
        }
    }
?>