<header class="container-fluid" id="header">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <ul class='menu'>
                    <li>О нас</li>
                    <!--                  <button type="button" class="btn btn-success btn">О нас</button>-->

                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="search-col">
                <form class="navbar-form navbar-right" id='search'>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ключевое слово" id="search-field">
                    </div>
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </form>


            </div>
        </div>

        <h1>
            <?php echo $info["site_title"]; ?>
            <br> <span>
                 <?php echo $info["note"]; ?>
                </span></h1>


        <div id="menu--sandwich">
            <form class="navbar-form clearfix">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ключевое слово" id="search-field">
                </div>
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </form>
            <div class="menu--closeButton clearfix" id="menu--closeButton">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </div>

            <br> <br> <br>
            <ul class='menu--sandwich'>
                <a href="#"><li>О нас</li></a>
                <a href="#"><li>Добавить картинку</li></a>
                <a href="#"><li>Связаться с нами</li></a>
            </ul>
        </div>

        <div id="menu--categories--xs">
            <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
        </div>

        <div id="menu--sandwich_button">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </div>
    </div>

</header>

