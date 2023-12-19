<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceUser.php");

    class Service extends Database implements IService {
        
        public function insert(User $user){

            $pdo = $this->connect();

            $id = $user->getId();
            $username = $user->getUsername();
            $password = $user->getPassword();
            $nationality = $user->getNationality();
            $gender = $user->getGender();
            $address_id = $user->getAddress_id();
            $agency_id = $user->getAgency_id();
            $date = $user->getDate();
            
            $sql = "INSERT INTO user VALUES (:id, :username, :password, :nationality, :gender, :address_id, :agency_id, :date)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":nationality", $nationality);
            $stmt->bindParam(":gender", $gender);
            $stmt->bindParam(":address_id", $address_id);
            $stmt->bindParam(":agency_id", $agency_id);
            $stmt->bindParam(":date", $date);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM user WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM user";

            $data = $pdo->query($sql);
            $users = $data->fetchAll(PDO::FETCH_ASSOC);

            return $users;


        }

    }

?>