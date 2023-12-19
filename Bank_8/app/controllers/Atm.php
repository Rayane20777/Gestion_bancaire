<?php


    require(__DIR__ . "/../models/Atm.php");
    require(__DIR__ . "/../service/ServiceAtm.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='addAtm'){

        $id = uniqid(mt_rand(), true);
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $address = $_POST['address'];
        $bank_id = $_POST['bank_id'];

        $atm = new Atm($id, $longitude, $latitude, $address, $bank_id);

        $service = new Service();
        
        $service->insert($atm);

        header("Location: ../../public/atm.php");


    } else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='editAtm'){

        $id = $_POST['id'];
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $address = $_POST['address'];
        $bank_id = $_POST['bank_id'];


        $atm = new Atm($id, $longitude, $latitude, $address, $bank_id);

        $service = new Service();
        
        $service->edit($atm);

        header("Location: ../public/atm.php");


    }else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='deleteAtm'){

        $id = $_POST['delete_id'];

        $service = new Service();
        
        $service->delete($id);

        header("Location: ../../public/atm.php");


    } else {
        
        $service = new Service();
        
        $atms = $service->display();



    }

?>