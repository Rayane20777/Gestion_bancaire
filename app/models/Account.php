<?php

    class Account {

        private $id;
        private $rib;
        private $currency;
        private $balance;
        private $user_id;

        public function __construct($id, $rib, $currency, $balance, $user_id){
            $this->id = $id;
            $this->rib = $rib;
            $this->currency = $currency;
            $this->balance = $balance;
            $this->user_id = $user_id;


        }


        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setCity($rib){
            $this->rib = $rib;
        }

        public function getCity(){
            return $this->rib;
        }
        public function setDistrict($currency){
            $this->currency = $currency;
        }

        public function getDistrict(){
            return $this->currency;
        }
        public function setStreet($balance){
            $this->balance = $balance;
        }

        public function getStreet(){
            return $this->balance;
        }

        public function setPostal_code($user_id){
            $this->user_id = $user_id;
        }

        public function getPostal_code(){
            return $this->user_id;
        }

    }

?>