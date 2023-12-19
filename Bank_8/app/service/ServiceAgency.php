<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceAgency.php");

    class Service extends Database implements IService {
        
        public function insert(Agency $agency){

            $pdo = $this->connect();

            $id = $agency->getId();
            $longitude = $agency->getLongitude();
            $latitude = $agency->getLatitude();
            $bank_id = $agency->getBank_id();
            $address_id = $agency->getAddress_id();
            
            $sql = "INSERT INTO agency VALUES (:id, :longitude, :latitude, :bank_id, :address_id)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":longitude", $longitude);
            $stmt->bindParam(":latitude", $latitude);
            $stmt->bindParam(":bank_id", $bank_id);
            $stmt->bindParam(":address_id", $address_id);

            $stmt->execute();


        }
        public function edit(Agency $agency){

            $pdo = $this->connect();

            $id = $agency->getId();
            $longitude = $agency->getLongitude();
            $latitude = $agency->getLatitude();
            $bank_id = $agency->getBank_id();
            $address_id = $agency->getAddress_id();
            
            $sql = "UPDATE `agency` SET `longitude`=:longitude,`latitude`=:latitude,`bank_id`=:bank_id,`address_id`=:address_id WHERE `id`=:id";


            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":longitude", $longitude);
            $stmt->bindParam(":latitude", $latitude);
            $stmt->bindParam(":bank_id", $bank_id);
            $stmt->bindParam(":address_id", $address_id);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM agency WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM agency";

            $data = $pdo->query($sql);
            $agencys = $data->fetchAll(PDO::FETCH_ASSOC);

            return $agencys;


        }
    }

?>