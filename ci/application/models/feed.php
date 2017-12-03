<?php
    
    class Feed extends PostModel{ //post
        
        
        //METODO MOSTRAR AULAS CADASTRADAS 02/12 
        
        public function mostrar(){
            $this->db->order_by('titulo', 'asc');
           // return $this->db->get($this->post);
            
            $query = $this->db->get('post');
                 if ($query->num_rows() > 0)
                {
                  return $query->result();
                }
                  else
                {
                  return false;
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