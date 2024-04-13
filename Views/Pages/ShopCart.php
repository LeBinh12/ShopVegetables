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
                                
                               
                               <?php Cart($uid) ;

                                
                               ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
             
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>$454.98</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
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
    if(isset($_POST['Delete_Cart'])){ 
        
        $idCart = $_POST['Delete_Cart'];
        $uid = $_COOKIE['uid'];
        echo "<h1>".$idCart."</h1>";
        DeleteCart($idCart, $uid);
    } 
?>