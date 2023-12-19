<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceBank.php");

    class Service extends Database implements IService {
        
        public function insert(Bank $bank){

            $pdo = $this->connect();

            $id = $bank->getId();
            $name = $bank->getName();
            $logo = $bank->getLogo();
            
            $sql = "INSERT INTO bank VALUES (:id, :name, :logo)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":logo", $logo);

            $stmt->execute();


        }
        
        public function edit(Bank $bank){

            $pdo = $this->connect();

            $id = $bank->getId();
            $name = $bank->getName();
            $logo = $bank->getLogo();
            
            $sql = "UPDATE `bank` SET `name`=:name,`logo`=:logo WHERE `id`=:id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":logo", $logo);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM bank WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM bank";

            $data = $pdo->query($sql);
            $banks = $data->fetchAll(PDO::FETCH_ASSOC);

            return $banks;


        }

    }

?>