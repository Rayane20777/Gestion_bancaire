<?php

    class Atm {

        private $id;
        private $longitude;
        private $latitude;
        private $address;
        private $bank_id;

        public function __construct($id, $longitude, $latitude, $address ,$bank_id){
            $this->id = $id;
            $this->longitude = $longitude;
            $this->latitude = $latitude;
            $this->address = $address;
            $this->bank_id = $bank_id;

        }


        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setLongitude($longitude){
            $this->longitude = $longitude;
        }

        public function getLongitude(){
            return $this->longitude;
        }

        public function setLatitude($latitude){
            $this->latitude = $latitude;
        }

        public function getLatitude(){
            return $this->latitude;
        }
        public function setAddress_id($address){
            $this->address = $address;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setBank($bank_id){
            $this->bank_id = $bank_id;
        }

        public function getBank_id(){
            return $this->bank_id;
        }
        




    }

?>