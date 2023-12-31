<?php


    require(__DIR__ . "/../models/Account.php");
    require(__DIR__ . "/../service/ServiceAccount.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $id = uniqid(mt_rand(), true);
        $rib = $_POST['rib'];
        $currency = $_POST['currency'];
        $balance = $_POST['balance'];
        $user_id = $_POST['$user_id'];


        $account = new Account($id, $rib, $currency, $balance, $user_id);

        $service = new Service();
        
        $service->insert($account);

        header("Location: ../../public/account.php");


    } else {
        
        $service = new Service();
        
        $accounts = $service->display();


    }

?>