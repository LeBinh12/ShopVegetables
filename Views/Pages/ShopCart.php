<?php 
    if(isset($_POST['AddCart'])){
        $id = $_POST["id"];
        $Price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $uid = $_COOKIE['uid'];
      

       
        AddCart($id,$Price,$quantity,$uid);
    }
        ?>
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Shoping Cart Section Begin -->

<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                               
                               <?php $data = Cart($uid) ;
                               $sum = 0 ;
                               foreach ($data as $product) {
                                ?>
    <form action="index.php?Page=Views/Pages/ShopCart.php" method="post">
    <tr>
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
                         <!-- <?php $sum += $product["Price"] * $product["quantity"]?> tính tổng tiền -->
                    </td>
                    <td class="shoping__cart__item__close"> 
                        <form action="index.php?Page=Views/Pages/ShopCart.php" method="post">
                        <input type="hidden" value="<?php echo $product["Cart_id"] ?>" name="idCart">

                        <button name="DeleteCart" type="submit"><i class="icon_close"></i></button>     
                        </form>               
                    </td>
                </tr>
            </form>

<?php

            if($product["quantity"] === 0){

                DeleteCart($product["Cart_id"],$product["uid"]);
            }
                               }
            
                                
                               ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
             
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total <span><?php echo number_format($sum, 0, ",", "."); ?>đ</span></li>
                        </ul>  
                        <form action="index.php?Page=Views/Pages/CheckOut.php" method="post">
                        <button type="submit" name="CheckOut"><i class="primary-btn" >PROCEED TO CHECKOUT</i></button>
                        </form>
\                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
                               

    if(isset($_POST['Up'])){      
        $idCart = $_POST['id_Cart'];
        $uid = $_COOKIE['uid'];
        UpProduct($idCart,$uid);

    } 
    if(isset($_POST['Down'])){      
        $idCart = $_POST['id_Cart'];
        $uid = $_COOKIE['uid'];
        DownProduct($idCart,$uid);
    } 
    // echo '<meta http-equiv="refresh" content="0">';
    if(isset($_POST['DeleteCart'])){ 
        
        $idCart = $_POST['idCart'];
        $uid = $_COOKIE['uid'];
        echo "<h1>".$idCart."</h1>";
        DeleteCart($idCart, $uid);
    } 
?>