<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceAccount.php");

    class Service extends Database implements IService {
        
        public function insert(Account $account){

            $pdo = $this->connect();

            $id = $account->getId();
            $rib = $account->getRib();
            $currency = $account->getCurrency();
            $balance = $account->getBalance();
            $user_id = $account->getUser_id();

            
            $sql = "INSERT INTO account VALUES (:id, :rib, :currency, :balance, :user_id)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":rib", $rib);
            $stmt->bindParam(":currency", $currency);
            $stmt->bindParam(":balance", $balance);
            $stmt->bindParam(":user_id", $user_id);


            $stmt->execute();


        }
        public function edit(Account $account){

            $pdo = $this->connect();

            $id = $account->getId();
            $rib = $account->getRib();
            $currency = $account->getCurrency();
            $balance = $account->getBalance();
            $user_id = $account->getUser_id();
            
            $sql = "UPDATE `account` SET `rib`=:rib,`currency`=:currency,`balance`=:balance,`user_id`=:user_id WHERE `id`=:id";


            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":rib", $rib);
            $stmt->bindParam(":currency", $currency);
            $stmt->bindParam(":balance", $balance);
            $stmt->bindParam(":user_id", $user_id);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM account WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM account";

            $data = $pdo->query($sql);
            $accounts = $data->fetchAll(PDO::FETCH_ASSOC);

            return $accounts;


        }

    }

?>