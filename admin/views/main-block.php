<div class="col-lg-6 col-md-6 col-sm-6 text-center">
    <div id="gallery">

        <?php
        foreach ($items as $item) { ?>
            <div class="item">
                <img src="<?php echo IMAGE_PATH . $item[1]; ?>" alt="">

                <h3><?php echo $item[0]; ?></h3>
                <div>
                    <div class="left">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </div>
                    <div class="right">
                        <?php echo date('d-m-Y', $item[2]);?>
                    </div>
                    <br>
                </div>
            </div>-->
        <?php }
        ?>

        <!--<div class="item">-->
        <!--<img src="http://placehold.it/640x480" alt="">-->
        <!--<h3>Картинка</h3>-->
        <!--</div>-->
    </div>
    <button type="button" class="btn btn-success btn-lg W185" id="more-pictures">Еще картинок!</button>
</div>
