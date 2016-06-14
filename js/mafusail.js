

$(document).ready(function(){

    var flag = false;
    var scroll;

    $(window).scroll(function(){
        scroll = $(window).scrollTop();

        if(scroll > 100){
            if(!flag){
                $("#logo").css({
                    "margin-top": "-20px",
                    "left": "60px",
                    "width": "195px",
                });

                $("header").css({
                    "background-color": "#ffffff",
                    "box-shadow": "0 0 10px rgba(0,0,0,0.5)"
                });


                flag = true;
            }
        }else{
            if(flag){
                $("#logo").css({
                    "margin-top": "0px",
                    "left": "100px",
                    "width": "250px",
                });

                $("header").css({
                    "background-color": "transparent",
                    "box-shadow": "none"
                });

                flag = false;
            }
        }
    });


    // выплывающие меню


    $('#logo1').click(function () {
        $('#menu ul').slideToggle(500);
    });

    /*validate form*/

    $("#loginform").validate({

        rules: {

            name: {
                required: true,
            },

            mail: {
                email: true,
                required: true,
            },

            telephon: {
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
        },

        messages: {

            name: {
                required: "<br> Поле 'Имя' <br>обязательно для заполнения",
            },

            mail: {
                email: "<br>В e-mail адресе должен <br> присудстовать символ '@'! <br> Примере: UNIVERSITY@BIONIC-UNIVERSITY.COM",
                required: "Поле для e-mail обязательно <br> для заполнения",
            },

            telephon: {
                required: "Поле 'Номер телефону' <br>обязательно для заполнения",
                digits: "Это поле содержит только цифры <br> Пример:  0443613450",
                minlength: "Номер телефону должен быть не менее <br> 10 символов",
                maxlength: "Номер телефону должен быть не менее <br> 10 символов",
            },

        }
    });
});



/*Якорь*/

$("#menu").on("click","a", function (event) {
    //отменяем стандартную обработку нажатия по ссылке
    event.preventDefault();

    //забираем идентификатор бока с атрибута href
    var id  = $(this).attr('href'),

    //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;

    //анимируем переход на расстояние - top за 1500 мс
    $('body,html').animate({scrollTop: top}, 1500);
});








// счетчик
timeend= new Date();
// IE и FF по разному отрабатывают getYear()
timeend= new Date(timeend.getYear()>1900?(timeend.getYear()+1):(timeend.getYear()+1901),0,1);
// для задания обратного отсчета до определенной даты укажите дату в формате:
// timeend= new Date(2016, 7-1, 1);
// Для задания даты с точностью до времени укажите дату в формате:
timeend= new Date(2016, 6, 1, 10, 0);
function time() {
    today = new Date();
    today = Math.floor((timeend-today)/1000);
    tsec=today%60; today=Math.floor(today/60); if(tsec<10)tsec='0'+tsec;
    tmin=today%60; today=Math.floor(today/60); if(tmin<10)tmin='0'+tmin;
    thour=today%24; today=Math.floor(today/24);
    timestr=today +"&#160;&#160;&#160;&#160;&#160;&#160;&#160;"+ thour+"&#160;&#160;&#160;&#160;&#160;&#160;&#160;"+tmin+"&#160;&#160;&#160;&#160;&#160;&#160;"+tsec+"";
    document.getElementById('t').innerHTML=timestr;
    window.setTimeout("time()",1000);

}



$('#knopka_blue').click(function () {
    $("#block_front_end").show(500);
    $("#hover_a").show();
});
$('#hover_a').click(function () {
    $("#block_front_end").hide();
    $("#hover_a").hide();
});


$('#knopka_red').click(function () {
    $("#block_qa_ba").show(500);
    $("#hover_a").show();
});
$('#hover_a').click(function () {
    $("#block_qa_ba").hide();
    $("#hover_a").hide();
});









