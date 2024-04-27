<?php 
    if(isset($_POST['CheckOut'])){
        $uid = $_COOKIE['uid'];
    }
?>

<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="index.php?Page=Views/Cart/Ordered.php&$_COOKIE['uid']" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        <input type="text" name="NameCustomer">
                                    </div>  
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Quốc Gia<span>*</span></p>
                                <input type="text" name="National">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" name="Address">

                                <!-- <input name="AddressCustomer" type="text" placeholder="Số nhà,Tên Hẻm (Nếu có),Tên đường,Tên phường (xã), Tên quận (huyện), Tên thành phố (thị xã), Tên Tỉnh (thành phố trực thuộc TW)"> -->
                            </div>
                            <div class="checkout__input">
                                <p>Thị Trấn/Thành phố<span>*</span></p>
                                <input type="text" name="CityOrTown">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>số điện thoại<span>*</span></p>
                                        <input type="text" placeholder="0328 xxxx xx" name="Phone"> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" placeholder="xxxx@gmail.com" Name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Bạn có muốn lưu thông tin?
                                    <input type="checkbox" id="acc" name="SaveData">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Bạn có thể lưu thông tin để trên máy cho phép lần sau mua hàng thì không cần nhập thông tin</p>
                            <div class="checkout__input">
                                <p>Order notes</p>
                                <input type="text"
                                    placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng." name="OrderNote">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul><?php 
                                    $data = Cart($uid);
                                    $sum = 0;
                                    foreach($data as $product) {
                                        $Cart_id =  $product["Cart_id"];
                                        $ProductID = $product["product_id"];
                                            $products = ProductDetail($ProductID);
                                            foreach($products as $Product){
                                                $Total = $product['quantity']*$product['Price'];
                                                ?>                                               
                                                <li style="text-overflow: ellipsis"><?php echo $Product['Name']?><span><?php echo number_format($Total,0,",",".",)?>đ</span></li>

                                            <?php 
                                            $sum+=$Total;
                                            }

                                    }
                                    ?>
                                    <input type="hidden" value="<?php echo $sum ?>" name="Total">
                                    <input type="hidden" value="<?php echo $Cart_id?>" name>
                                    <input type="hidden" value="<?php echo $sum ?>" name>
                                    <input type="hidden" value="<?php echo $sum ?>" name>
                                    <input type="hidden" value="<?php echo $sum ?>" name>

                                </ul>
                                <div class="checkout__order__total">Total: <span name="Total"><?php echo number_format($sum,0,",",".",)?>đ</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn" name="Order">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
