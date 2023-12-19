 <?php

    class Permission {

        private $id;
        private $name;
        private $description;

        public function __construct($id, $name, $description){
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;

        }


        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setName($name){
            $this->id = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setPassword($description){
            $this->description = $description;
        }

        public function getDescription(){
            return $this->description;
        }




    }

?>