<?php


    require(__DIR__ . "/../models/Address.php");
    require(__DIR__ . "/../service/ServiceAddress.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"&& $_POST['action']=='addAddress'){

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


    } else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='editAddress'){

        $id = $_POST['id'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $street = $_POST['street'];
        $postal_code = $_POST['postal_code'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $date = $_POST['date'];


        $address = new Address($id, $city, $district, $street, $postal_code, $email, $telephone, $date);

        $service = new Service();
        
        $service->edit($address);

        header("Location: ../public/address.php");


    }else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']=='deleteAddress'){

        $id = $_POST['delete_id'];

        $service = new Service();
        
        $service->delete($id);

        header("Location: ../../public/address.php");


    } else {
        
        $service = new Service();
        
        $addresss = $service->display();



    }


?>