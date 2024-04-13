<?php 
    function AddCart($id,$price,$quantity,$uid){
        $url = "http://127.0.0.1:8000/api/AddCart";
        $ch = curl_init();
        // Cấu hình các tùy chọn cho yêu cầu cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //sử dụng phương thức PÓST
    curl_setopt($ch, CURLOPT_POST, true);
    
    $data = [
        'product_id'=>$id,
        'quantity'=>$quantity,
        'price'=>$price,
        'uid'=>$uid,
    ];
    // Định dạng dữ liệu POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    
    // Thực thi yêu cầu cURL và lấy kết quả
    $response = curl_exec($ch);
    if($response === false){
        echo "CURL Error: " . curl_error($ch);
    }else {
        return $response;
    }
    // Đóng cURL handle
    curl_close($ch);
    }
    function UpProduct($id,$uid){
        $url = "http://127.0.0.1:8000/api/UpQuantity";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = [
            "Cart_id"=>$id,
            "uid"=> $uid
        ];
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        
        $response = curl_exec($ch);
        echo $id;
        if($response === false){
            echo "CURL Error: " . curl_error($ch);
            
        }else {
            echo '<meta http-equiv="refresh" content="0">';
            return $response;
            
        }
        
    }

    function DownProduct($id,$uid){
        $url = "http://127.0.0.1:8000/api/DownQuantity";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = [
            "Cart_id"=>$id,
            "uid"=> $uid
        ];
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        
        $response = curl_exec($ch);
        echo $id;
        if($response === false){
            echo "CURL Error: " . curl_error($ch);
            
        }else {
            echo '<meta http-equiv="refresh" content="0">';
            return $response;
            
        }
        
    }

    function DeleteCart($id,$uid){
      
        $url = "http://127.0.0.1:8000/api/DeleteCart";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = [
            "Cart_id"=>$id,
            "uid"=> $uid
        ];
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

         $response = curl_exec($ch);
        echo $id;
        if($response === false){
            echo "CURL Error: " . curl_error($ch);
            
        }else {
            echo '<meta http-equiv="refresh" content="0">';
            return $response;
            
        }
    }
?>