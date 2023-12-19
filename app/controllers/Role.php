<?php


    require(__DIR__ . "/../models/Role.php");
    require(__DIR__ . "/../service/ServiceRole.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $name = $_POST['name'];

        $role = new Role($name);

        $service = new Service();
        
        $service->insert($role);

        header("Location: ../../public/role.php");


    } else {
        
        $service = new Service();
        
        $roles = $service->display();


    }

?>