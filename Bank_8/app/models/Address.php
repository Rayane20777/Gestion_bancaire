<?php

    class Address {

        private $id;
        private $city;
        private $district;
        private $street;
        private $postal_code;
        private $email;
        private $telephone;
        private $date;

        public function __construct($id, $city, $district, $street, $postal_code, $email, $telephone, $date){
            $this->id = $id;
            $this->city = $city;
            $this->district = $district;
            $this->street = $street;
            $this->postal_code = $postal_code;
            $this->email = $email;
            $this->telephone = $telephone;
            $this->date = $date;

        }


        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setCity($city){
            $this->city = $city;
        }

        public function getCity(){
            return $this->city;
        }
        public function setDistrict($district){
            $this->district = $district;
        }

        public function getDistrict(){
            return $this->district;
        }
        public function setStreet($street){
            $this->street = $street;
        }

        public function getStreet(){
            return $this->street;
        }

        public function setPostal_code($postal_code){
            $this->postal_code = $postal_code;
        }

        public function getPostal_code(){
            return $this->postal_code;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setTelephone($telephone){
            $this->telephone = $telephone;
        }

        public function getTelephone(){
            return $this->telephone;
        }
        public function setDate($date){
            $this->date = $date;
        }

        public function getDate(){
            return $this->date;
        }




    }

?>