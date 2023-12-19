<?php

    class Bank {

        private $id;
        private $name;
        private $logo;

        public function __construct($id, $name, $logo){
            $this->id = $id;
            $this->name = $name;
            $this->logo = $logo;

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

        public function setLogo($logo){
            $this->logo = $logo;
        }

        public function getLogo(){
            return $this->logo;
        }




    }

?>