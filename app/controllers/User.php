<?php


    require(__DIR__ . "/../models/User.php");
    require(__DIR__ . "/../service/ServiceUser.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $id = uniqid(mt_rand(), true);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nationality = $_POST['nationality'];
        $gender = $_POST['gender'];
        $address_id = $_POST['address_id'];
        $agency_id = $_POST['agency_id'];
        $date = $_POST['date'];


        $user = new User($id, $username, $password, $nationality, $gender, $address_id, $agency_id, $date);

        $service = new Service();
        
        $service->insert($user);

        header("Location: ../../public/user.php");


    } else {
        
        $service = new Service();
        
        $users = $service->display();


    }

?>