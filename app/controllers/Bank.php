<?php


    require(__DIR__ . "/../models/Bank.php");
    require(__DIR__ . "/../service/ServiceBank.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='addBank'){

        $id = uniqid(mt_rand(), true);
        $name = $_POST['name'];
        $logo = $_POST['logo'];

        $bank = new Bank($id, $name, $logo);

        $service = new Service();
        
        $service->insert($bank);

        header("Location: ../../public/bank.php");


    } else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='editBank'){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $logo = $_POST['logo'];

        $bank = new Bank($id, $name, $logo);

        $service = new Service();
        
        $service->edit($bank);

        header("Location: ../public/bank.php");


    }else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='deleteBank'){

        $id = $_POST['delete_id'];

        $service = new Service();
        
        $service->delete($id);

        header("Location: ../../public/bank.php");


    } else {
        
        $service = new Service();
        
        $banks = $service->display();



    }

?>