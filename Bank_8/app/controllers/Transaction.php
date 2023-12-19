<?php


    require(__DIR__ . "/../models/Transaction.php");
    require(__DIR__ . "/../service/ServiceTransaction.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='addTransaction'){

        $id = uniqid(mt_rand(), true);
        $type = $_POST['type'];
        $amount = $_POST['amount'];
        $account_id = $_POST['account_id'];

        $transaction = new Transaction($id, $type, $amount, $account_id);

        $service = new Service();
        
        $service->insert($transaction);

        header("Location: ../../public/transaction.php");


    } else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='editTransaction'){

        $id = $_POST['id'];
        $type = $_POST['type'];
        $amount = $_POST['amount'];
        $account_id = $_POST['account_id'];


        $transaction = new Transaction($id, $type, $amount, $account_id);

        $service = new Service();
        
        $service->edit($transaction);

        header("Location: ../public/transaction.php");


    }else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='deleteTransaction'){

        $id = $_POST['delete_id'];

        $service = new Service();
        
        $service->delete($id);

        header("Location: ../../public/transaction.php");


    } else {
        
        $service = new Service();
        
        $transactions = $service->display();



    }

?>