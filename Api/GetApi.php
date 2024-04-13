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


        if($data){
            //Duyet cac danh sach co trong mang Category
            foreach($data["data"] as $category){
                if($category["Name"]!="Thực phẩm đại dương"&&$category["Name"]!="FastFood"){
                ?>
                
                <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/<?php echo $category["Image"]?>">
                            <h5><a href="index.php?Page=Views/Pages/ProductCategory.php&id=<?php echo $category["id"] ?>"><?php echo $category["Name"] ?></a></h5>
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

function GetProductRandom($quantity){
    $url = "http://127.0.0.1:8000/api/ProductRandom";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);
        if($data){
            $count = 0;
            foreach($data['data'] as $Product){
                if($count >= $quantity){
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
                                    <h6><a href="index.php?Page=Views/Pages/shop-details.php&idct=<?php echo $Product["id"] ?>"><?php echo $Product["Name"] ?></a></h6>
                                    <h5><?php echo number_format($Product["Price"],0,",",".",)?>đ</h5>
                                </div>
                            </div>
                    </div>
                <?php
$count++;
                }
                
               
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
            if($data){
                $count = 0;
                foreach($data['data'] as $Product){
                    if($count >= 16){
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
                                        <h6><a href="index.php?Page=Views/Pages/shop-details.php&idct=<?php echo $Product["id"] ?>"><?php echo $Product["Name"] ?></a></h6>
                                        <h5><?php echo number_format($Product["Price"],0,",",".",)?>đ</h5>
                                    </div>
                                </div>
                        </div>
                    <?php
    $count++;
                    }
                    
                   
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
        if($data){
           foreach($data["data"] as $Product){
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" >
                    <img src="<?php echo $Product["Image"] ?>" alt="">
                    <ul class="product__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="index.php?Page=Views/Pages/shop-details.php&idct=<?php echo $Product["id"] ?>"><?php echo $Product["Name"] ?></a></h6>
                    <h5><?php echo number_format($Product["Price"],0,",",".",)?>đ</h5>
                </div>
            </div>
        </div>
        <?php
                      }
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

    if($data){
        foreach($data["data"] as $Product){
           
            ?>
<form action="index.php?Page=Views/Pages/ShopCart.php&$_Cookie['uid']" method="post">
<div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?php echo $Product["Image"] ?>" alt="">
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $Product["Name"] ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price"><?php echo number_format($Product["Price"],0,",",".",)?>đ</div>
                        <p><?php echo $Product["Detail"] ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" name="quantity">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $Product["id"] ?>">
                        <input type="hidden" name="image" value="<?php echo $Product["Image"] ?>">
                        <input type="hidden" name="name" value="<?php echo $Product["Name"] ?>">
                        <input type="hidden" name="price" value="<?php echo $Product["Price"] ?>">


                        <a href="#" class="primary-btn">  <button type="submit" name="AddCart" style="background:#7fad39; "> ADD TO CARD</button></a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>          
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p><?php echo $Product["Detail"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
            <?php
            $CategoryId = $Product["Category_id"];
        }
            ?>
            <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    
                    ProductCategoryRandom($CategoryId);
                ?>
            </div>
            
        </div>

    </section>


        
            <?php

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
    if($response){
        $data = json_decode($response, true);
        if($data){
            foreach($data["data"] as $Product){
                if($quantity>=$count){
                    break;
                }
                ?>
                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo $Product["Image"] ?>" >
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><a href="index.php?Page=Views/Pages/shop-details.php&idct=<?php echo $Product["id"] ?>"><?php echo $Product["Name"] ?> </a></h6>
                                        <span><?php echo number_format($Product["Price"],0,",",".",)?>đ</span>
                                    </div>
                                </a>
                <?php
                $quantity++;
            }
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
        if($data){

            foreach($data["data"] as $Product){
                ?>
            <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?php echo $Product["Image"] ?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><a href="index.php?Page=Views/Pages/shop-details.php&idct=<?php echo $Product["id"] ?>"><?php echo $Product["Name"] ?></a></h6>
                                                <span><?php echo number_format($Product["Price"],0,",",".",); ?></span>
                                            </div>
                                        </a>
                <?php
            }
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
            
            foreach ($data["data"] as $product) {
               
    ?>
    <form action="index.php?Page=Views/Pages/ShopCart.php" method="post">
                        <td class="shoping__cart__item">
                            <img src="<?php echo $product["Image"] ?>" width="100px">
                            <h5><?php echo $product["Name"] ?></h5>
                        </td>
                        <td class="shoping__cart__price">
                            <?php echo number_format($product["Price"], 0, ",", "."); ?>đ
                        </td>
                        <td class="shoping__cart__quantity">
                            <div class="quantity">
                                <input type="hidden" value="<?php echo $product["Cart_id"] ?>" name="id_Cart">
                              
                                <input type="hidden" value="<?php echo $product["uid"] ?>" name="uidCart">

                                <button  name="Up" type="submit"><a href=""><i class="fa-solid fa-plus"></i></a></button>
                                <h5><?php echo $product["quantity"] ?></h5> 
                                <button  name="Down" type="submit"><a href=""></a><i class="fa-solid fa-minus"></i></a></button>
                                
                            </div>
                        </td>
                        <td class="shoping__cart__total">
                            <?php echo number_format($product["Price"] * $product["quantity"], 0, ",", "."); ?>đ
                        </td>
                        <td class="shoping__cart__item__close">  
                            <button name="Delete_Cart" type="submit" value="<?php echo $product["Cart_id"]; ?>"><i class="icon_close"></i></button>                       
                        </td>
                    </tr>
                </form>
    <?php

            }
            
        } else {
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
        }
    } else {
        echo "Lỗi không kết nối được với API";
    }
}





?>