<?php
    function DeleteAllCart($uid){
        $url = "http://127.0.0.1:8000/api/DeleteAllCart/".$uid;
        $ch = curl_init();
        
       

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      
       

         $response = curl_exec($ch);
        if($response === false){
            echo "CURL Error: " . curl_error($ch);
            
        }else {
            return $response;  
        }
    }
?>