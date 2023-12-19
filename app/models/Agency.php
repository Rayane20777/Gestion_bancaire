<?php

    class Agency {

        private $id;
        private $longitude;
        private $latitude;
        private $bank_id;
        private $address_id;

        public function __construct($id, $longitude, $latitude, $bank_id, $address_id){
            $this->id = $id;
            $this->longitude = $longitude;
            $this->latitude = $latitude;
            $this->bank_id = $bank_id;
            $this->address_id = $address_id;

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
        public function setBank_id($bank_id){
            $this->bank_id = $bank_id;
        }

        public function getBank_id(){
            return $this->bank_id;
        }
        public function setAddress_id($address_id){
            $this->address_id = $address_id;
        }

        public function getAddress_id(){
            return $this->address_id;
        }




    }

?>