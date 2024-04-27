<?php 
    if (isset($_POST["Order"])){
        $Name = $_POST["NameCustomer"];
        $Nation = $_POST["National"];
        $Address = $_POST["Address"];
        $CityOrTown = $_POST["CityOrTown"];
        $Phone = $_POST["Phone"];
        $Email = $_POST["email"];
        $uid = $_COOKIE["uid"];
        $iddon=rand(0,10000000);
        $Total = $_POST["Total"];
        $OrderNote = $_POST["OrderNote"];


        AddOrder($iddon,$Name,$Email, $Phone, $Address, $uid , $Nation, $CityOrTown,$Total,$OrderNote);

        $data = Cart($uid);
        foreach($data as $product){
            $quantity = $product['quantity'];
            $product_id = $product['product_id'];
            $Price = $product['price'];
            
            AddOrderDetails($quantity,$Price,$product_id,$uid,$iddon);
        
            DeleteAllCart($uid);
        }

       



    }
?>