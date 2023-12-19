<?php

    // require("../models/User.php");
    require(__DIR__ . "/Database.php");
    require("IServicePermission.php");

    class Service extends Database implements IService {
        
        public function insert(Permission $permission){

            $pdo = $this->connect();

            $id = $permission->getId();
            $name = $permission->getName();
            $description = $permission->getDescription();
            
            $sql = "INSERT INTO permission VALUES (:id, :name, :description)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);

            $stmt->execute();


        }

        public function delete($id){

            $pdo = $this->connect();
            
            $sql = "DELETE FROM permission WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();


        }

        public function display(){

            $pdo = $this->connect();
            
            $sql = "SELECT * FROM permission";

            $data = $pdo->query($sql);
            $permissions = $data->fetchAll(PDO::FETCH_ASSOC);

            return $permissions;


        }

    }

?>