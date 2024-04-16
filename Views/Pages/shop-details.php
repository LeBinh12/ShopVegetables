


<?php

    if(isset($_GET['idct'])){
        $id = $_GET['idct'];
    }
?>
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <?php 
              $data =  ProductDetail($id);
              foreach ($data as $Product){

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
                    
                    $data = ProductCategoryRandom($CategoryId);
                    foreach ($data as $Product){
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
                ?>
            </div>
            
        </div>

    </section>


        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
   
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
   
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
