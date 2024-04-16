<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".category1">Thịt</li>
                            <li data-filter=".category8">Hoa Quả</li>
                            <li data-filter=".category2">Rau</li>
                            <li data-filter=".category5">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                 

                <?php
                    $data = GetProductRandom(12);
                    foreach ($data as $Product){
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
                    }
                    ?>

                

                

          

            
        </div>
    </section>