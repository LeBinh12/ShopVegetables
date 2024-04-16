
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->
    
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                            <?php GetCategory()?>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="<?php MinPrice() ?>" data-max="<?php MaxPrice() ?>">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Sản Phẩm Mới</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <?php
                                            $data =  NewProduct();
                                            foreach ($data as $Product){
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
                                        ?>
                                        ?>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                    <?php
                                            $data =  NewProduct();
                                            foreach ($data as $Product){
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
                                        ?>
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6>Sản Phẩm Tìm Kiếm</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if(isset($_POST['Search'])){
                            $Name = $_POST['Search'];
                            $data = SearchProduct($Name);
                            foreach($data as $Product) {
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
                        }
                            
                        ?>
                </div>
                <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
            </div>
        </div>
    </section>