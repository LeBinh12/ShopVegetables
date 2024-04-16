<?php

function GetCategory(){
    $url = "http://127.0.0.1:8000/api/Category";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);


        if($data){
            //Duyet cac danh sach co trong mang Category
            foreach($data["data"] as $category){
                ?>
                <li><a href="index.php?Page=Views/Pages/ProductCategory.php&id=<?php echo $category["id"] ?>"><?php echo $category["Name"] ?></a></li>
                <?php

            }
        } else{
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    } else{
        echo "Lỗi không kết nói được với API";
    }
}

function GetCategoryImage(){
    $url = "http://127.0.0.1:8000/api/Category";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);

        $arr = array();
        if($data){
            //Duyet cac danh sach co trong mang Category
            foreach($data["data"] as $category){
                if($category["Name"]!="Thực phẩm đại dương"&&$category["Name"]!="FastFood"){
                $arr[] = $category;
                }    
            }
            return $arr;
        } else{
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    } else{
        echo "Lỗi không kết nói được với API";
    }
}

function GetProductRandom($quantity){
    $url = "http://127.0.0.1:8000/api/ProductRandom";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);
    $arr = array();
    if($response){
        $data = json_decode($response, true);
        if($data){
            $count = 0;
            foreach($data['data'] as $Product){
                if($count >= $quantity){
                    break;
                }
                $arr[] = $Product;
$count++;
                }
                return $arr;
                
               
            }
        }

    }


    function SearchProduct($Name){
        $url = "http://127.0.0.1:8000/api/Search/$Name";
        $curl =curl_init($url);
    
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
    
        $response = curl_exec($curl);
    
        if($response){
            $data = json_decode($response, true);
            $arr = array();
            if($data){
                $count = 0;
                foreach($data['data'] as $Product){
                    if($count >= 16){
                        break;
                    }
                    $arr[] = $Product;
                    
                    $count++;
                    }
                    return $arr;
                    
                   
                }
                else {
                    echo "<h3>Sản Phẩm Bạn Tìm Không Có!</h3>
                    <img src='img/blog/download.png'>";
                }
            }
    
        }
    



    function GEtProductCategory($id){
        $url = "http://127.0.0.1:8000/api/ProductCategory/$id";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);

        if($data){
            $count = 0;
            foreach($data as $Product){
                if($count >=8){
                    break;
                }
                ?>

                <div class="featured__item">
                                <div class="featured__item__pic set-bg">
                                <img src="<?php echo $Product["Image"] ?> " alt="">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                 <div class="featured__item__text">
                                    <h6><a href="index.php?Page=Views/Pages/shop-details.php&idct=<?php echo $Product["id"] ?>"><?php echo $Product["Name"] ?></a></h6>
                                    <h5><?php echo number_format($Product["Price"],0,",",".",)?>đ</h5>
                                </div>
                            </div>
                <?php
                $count++;
            }
        }
    }
 }

 function ProductCategoryRandom($id){
    $url = "http://127.0.0.1:8000/api/ProductCategoryRandom/$id";
    $curl =curl_init($url);
    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
    
    $response = curl_exec($curl);
    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){
           foreach($data["data"] as $Product){
                $arr[] = $Product;
                      }
                return $arr;
        }
    }
 }
 

 function ProductDetail($id){
    $url = "http://127.0.0.1:8000/api/Product/$id";
$curl =curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

$response = curl_exec($curl);

if($response){
    $data = json_decode($response, true);
    $arr = array();
    if($data){
        foreach($data["data"] as $Product){
           
                $arr[] = $Product;
            }
            return $arr;
        }
    }
}



 function GetBannerRandom(){
    $url = "http://127.0.0.1:8000/api/BannerRandom";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){
            $count = 0;
            foreach($data["data"] as $Banner){
                if($count>=2){
                    break;
                }
                $arr[]=$Banner;
                $count++;
            }
            return $arr;
        }
        else{
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    }
    else{
        echo "Không kết nối được với API";
    }
    

 }

 function GetBanner($id){
    $url = "http://127.0.0.1:8000/api/Banner/$id";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);

        if($data){
            $count = 0;
            foreach($data["data"] as $Banner){
                if($count>=2){
                    break;
                }
                ?>
                        <!-- Nếu có thông tin
                            <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div> -->
                            <img src="<?php echo $Banner["Image"] ?>" >
                        
                <?php
                $count++;
            }
        }
        else{
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    }
    else{
        echo "Không kết nối được với API";
    }
    

 }

function NewProductCategory($categoryID,$count){
    $url = "http://127.0.0.1:8000/api/NewProductCategory/$categoryID";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);
    $quantity = 0;
    $arr = array();
    if($response){
        $data = json_decode($response, true);
        if($data){
            foreach($data["data"] as $Product){
                if($quantity>=$count){
                    break;
                }
                $arr[] = $Product;
                $quantity++;
            }
            return $arr;
        }
        else {
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    }
    else{
        echo "Lỗi không kết nói được với API";
    }
} 
function MaxPrice(){
    $url = "http://127.0.0.1:8000/api/MaxPrice";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);
        if($data){
           echo $data["data"];
        }
    }
}
function MinPrice(){
    $url = "http://127.0.0.1:8000/api/MinPrice";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);
        if($data){
            echo number_format($data["data"],0,",",".",);
        }
    }
}

function NewProduct() {

    $url = "http://127.0.0.1:8000/api/NewProduct";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);
    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){

            foreach($data["data"] as $Product){
                    $arr[] = $Product;
            }
            return $arr;
        }
    }

}

function SaleProduct(){
    $url = "http://127.0.0.1:8000/api/Product";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);
        if($data){
            foreach($data["data"] as $Product){
                if($Product["Sale"]==null){
                    continue;
                }
                ?>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg">
                                            <img src="<?php echo $Product["Image"] ?>" alt="">
                                            <div class="product__discount__percent"><?php echo $Product["Sale"] ?></div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <!-- <span>Dried Fruit</span> -->
                                            <h5><a href="#"><?php $Product["Name"] ?></a></h5>
                                            <div class="product__item__price"><?php echo number_format($Product["Price"],0,",",".",); ?>đ<span>10.000đ</span></div>
                                        </div>
                                    </div>
            </div>
                <?php
                
            }
        }
    }
}



  
function Cart($uid){
    $url = "http://127.0.0.1:8000/api/Cart/$uid";
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response) {
        $data = json_decode($response, true);
        if ($data) {
            if (empty($data["data"])) {
                ?>
                    <tr>
                        <td colspan="5">Không có hàng trong giỏ</td>
                    </tr>
                <?php
            }
            $arr = array();
            foreach ($data["data"] as $product) {
               
                $arr[] = $product;
            }
            return $arr;
            
            
        } else {
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    } else {
        echo "Lỗi không kết nối được với API";
    }
}



    function CountProduct($uid)
    {
        $url = "http://127.0.0.1:8000/api/Cart/$uid";
        $curl = curl_init($url);
    
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Thiết lập CURLOPT_RETURNTRANSFER thành true
    
        $response = curl_exec($curl);
    
        if ($response) {
            $data = json_decode($response, true);
    
            if ($data && isset($data["data"])) { // Kiểm tra xem mảng "data" có tồn tại trong dữ liệu trả về hay không
                $productCount = count($data["data"]);
    
                echo $productCount;
            }
        }
    
        return 0; // Trả về 0 nếu không có dữ liệu hoặc có lỗi
    }




?>