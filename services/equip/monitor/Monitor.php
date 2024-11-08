<?php
    class MonitorService{
        //Attributes
        private $db;

        //Constructor
        public function __construct($connection){
            $this->db = $connection;
        }

        // Metodos
        public function obterTodos(){
            $result = mysqli_query($this->db,"SELECT * FROM monitores");
            return $result;
        }

        public function obter($id){
            // Prepara a consulta
            $stmt = $this->db->prepare("SELECT * FROM monitores WHERE id = ?");
            $stmt->bind_param("i", $id);
            // Executa a consulta
            $stmt->execute();

            // Obter o resultado
            $result = $stmt->get_result();
            if($row = $result->fetch_assoc()){
                return $row;
            }else{
                return null;
            }
        }

        public function cadastrar(){
            // Code here
        }

        public function editar(){
            // Code here
        }

        public function deletar($id){
            $stmt = $this->db->prepare("DELETE FROM monitores WHERE id = ?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }
    }

?>