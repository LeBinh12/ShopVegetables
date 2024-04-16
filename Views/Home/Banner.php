<div class="banner">
        <div class="container">
        <div class="section-title">
                        <h2>Banner</h2>
                    </div>
            <div class="row">
                <?php 
                    $data = GetBannerRandom();
                    foreach ($data as $Banner){
                        ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="<?php echo $Banner["Image"] ?>" alt="">
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>