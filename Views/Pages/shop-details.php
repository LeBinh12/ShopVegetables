


<?php

    if(isset($_GET['idct'])){
        $id = $_GET['idct'];
    }
?>
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <?php 
                ProductDetail($id);
            ?>
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
