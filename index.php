<?php
    require_once ('functions.php');
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['spec'])) {
        user2db ($_POST);
        sndMail ($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bionic Summer Camp 2016</title>

    <!-- WOW -->
    <link rel="stylesheet" href="css/libs/animate.css">
    <link rel="stylesheet" href="css/site.css">
    <!-- WOW -->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">


</head>

<!--Для счетчика-->
<body onload="time()">

<header>
    <nav id="menu" >
        <a href='#box1'><img id='logo' src='img/logo_bionic_400x163px.png'></a>
        <img id='logo1' src='img/menu.png'>
        <img id='logo2' src='img/logo_bionic_400x163px.png'>


        <ul class="menu_a">
            <a href='#box2'><li>Про програму</li></a>
            <a href='#box3'><li>Тренери</li></a>
            <a href='#box4'><li>Навчальна програма</li></a>
            <a href='#box5'><li>Стати учасником</li></a>
        </ul>

        <!--счетчик-->
        <img id="schetchic" src="img/this.png" alt="time">
        <span id="t" ></span>
    </nav>
</header>


<div id="box1" class="block_1_a">
    <img id="big_bg" src="img/bg1.jpg" alt="bg summer">
    <img id="small_bg" src="img/fon_1.jpg" alt="bg small">
</div>


<div class="block_2_v" id="box2">
    <div class="white_line">
        <h1>Приготуйся кодити по-дорослому!</h1>
    </div>

    <div class="txt">
        <p><b>BIONIC Summer Camp</b> - ставай крутим IT-скаутом разом з нами! <br>
        Всього за 6 тижнів ми навчимо тебе, як <span id="zachernut">розводити вогонь і полювати на ведмедів</span> <br> стати прокачаним <b>Front-end</b> розробником або <b>QA/Business Analyst!</b>
        </p>
    </div>


    <div class="icon">
        <div class="pic">
            <div class="center">
                <img src="css/img/pic1.png" alt="image">
            </div>
            <p class="center2">Ми створюватимемо <br> класні сайти</p>
        </div>

        <div class="pic">
            <div class="center">
                <img src="css/img/pic2.png" alt="image">
            </div>
            <p class="center2">Працюватимемо<br> в команді </p>
        </div>

        <div class="pic">
            <div class="center">
                <img src="css/img/pic3.png" alt="image">
            </div>
            <p class="center2">Будемо вчитися <br> переговорам, презентації <br>
                та іншим Soft Skills</p>
        </div>

        <div class="pic">
            <div class="center">
                <img src="css/img/pic4.png" alt="image">
            </div>
            <p class="center2">Весело та корисно <br> проведемо літо</p>
        </div>
    </div>
</div>



<div id="box3" class="block_3_m">
    <div class="white_line">
        <h1 class="mentors">
            Лідери скаутського руху
        </h1>
    </div>
    <div class="slide-contain">
        <div class="multiple-items">
            <div class="team_lide">
                <div class="left_train"><img src="img/Lushchenko.png" alt=""></div>
                <div class="right_train">
                    <h2>Олександр Лущенко</h2>
                    <h3>Front-end розробник, Freelance</h3>
                    <div class="opisanie">
                        <span>Володіє повним циклом розробки Front-end. Поєднує успішний досвід створення проектів <nobr>e-commerce</nobr>, роздрібної торгівлі, і авторський підхід до навчання.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Monsar.png" alt=""></div>
                <div class="right_train">
                    <h2>Любов Монсар</h2>
                    <h3>Business Analyst в Infopulse</h3>
                    <div class="opisanie">
                        <span>Досвідчений QA інженер, бізнес аналітик. 6 років тренерського досвіду, створення авторських програм з підготовки QA інженерів до отримання міжнародного сертифікату ISTQB.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Ostapov.png" alt=""></div>
                <div class="right_train">
                    <h2>Олексій Остапов</h2>
                    <h3>Senior QA manager в Infopulse</h3>
                    <div class="opisanie">
                        <span>Понад 7 років досвіду в ІТ, зокрема у сфері тестування систем безпеки. Як тест-інженер брав участь у розробці систем і продуктів для одного з найбільших світових концернів.</span>
                   </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Pocheketa.png" alt=""></div>
                <div class="right_train">
                    <h2>Дмитро Почекета</h2>
                    <h3>Frontend Developer в Cogniance</h3>
                    <div class="opisanie">
                        <span>Успішний розробник і талановитий викладач. Брав участь в розробці проектів для комерційних і державних організацій України та інших країн. Фіналіст конкурсу UA Web Challenge.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Udod.png" alt=""></div>
                <div class="right_train">
                    <h2>Євгеній Удод</h2>
                    <h3>Art director, UI/UX designer</h3>
                    <div class="opisanie">
                        <span>Близько 10 років досвіду в дизайні, проектуванні та верстці. Реалізовував успішні проекти у сфері електронної комерції, фінансовому секторі, медіа. Серед замовників - великі рітейлери, компанії з Європи та США.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Churilov.png" alt=""></div>
                <div class="right_train">
                    <h2>Михайло Чурiлов</h2>
                    <h3>Senior JS dev в Svitla Systems</h3>
                    <div class="opisanie">
                        <span>Експерт у технологіях JavaScript, SPA, AngularJS. Створює комплексні проекти для клієнтів із США, країн Європи та СНД. Його рішеннями користуються компанії із галузі медицини, електронної комерції, HORECA та інших.</span>
                    </div>
                </div>
            </div>



            <!--Вторая часть тренероув-->

            <div class="team_lide">
                <div class="left_train"><img src="img/Lushchenko.png" alt=""></div>
                <div class="right_train">
                    <h2>Олександр Лущенко</h2>
                    <h3>Front-end розробник, Freelance</h3>
                    <div class="opisanie">
                        <span>Володіє повним циклом розробки Front-end. Поєднує успішний досвід створення проектів e-commerce, роздрібної торгівлі, і авторський підхід до навчання.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Monsar.png" alt=""></div>
                <div class="right_train">
                    <h2>Любов Монсар</h2>
                    <h3>Business Analyst в Infopulse</h3>
                    <div class="opisanie">
                        <span>Досвідчений QA інженер, бізнес аналітик. 6 років тренерського досвіду, створення авторських програм з підготовки QA інженерів до отримання міжнародного сертифікату ISTQB.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Ostapov.png" alt=""></div>
                <div class="right_train">
                    <h2>Олексій Остапов</h2>
                    <h3>Senior QA manager в Infopulse</h3>
                    <div class="opisanie">
                        <span>Понад 7 років досвіду в ІТ, зокрема у сфері тестування систем безпеки. Як тест-інженер брав участь у розробці систем і продуктів для одного з найбільших світових концернів.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Pocheketa.png" alt=""></div>
                <div class="right_train">
                    <h2>Дмитро Почекета</h2>
                    <h3>Frontend Developer в Cogniance</h3>
                    <div class="opisanie">
                        <span>Успішний розробник і талановитий викладач. Брав участь в розробці проектів для комерційних і державних організацій України та інших країн. Фіналіст конкурсу UA Web Challenge.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Udod.png" alt=""></div>
                <div class="right_train">
                    <h2>Євгеній Удод</h2>
                    <h3>Art director, UI/UX designer</h3>
                    <div class="opisanie">
                        <span>Близько 10 років досвіду в дизайні, проектуванні та верстці. Реалізовував успішні проекти у сфері електронної комерції, фінансовому секторі, медіа. Серед замовників - великі рітейлери, компанії з Європи та США.</span>
                    </div>
                </div>
            </div>
            <div class="team_lide">
                <div class="left_train"><img src="img/Churilov.png" alt=""></div>
                <div class="right_train">
                    <h2>Михайло Чурiлов</h2>
                    <h3>Senior JS dev в Svitla Systems</h3>
                    <div class="opisanie">
                        <span>Експерт у технологіях JavaScript, SPA, AngularJS. Створює комплексні проекти для клієнтів із США, країн Європи та СНД. Його рішеннями користуються компанії із галузі медицини, електронної комерції, HORECA та інших.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="block_4_v" id="box4">
    <div class="white_line">
        <h1 >Програма підготовки IT-скаутів</h1>
    </div>
        <div  class="front">
            <div class="block_img wow bounceInRight pioneru" data-wow-delay="0.5s"  data-wow-offset="300">
                <img src="img/front_end.png" alt="pic">
            </div>
            <div class="block_img_knopka wow bounceInRight text_pioneru" data-wow-delay="1s"  data-wow-offset="300">
                <img src="img/content_front1.png" alt="pic">
                <button id="knopka_blue">ДЕТАЛІ ПРОГРАММИ</button>
            </div>
            <div class="block_img wow bounceInRight text_pioneru" data-wow-delay="1.5s"  data-wow-offset="300">
                <img src="img/content_front2.png" alt="pic">
            </div>
        </div>

        <div  class="front">
            <div class="block_img wow bounceInLeft text_pioneru" data-wow-delay="1.5s"  data-wow-offset="300">
                <img src="img/qa2.png" alt="pic">
                <button id="knopka_red">ДЕТАЛІ ПРОГРАММИ</button>
            </div>
            <div class="block_img_knopka wow bounceInLeft text_pioneru" data-wow-delay="1s"  data-wow-offset="300">
                <img src="img/qa1.png" alt="pic">
            </div>
            <div class="block_img wow bounceInLeft pioneru" data-wow-delay="0.5s"  data-wow-offset="300">
                <img src="img/qa.png" alt="pic">
            </div>
        </div>
</div>



<!--Всплывающие окно-->
<div id="hover_a"></div>

<!--Информация про Front-end-->

<div id="block_front_end">
    <div class="text_a">
        <h2>Програма підготовки</h2>
        <h3>45 годин вивчення технологій з тренерами напрямку</h3>
        <h3>50+ годин практичної командної розробки проекту</h3>
        <div class="spisok_modul">
            <p>Професійні інструменти розробника: Scrum, Jira, Git</p>
            <p>Верстка (блокова, модульна, таблична)</p>
            <p>Позиціонування, Форми та їх елементи</p>
            <p>Робота з зображеннями та фотошоп</p>
            <p>Адаптивна верстка</p>
            <p>Флексбокс</p>
            <p>Робота з фреймворками на прикладі Bootstrap/Materialize</p>
            <p>Workflow frontend-проекту</p>
            <p>Основи JavaScript</p>
            <p>Синтаксис та типи даних</p>
            <p>Вирази та інструкції</p>
            <p>Функції, Масиви та об’єкти</p>
            <p>Browser Object Model (BOM)</p>
            <p>Document Object Model (DOM)</p>
            <p>Основи роботи з JSON-сервером</p>
        </div>
    </div>
</div>



<!--Информация про QA/BA-->

<div id="block_qa_ba">
    <div class="text_a">
        <h2>Програма підготовки</h2>
        <h3>45 годин вивчення технологій з тренерами напрямку</h3>
        <h3>50+ годин практичної командної розробки проекту</h3>
        <div class="spisok_modul">
            <p>Професійні інструменти розробника: Scrum, Jira.</p>
            <p>Методики попередньої оцінки та аналізу проекту</p>
            <p>Основи роботи з клієнтом та збір інформації</p>
            <p>Збір та формування requirements</p>
            <p>Типи requirements</p>
            <p>Написання use cases, user stories</p>
            <p>Waterfall vs Scrum, відслідковування прогресу</p>
            <p>Робота над проектом, оцінка та планування</p>
            <p>Введення у тестування, поняття якості та його атрибути</p>
            <p>Планування тестування (тест-план, тест-стратегія)</p>
            <p>Практикум ручного тестування ПЗ, написання test cases</p>
            <p>Документування знайдених дефектів, bug reports</p>
            <p>Основи UX паттернів</p>
         </div>
    </div>
</div>




<div id="box5" class="block_5_a">
    <div class="white_line" id="headerForm">
        <h1 >Вступай в загін!</h1>
    </div>
    <div id="formbackgr">
        <div class="formkonv">
            <div class="formkonv_text">
                <h4>Залишити заявку</h4>
                <form class="form_contact" id="loginform" action="" method="post">
                    <div class="form_contact_dannie">
                        <p><label>Мене звати: <input type="text" name="name"></label></p>
                        <p><label>Номер телефону: <input type="tel" name="phone"></label></p>
                        <p><label>Мій e-mail: <input type="email" name="email"></label></p>
                    </div>

                    <div class="ho4u">
                        <legend>Я хочу стати:</legend>
                        <label><input type="radio" name="spec" value="dev" checked> <b>Front-end скаутом</b></label><br>
                        <label><input type="radio" name="spec" value="qba"> <b>QA / BA скаутом</b></label><br>
                        <label><input type="radio" name="spec" value="dnk"> <b>Ще не визначився</b></label>
                        <p class="form_bottom" >
                            <button id="knopka_otpravka" type="button" name="enter" onclick="sendRequest();">Надіслати</button>
                        </p>
                    </div>

                </form>
            </div>
        </div>
        <div class="contacts">
            <h2>Залишились питання?</h2>
            <p>Телефонуй: +38(044) 361 3506</p>
            <p>або пиши: bionic.university.applications@gmail.com</p>
            <h2>Приєднуйся до нас:</h2>
            <a href="https://www.facebook.com/BionicUniversity"><img class="soth_sets" src="css/img/fb.png" alt="facebook">Facebook</a>
            <a href="http://vk.com/bionicuniversity"><img class="soth_sets" src="css/img/vk.png" alt="vk">ВКонтакте</a>
            <a href="https://www.youtube.com/watch?v=U2avRJBB23Y"><img class="soth_sets" src="css/img/youtube.png" alt="youtube">Youtube</a>
            <p></p>
            <div class="developers">
                <p>Розробники:</p>
                <a href="http://diz.promo.net.ua/ls/" target="_blank"><img src="css/img/logo_long.png" alt="LikeStudio"></a>
            </div>
        </div>
        </br>
    <div class="clearfix"></div>
    </div>
    <!--formWrap end!-->
</div>















<!-- WINDOW -->
<script src="js/jquery.paulund_modal_box.js"></script>

<script>

$(document).ready(function(){
    $('.paulund_modal').paulund_modal_box();
    $('.paulund_modal_2').paulund_modal_box({
        title:'Професійні інструменти розробника:',
        description:'<br/><br/>Scrum, Jira. Методики попередньої оцінки та аналізу проекту. Основи роботи з клієнтом та збір інформації. Збір та формування requirements. Типи requirements. Написання use cases, user stories. Waterfall vs Scrum, відслідковування прогресу. Робота над проектом, оцінка та планування. Введення у тестування, поняття якості та його атрибути. Планування тестування (тест-план, тест-стратегія). Практикум ручного тестування ПЗ, написання test cases. Документування знайдених дефектів, bug reports. Основи UX паттернів'
    });
    $('.paulund_modal_3').paulund_modal_box({
        title: 'Change Title with height',
        height: '500'
    });
    $('.paulund_modal_4').paulund_modal_box({
        title: 'Change Title with Width',
        width: '800'
    });
    $('.paulund_modal_5').paulund_modal_box({
        title:'Second Title Box',
        description:'Custom description for box <br/><br/>Quisque sodales odio nec dolor porta sed laoreet mauris pretium. Aenean id mauris ligula, semper pulvinar dolor. Suspendisse rutrum, libero eu condimentum porta, mauris mauris semper augue, ut tempor nunc arcu vel ligula. Quisque orci eros, consequat vel iaculis eget, blandit bibendum est. Morbi ac tellus dui. Nullam eget eros et lectus dignissim placerat. Nulla facilisi. Ut congue posuere vulputate.',
        height: '500',
        width: '800'
    });
});
</script>

<script type="text/javascript">
    
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-8196211-5']);
_gaq.push(['_trackPageview']);
        
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
        
</script>

<!-- WINDOW -->


<!-- WOW -->
<script src="dist/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  <!-- WOW -->


<script type="text/javascript" src="js/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            autoplay: true
        });
    });
</script>
<script>
    if (screen.width <= 600) {
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            autoplay: true
        });
    }
</script>
<script src="js/mafusail.js"></script>
<script src="js/max.js"></script>
<script src="js/riss.js"></script>

<!-- <script src="ajax.js"></script> -->
<script>
function sendRequest() {
    alert ('Вашу заявку прийнято\n\nЧекайте на повідомлення від нас ;)');
    document.getElementById('loginform').submit();
}
</script>

<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>


</body>
</html>
