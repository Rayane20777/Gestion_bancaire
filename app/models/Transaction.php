<?php

class Transaction {

    private $id;
    private $type;
    private $amount;
    private $account_id;

    public function __construct($id, $type, $amount,$account_id ){
        $this->id = $id;
        $this->type = $type;
        $this->amount = $amount;
        $this->account_id = $account_id;

    }


    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }
    public function setAccount_id($account_id){
        $this->account_id = $account_id;
    }

    public function getAccount_id(){
        return $this->account_id;
    }




}

?>