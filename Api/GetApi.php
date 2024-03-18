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
                <li><a href="#"><?php echo $category["Name"] ?></a></li>
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


        if($data){
            //Duyet cac danh sach co trong mang Category
            foreach($data["data"] as $category){
                if($category["Name"]!="Thực phẩm đại dương"&&$category["Name"]!="FastFood"){
                ?>
                
                <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/<?php echo $category["Image"]?>">
                            <h5><a href="#"><?php echo $category["Name"] ?></a></h5>
                        </div>
                    </div>
                <?php
                }    
            }
        } else{
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    } else{
        echo "Lỗi không kết nói được với API";
    }
}

function GetProductRandom(){
    $url = "http://127.0.0.1:8000/api/ProductRandom";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);
        if($data){
            $count = 0;
            foreach($data['data'] as $Product){
                if($count >= 12){
                    break;
                }
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix category<?php echo $Product['Category_id'] ?> fresh-meat"> 
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
                                    <h6><a href="#"><?php echo $Product["Name"] ?></a></h6>
                                    <h5><?php echo $Product["Price"] ?></h5>
                                </div>
                            </div>
                    </div>
                <?php
$count++;
                }
                
               
            }
        }

    }


    function GEtProductCategory($id){
        $url = "http://127.0.0.1:8000/api/Product/$id";
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
                                    <h6><a href="#"><?php echo $Product["Name"] ?></a></h6>
                                    <h5><?php echo $Product["Price"] ?></h5>
                                </div>
                            </div>
                <?php
                $count++;
            }
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

        if($data){
            $count = 0;
            foreach($data["data"] as $Banner){
                if($count>=2){
                    break;
                }
                ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="<?php echo $Banner["Image"] ?>" alt="">
                        </div>
                    </div>
                <?php
                $count++;
            }
        }
        else{
            echo "Khong co san pham";
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
            echo "Khong co san pham";
        }
    }
    else{
        echo "Không kết nối được với API";
    }
    

 }



?>