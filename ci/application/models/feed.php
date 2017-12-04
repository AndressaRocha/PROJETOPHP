<?php
require_once APPPATH."models/post.php";   
    class FeedModel extends PostModel{ //post
        
        
        //METODO MOSTRAR AULAS CADASTRADAS 02/12 
        
       /*public function mostrar(){
            $this->db->select("*");
            $this->db->from("post");
            $this->db->order_by('id', 'DESC');
            return $dados = $this->db->get()->result_array();
           
           /* $this->db->order_by('titulo', 'asc');
            $query = $this->db->get('post');
                 if ($query->num_rows() > 0)
                {
                  return $query->result();
                }
                  else
                {
                  return false;
                }
             
       }*/
        
        
        //METODO PESQUISAR AULA  
        public function Pesquisar(){
            
        }
    
        public function getClassName(){
            return "Feed";
        }
    }
?>