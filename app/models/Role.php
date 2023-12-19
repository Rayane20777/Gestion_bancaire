<?php

    class Role {

        private $name;

        public function __construct( $name){
            $this->name = $name;

        }



        public function setName($name){
            $this->id = $name;
        }

        public function getName(){
            return $this->name;
        }





    }

?>