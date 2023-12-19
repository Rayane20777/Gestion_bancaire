<?php


    require(__DIR__ . "/../models/Role.php");
    require(__DIR__ . "/../service/ServiceRole.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='addRole'){

        $name = $_POST['name'];

        $role = new Role($name);

        $service = new Service();
        
        $service->insert($role);

        header("Location: ../../public/role.php");


    } else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='editRole'){

        $name = $_POST['name'];

        $role = new Role($name);

        $service = new Service();
        
        $service->edit($role);

        header("Location: ../public/role.php");


    }else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='deleteRole'){

        $name = $_POST['name'];

        $service = new Service();
        
        $service->delete($name);

        header("Location: ../../public/role.php");


    } else {
        
        $service = new Service();
        
        $roles = $service->display();



    }

?>