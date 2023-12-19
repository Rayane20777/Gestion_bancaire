<?php


    require(__DIR__ . "/../models/Permission.php");
    require(__DIR__ . "/../service/ServicePermission.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='addPermission'){

        $id = uniqid(mt_rand(), true);
        $name = $_POST['name'];
        $description = $_POST['description'];

        $permission = new Permission($id, $name, $description);

        $service = new Service();
        
        $service->insert($permission);

        header("Location: ../../public/index.php");


    }  else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='editPermission'){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $permission = new Permission($id, $name, $description);

        $service = new Service();
        
        $service->edit($permission);

        header("Location: ../public/index.php");


    }else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='deletePermission'){

        $id = $_POST['delete_id'];

        $service = new Service();
        
        $service->delete($id);

        header("Location: ../../public/index.php");


    } else {
        
        $service = new Service();
        
        $permissions = $service->display();



    }

?>