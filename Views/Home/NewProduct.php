<section class="latest-product spad">
        <div class="container">
        <div class="section-title">
                        <h2>Sản phẩm mới</h2>
                    </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Thịt</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    $data = NewProductCategory(1,3);
                                    foreach($data as $Product){
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
                                    }
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                   $data = NewProductCategory(1,3);
                                   foreach($data as $Product){
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
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Hải Sản</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php
                                   $data = NewProductCategory(3,3);
                                   foreach($data as $Product){
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
                                }
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                  $data =  NewProductCategory(3,3);
                                  foreach($data as $Product){
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
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Hoa Quả</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php
                                   $data = NewProductCategory(8,3);
                                   foreach($data as $Product){
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
                                }
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                    $data = NewProductCategory(8,3);
                                    foreach($data as $Product){
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
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>