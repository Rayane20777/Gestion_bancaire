<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceAtm.php");

    class Service extends Database implements IService {
        
        public function insert(Atm $atm){

            $pdo = $this->connect();

            $id = $atm->getId();
            $longitude = $atm->getLongitude();
            $latitude = $atm->getLatitude();
            $address = $atm->getAddress();
            $bank_id = $atm->getBank_id();
            
            $sql = "INSERT INTO atm VALUES (:id, :longitude, :latitude, :address, :bank_id)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":longitude", $longitude);
            $stmt->bindParam(":latitude", $latitude);
            $stmt->bindParam(":address", $address);
            $stmt->bindParam(":bank_id", $bank_id);

            $stmt->execute();


        }
        public function edit(Atm $atm){

            $pdo = $this->connect();

            $id = $atm->getId();
            $longitude = $atm->getLongitude();
            $latitude = $atm->getLatitude();
            $address = $atm->getAddress();
            $bank_id = $atm->getBank_id();
            
            $sql = "UPDATE `atm` SET `longitude`=:longitude,`latitude`=:latitude,`address`=:address,`bank_id`=:bank_id WHERE `id`=:id";


            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":longitude", $longitude);
            $stmt->bindParam(":latitude", $latitude);
            $stmt->bindParam(":address", $address);
            $stmt->bindParam(":bank_id", $bank_id);
            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM atm WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM atm";

            $data = $pdo->query($sql);
            $atms = $data->fetchAll(PDO::FETCH_ASSOC);

            return $atms;


        }

    }

?>