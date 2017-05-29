<div class="col-lg-3 col-md-3 col-sm-3">
    <div class="left-block">
        <div class="category" id="category">
            <h2>Категории</h2>
            <ul class="list-group" id="category-list">
                <li class="list-group-item checked" value="all" id="all">
                    <span class="badge">123</span> Все
                </li>

                <?php

                foreach ($categories as $category) { ?>
                    <li class="list-group-item"
                        value="<?php echo $category["nameEn"]; ?>"
                        id="<?php echo $category["nameEn"]; ?>">
                             <span class="badge">
                                 <?php echo $category["load"]; ?>
                             </span>
                        <?php echo $category["name"]; ?>
                    </li>
                <?php }

                ?>

<!--                <li class="list-group-item" value="animal" id="animal">-->
<!--                    <span class="badge">14</span> Животные-->
<!--                </li>-->
<!--                <li class="list-group-item" value="auto" id="auto">-->
<!--                    <span class="badge">14</span> Авто-->
<!--                </li>-->
<!--                <li class="list-group-item" value="gagets" id="gagets">-->
<!--                    <span class="badge">14</span> Гаджеты-->
<!--                </li>-->
<!--                <li class="list-group-item" value="nature" id="nature">-->
<!--                    <span class="badge">14</span> Природа-->
<!--                </li>-->
            </ul>

        </div>
        <div class="ads">
            <img src="ads/ads.png" alt="">
            реклама
        </div>
    </div>
</div>

<div class="category" id="category--xs">
    <h2>Категории</h2>
    <div class="menu--closeButton" id="category--closeButton">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </div>
    <ul class="list-group" id="category-list">
        <li class="list-group-item checked" value="all" id="all">
            <span class="badge">123</span> Все
        </li>

        <?php

        foreach ($categories as $category) { ?>
            <li class="list-group-item"
                value="<?php echo $category["nameEn"]; ?>"
                id="<?php echo $category["nameEn"]; ?>">
                             <span class="badge">
                                 <?php echo $category["load"]; ?>
                             </span>
                <?php echo $category["name"]; ?>
            </li>
        <?php }

        ?>

</div>