
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                       $data = GetCategoryImage();
                       foreach ($data as $category){
                        ?>
                <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/<?php echo $category["Image"]?>">
                            <h5><a href="index.php?Page=Views/Pages/ProductCategory.php&id=<?php echo $category["id"] ?>"><?php echo $category["Name"] ?></a></h5>
                        </div>
                    </div>
                <?php
                       }
                    ?>
                       
                </div>
            </div>
        </div>
    </section>