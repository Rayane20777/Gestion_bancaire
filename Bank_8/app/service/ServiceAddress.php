<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceAddress.php");

    class Service extends Database implements IService {
        
        public function insert(Address $address){

            $pdo = $this->connect();

            $id = $address->getId();
            $city = $address->getCity();
            $district = $address->getDistrict();
            $street = $address->getStreet();
            $postal_code = $address->getPostal_code();
            $email = $address->getEmail();
            $telephone = $address->getTelephone();
            $date = $address->getDate();
            
            $sql = "INSERT INTO address VALUES (:id, :city, :district, :street, :postal_code, :email, :telephone, :date)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":city", $city);
            $stmt->bindParam(":district", $district);
            $stmt->bindParam(":street", $street);
            $stmt->bindParam(":postal_code", $postal_code);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telephone", $telephone);
            $stmt->bindParam(":date", $date);

            $stmt->execute();


        }
        public function edit(Address $address){

            $pdo = $this->connect();

            $id = $address->getId();
            $city = $address->getCity();
            $district = $address->getDistrict();
            $street = $address->getStreet();
            $postal_code = $address->getPostal_code();
            $email = $address->getEmail();
            $telephone = $address->getTelephone();
            $date = $address->getDate();
            
            $sql = "UPDATE `address` SET `city`=:city,`district`=:district,`street`=:street,`postal_code`=:postal_code,`email`=:email,`telephone`=:telephone,`date`=:date WHERE `id`=:id";


            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":city", $city);
            $stmt->bindParam(":district", $district);
            $stmt->bindParam(":street", $street);
            $stmt->bindParam(":postal_code", $postal_code);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telephone", $telephone);
            $stmt->bindParam(":date", $date);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM address WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM address";

            $data = $pdo->query($sql);
            $addresss = $data->fetchAll(PDO::FETCH_ASSOC);

            return $addresss;


        }

    }

?>