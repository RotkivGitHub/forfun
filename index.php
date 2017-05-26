<?php require_once 'api/api.php' ?>
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

   <?php include 'admin/contactUs.php';?>

   <?php include 'admin/header.php';?>


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

                      <?php

                      foreach ($categories as $category) {?>
                            <li class="list-group-item checked"
                                value="<?php echo $category["nameEn"];?>"
                                id="<?php echo $category["nameEn"];?>">
                             <span class="badge">
                                 <?php echo $category["load"];?>
                             </span>
                                <?php echo $category["name"];?>
                            </li>
                        <?php }

                      ?>

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

                <?php include 'admin/right-block.php';?>

            </div>

         </div>
        </div>  
    </div>

   <?php include 'admin/footer.php';?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>