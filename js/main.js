$(document).ready(function () {

    // getCat();

/* открытие выпадающего меню-гамбургера по клику*/
   $('#menu--sandwich_button').click(function () {
      $("#menu--sandwich").css("display", "block");
   });

/* открытие формы обратной связи по клику*/
    $('#contactUs--open').click(function () {
      $("#contactUs").css("display", "block");
    });

/* закрытие выпадающего меню-гамбургера по клику*/   
   $('#menu--closeButton').click(function () {
      $("#menu--sandwich").css("display", "none");
   });

/* закрытие формы обратной связи по клику*/
    $('#contactUs--closeButton').click(function () {
      $("#contactUs").css("display", "none");
    });

/* события на скролл - прилипчивые боковые панели и появление/скрытие кнопки Вверх*/   
   $(document).on('scroll', function(){
      var top = $(document).scrollTop();   
   
      if (top >= 90) { /* боковые панели*/
         $(".left-block, .right-block").css("margin-top", top + -70 + "px");      
         };
      if (top != 0) { /* для кнопки Вверх*/
         $("#to-top").css("display", "block");   
         // console.log(top);
         } else {
            $("#to-top").css("display", "none"); 
            $(".left-block, .right-block").css("margin-top", "20px")
         };     
   });
   
/* плавный скролл вверх при нажатии кнопки Вверх*/     
   $("#to-top").on("click", function(){
      var winHeight = $(document).height();
      var step = 3;
      var timeToScroll = winHeight/step;   
   
      $("body").animate({
         scrollTop: 0}, timeToScroll, function(){
            $("#to-top").css("display", "none");
      });
   });

/* открытие футера по наведению */
    $('footer').mouseover(function () {
        $("footer").css("bottom", "0");
        $("#footer-arrow").css("transform","scale(0)");
    });

/* скрытие футера при потере фокуса */
    $('footer').mouseleave(function () {
        $("footer").css("bottom", "-50px");
        $("#footer-arrow").css("transform","scale(1)");
    });

/* открытие меню категорий на узких экранах по клику */
    $('#menu--categories--xs').click(function () {
        $("#category--xs").slideDown();
    });

/* скрытие меню категорий на узких экранах */
    $('#category--closeButton').click(function () {
        // $("#category--xs").css("display", "none");
        $("#category--xs").slideUp();

    });

       /*смена категориии*/
    $("#category li").click(function catChanger(){
        console.log($(this));
        $("#category li").removeClass("checked");
        $(this).addClass("checked");
        var cat = $(this)[0].id;
        console.log($(this)[0].id);
        $("#gallery").html('');
        getData("category", cat);
    });



/*первоначальная загрузка*/
    // getData("category", "animal");

/*постройка галереи изображений на странице*/
    function gallery(answer) {
        answer.items.forEach(function(item, i, arr) {
            // console.log(item.title + item.image);
            $("#gallery").append('<div class="item">' +
                '<img src="img/spinner.gif" alt="' +
                item.title + '" id="' +
                item.data + '">' +
                '<h3>' + item.title + '</h3>' +
                '</div>');
        });

        answer.items.forEach(function(item, i, arr) {
            $("#"+item.data).attr("src", "pictures/" + item.image)
        });
    };


/*постройка меню категорий*/
    function catMenu(answer) {
        answer.forEach(function (item, i, arr) {
            console.log(item.nameEn);
            $("#category-list").append('<li class="list-group-item" value="' +
                item.nameEn + '" id="' + item.nameEn + '">' +
                '<span class="badge">' + item.load + '</span>' +
                item.name + '</li>');
        });

    catChanger()

    };


/*получение данных для постройки галереи из .json через php*/
// через ajax-запрос
    function getData(url, category) {
        var data = {
            "filename": "data/" + category + ".json"
        };

        $.ajax({
            url: 'http://guvi.cx.ua/projects/forfun/' + url + '.php',
            method: 'GET',
            data: data,
            success: function (answer) {
                dataFromJson = JSON.parse(answer);
                // console.log(dataFromJson);
                gallery(dataFromJson);

            },
            error: function () {
                console.log("херня какая-то");
            }
        });
    }

 /*получение данных для постройки меню категорий из .json через php*/
// через ajax-запрос
    function getCat() {
        var data = {
            "filename": "data/categories.json"
        };

        $.ajax({
            url: 'http://guvi.cx.ua/projects/forfun/category.php',
            method: 'GET',
            data: data,
            success: function (answer) {
                dataFromJson = JSON.parse(answer);
                console.log(dataFromJson);
                catMenu(dataFromJson);

            },
            error: function () {
                console.log("херня какая-то");
            }
        });
    }
});

