<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceAtm.php");

    class Service extends Database implements IService {
        
        public function insert(Atm $agency){

            $pdo = $this->connect();

            $id = $agency->getId();
            $longitude = $agency->getLongitude();
            $latitude = $agency->getLatitude();
            $address = $agency->getAddress();
            $bank_id = $agency->getBank_id();
            
            $sql = "INSERT INTO atm VALUES (:id, :longitude, :latitude, :address, :bank_id)";

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