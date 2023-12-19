<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServiceRole.php");

    class Service extends Database implements IService {
        
        public function insert(Role $role){

            $pdo = $this->connect();

            $name = $role->getName();
            
            $sql = "INSERT INTO role VALUES (:name)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM role WHERE name = :name";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM role";

            $data = $pdo->query($sql);
            $roles = $data->fetchAll(PDO::FETCH_ASSOC);

            return $roles;


        }

    }

?>