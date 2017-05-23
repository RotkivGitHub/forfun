<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/logs.log');
    ?>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>ForFunsadf</title>

   <!-- Bootstrap -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
   
   <div class="to-top animated" id="to-top">
      <i class="fa fa-arrow-circle-up fa-4x" aria-hidden="true"></i>
      <br>
      Вверх
   </div>

   <div class="contactUs" id="contactUs">
       <form class="form-horizontal contactUs--form">
           <div class="contactUs--closeButton" id="contactUs--closeButton">
               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
           </div>
           <br>
           <div class="form-group">
               <label for="inputName" class="col-sm-2 control-label">Ваше имя</label>
               <div class="col-sm-10">
                   <input type="text" class="form-control" id="inputName" placeholder="Как вас называть?">
               </div>
           </div>
           <div class="form-group">
               <label for="inputEmail" class="col-sm-2 control-label">Email</label>
               <div class="col-sm-10">
                   <input type="email" class="form-control" id="inputEmail" placeholder="Не обязательно. Если хотите, чтобы мы ответили">
               </div>
           </div>
           <textarea class="form-control" rows="3"></textarea>
           <br>
           <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-default">Написать нам!</button>
               </div>
           </div>
       </form>

   </div>

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

         <h1>ForFun<br> <span>территория веселых картинок</span></h1>


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

            <br>  <br>    <br>
         <ul class='menu--sandwich' >

            <li>Главная</li>
            <li>Добавить картинку</li>
            <li>О проекте</li>
            <li>Связаться с нами</li>
         </ul>
         </div>

         <div id="menu--sandwich_button">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
         </div>
      </div>

   </header>

    
    <div>
        <div class="container wrapper">
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
               <div class="left-block">  
               <div class="category" id="category">
                  <h2>Категории</h2>                
                  <ul class="list-group" id="category-list">
                     <li class="list-group-item checked" value="all" id="all">
                        <span class="badge">123</span> Все
                     </li>
<!--                     <li class="list-group-item" value="animal" id="animal">-->
<!--                        <span class="badge">14</span> Животные-->
<!--                     </li>-->
<!--                     <li class="list-group-item" value="auto" id="auto">-->
<!--                        <span class="badge">14</span> Авто-->
<!--                     </li>-->
<!--                     <li class="list-group-item" value="gagets" id="gagets">-->
<!--                        <span class="badge">14</span> Гаджеты-->
<!--                     </li>-->
<!--                     <li class="list-group-item" value="nature" id="nature">-->
<!--                        <span class="badge">14</span> Природа-->
<!--                     </li>-->
                  </ul>
                  
               </div>
               <div class="ads">
                  <img src="ads/ads.png" alt="">
                  реклама
               </div>
               <div class="ads" id="test">
<!--                --><?php
//                   include 'test.php';
//                ?>
               </div>
            </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                <div id="gallery">
                    <!--<div class="item">-->
                    <!--<img src="http://placehold.it/640x480" alt="">-->
                    <!--<h3>Картинка</h3>-->
                    <!--</div>-->
                </div>
               <button type="button" class="btn btn-success btn-lg W185" id="more-pictures">Еще картинок!</button>

            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3">
               <div class="right-block">
                  <button type="button" class="btn btn-success btn-lg W185">+ Добавить фото</button>
                  <button type="button" class="btn btn-success btn-lg W185" id="contactUs--open">
                     <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                     Написать нам
                  </button>
                  <div class="ads">
                     <img src="ads/ads.png" alt=""> реклама
                  </div>
               </div>
            </div>
         </div>
        </div>  
    </div>
    
    
    <footer class="container-fluif">
      <i class="fa fa-facebook" aria-hidden="true"></i>
      |
      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
      | 
      <i class="fa fa-twitter" aria-hidden="true"></i>
      |
      <i class="fa fa-linkedin" aria-hidden="true"></i>
      |
      Created by GuVI &copy;  | 2017      
    </footer>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>