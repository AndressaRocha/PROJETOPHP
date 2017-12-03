<?php
    
    class Feed extends Post{
        
        //METODO MOSTRAR AULAS CADASTRADAS 02/12 
        
        public function Mostrar(){
            $this->db->order_by('titulo', 'asc');
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