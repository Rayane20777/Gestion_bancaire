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

        public function setRib($rib){
            $this->rib = $rib;
        }

        public function getRib(){
            return $this->rib;
        }
        public function setCurrency($currency){
            $this->currency = $currency;
        }

        public function getCurrency(){
            return $this->currency;
        }
        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance;
        }

        public function setUser_id($user_id){
            $this->user_id = $user_id;
        }

        public function getUser_id(){
            return $this->user_id;
        }

    }

?>