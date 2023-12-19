<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceTransaction.php");

    class Service extends Database implements IService {
        
        public function insert(Transaction $transaction){

            $pdo = $this->connect();

            $id = $transaction->getId();
            $type = $transaction->getType();
            $amount = $transaction->getAmount();
            $account_id = $transaction->getAccount_id();
            
            $sql = "INSERT INTO transaction VALUES (:id, :type, :amount, :account_id)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM transaction WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM transaction";

            $data = $pdo->query($sql);
            $transactions = $data->fetchAll(PDO::FETCH_ASSOC);

            return $transactions;


        }

    }

?>