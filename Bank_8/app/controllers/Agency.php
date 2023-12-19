<?php


    require(__DIR__ . "/../models/Agency.php");
    require(__DIR__ . "/../service/ServiceAgency.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='addAgency'){

        $id = uniqid(mt_rand(), true);
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $bank_id = $_POST['bank_id'];
        $address_id = $_POST['address_id'];

        $agency = new Agency($id, $longitude, $latitude, $bank_id, $address_id);

        $service = new Service();
        
        $service->insert($agency);

        header("Location: ../../public/agency.php");


    } else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='editAgency'){

        $id = $_POST['id'];
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $bank_id = $_POST['bank_id'];
        $address_id = $_POST['address_id'];


        $agency = new Agency($id, $longitude, $latitude, $bank_id, $address_id);

        $service = new Service();
        
        $service->edit($agency);

        header("Location: ../public/agency.php");


    }else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='deleteAgency'){

        $id = $_POST['delete_id'];

        $service = new Service();
        
        $service->delete($id);

        header("Location: ../../public/agency.php");


    } else {
        
        $service = new Service();
        
        $agencys = $service->display();



    }

?>