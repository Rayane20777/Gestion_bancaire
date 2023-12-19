<?php


    require(__DIR__ . "/../models/Permission.php");
    require(__DIR__ . "/../service/ServicePermission.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $id = uniqid(mt_rand(), true);
        $name = $_POST['name'];
        $description = $_POST['description'];

        $permission = new Permission($id, $name, $description);

        $service = new Service();
        
        $service->insert($permission);

        header("Location: ../../public/index.php");


    } else {
        
        $service = new Service();
        
        $permissions = $service->display();


    }

?>