<?php

class User {

    private $id;
    private $username;
    private $password;
    private $nationality;
    private $gender;
    private $address_id;
    private $agency_id;
    private $date;

    public function __construct($id, $username, $password, $nationality, $gender, $address_id, $agency_id ,$date){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->nationality = $nationality;
        $this->gender = $gender;
        $this->address_id = $address_id;
        $this->agency_id = $agency_id;
        $this->date = $date;

    }


    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setNationality($nationality){
        $this->nationality = $nationality;
    }

    public function getNationality(){
        return $this->nationality;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getGender(){
        return $this->gender;
    }
    public function setAddress_id($address_id){
        $this->address_id = $address_id;
    }

    public function getAddress_id(){
        return $this->address_id;
    }
    public function setAgency_id($agency_id){
        $this->agency_id = $agency_id;
    }

    public function getAgency_id(){
        return $this->agency_id;
    }
    public function setDate($date){
        $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }



}

?>