<?php


    require(__DIR__ . "/../models/Address.php");
    require(__DIR__ . "/../service/ServiceAddress.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $id = uniqid(mt_rand(), true);
        $city = $_POST['city'];
        $district = $_POST['district'];
        $street = $_POST['street'];
        $postal_code = $_POST['postal_code'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $date = $_POST['date'];

        $address = new Address($id, $city, $district, $street, $postal_code, $email, $telephone, $date);

        $service = new Service();
        
        $service->insert($address);

        header("Location: ../../public/address.php");


    } else {
        
        $service = new Service();
        
        $addresss = $service->display();


    }

?>