<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>НАМТ</title>
  </head>
  <body>
    <link
      rel="stylesheet prefetch"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script
      src="https://kit.fontawesome.com/628c8d2499.js"
      crossorigin="anonymous"
    ></script>
<?php include ("includes/header.php");?>   
    <h2>Студенческий спортивный клуб</h2>

<div class="slider">
  <!-- slide -->
  <ul>
    <li class="active"></li>
     <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>

  <!-- controll -->
  <span class="controll active"></span>
  <span class="controll"></span>
</div>
    <div class="container">
      <button class="button--bop">Галерея</button>
    </div>
    <br />
    <h2 style="display: flex; justify-content: center">Полезные материалы</h2>
    <br />
    <div class="cont">
      <div class="container">
        <button class="button--bop">Лицензия </button>
        <button class="button--bop">План работы спортивного студенческого клуба НАМТовец </button>
        <button class="button--bop">Положение о спортивном студенческом клубе НАМТовец</button>

      </div>

  
      </div>
     
      <div class="cont">
        <div class="container">
      <button class="button--bop">Приказ о создании ССК НАМТовец</button>
      <button class="button--bop">Расписание работы ССК НАМТовец</button>
        <button class="button--bop">Календарно-тематический план ССК НАМТовец</button>
    </div>
    </div>
  

   
      </div>
    </div>

<script>
  $(function() {
    "use strict";
    var body = $("body"),
        active = $(".slider ol li, .slider .controll"),
        controll = $(".slider .controll"),
        playpause = $(".playpause"),
        sliderTime = 1,
        sliderWait = 30000,
        i = 999,
        autoRun,
        stop = false;
    // Reset
    $(".slider ul li:first").css("left", 0);
    // Run Slider
    function runSlider(what) {
        what.addClass("active").siblings("li, span").removeClass("active");
    }
    // slider gsap
    function gsapSlider(whose, left) {
        i++;
        if (whose.hasClass("active")) {
            TweenMax.fromTo(
                ".slider ul li.active",
                sliderTime,
                { zIndex: i, left: left },
                { left: 0 }
            );
        }
    }
    // Active
    active.on("click", function() {
        runSlider($(this));
    });
    // Arrow left
    controll.first().on("click", function() {
        var slide = $(".slider ul li.active, .slider ol li.active").is(
            ":first-of-type"
        )
            ? $(".slider ul li:last, .slider ol li:last")
            : $(".slider ul li.active, .slider ol li.active").prev("li");
        runSlider(slide);
        gsapSlider(slide, "100%");
    });
    // Arrow right
    controll.last().on("click", function() {
        var slide = $(".slider ul li.active, .slider ol li.active").is(
            ":last-of-type"
        )
            ? $(".slider ul li:first, .slider ol li:first")
            : $(".slider ul li.active, .slider ol li.active").next("li");
        runSlider(slide);
        gsapSlider(slide, "-100%");
    });
    // Point
    $(".slider ol li").on("click", function() {
        var start = $(".slider ul li.active").index();
        var slide = $(".slider ul li").eq($(this).index());
        runSlider(slide);
        var end = $(".slider ul li.active").index();
        if (start > end) {
            gsapSlider(slide, "100%");
        }
        if (start < end) {
            gsapSlider(slide, "-100%");
        }
    });
    // Auto run slider
    function autoRunSlider() {
        if (body.css("direction") === "ltr" && stop === false) {
            autoRun = setInterval(function() {
                controll.last().click();
            }, sliderWait);
        } else if (body.css("direction") === "rtl" && stop === false) {
            autoRun = setInterval(function() {
                controll.first().click();
            }, sliderWait);
        }
    }
    autoRunSlider();
    // When hover
    active.on("mouseenter", function() {
        if (stop === false) {clearInterval(autoRun);}
    });
    active.on("mouseleave", function() {
        if (stop === false) {autoRunSlider();}
    });
    // play pause click
    playpause.on("click", function() {
        $(this).toggleClass("fa-play-circle-o fa-pause-circle-o");
        if (playpause.hasClass("fa-play-circle-o")) {
            stop = true;
            clearInterval(autoRun);
            $(this).attr('title', 'play');
        }
        if (playpause.hasClass("fa-pause-circle-o")) {
            stop = false;
            autoRunSlider();
            $(this).attr('title', 'pause');
        }
    });
});
  </script>
  </body>
 <style>
  * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  list-style: none;
  font-family: "Gudea", sans-serif;
  font-weight: normal;
}
h2{
  margin-left: 3%
}

h1 {
  text-align: center;
  margin-top: 40px;
  font-size: 60px;
  color: #333;
}
h1 a {
  font-size: 14px;
  color: #aaa;
  background: #fff;
  border-radius: 5px;
  padding: 2px 5px;
  border: 1px solid #dcdcdc;
  text-decoration: none;
}
h1 a:hover {
  color: #0fe0ba;
  text-decoration: underline;
}

@media (max-width: 490px) {
  h1 {
    font-size: 45px;
  }
}
@media (max-width: 350px) {
  h1 {
    font-size: 25px;
  }
}
@media(max-width: 1200px)
{
  h2{
    font-size: 20px;
    padding-top: 15%
  }


  
}
/*
Кнопка начало
*/
@import url("https://fonts.googleapis.com/css?family=Fredoka+One");

.container {
  margin-top: 4%;
  display: flex;
  justify-content: center;
  flex-flow: row wrap;
  max-width: 100vw;
  margin: 2rem 0 0;
}

:focus {
  outline: none;
}

button {
    height: 60px;
  width: 250px;
  font-family: "Fredoka One", cursive;
  border: 4px solid #302f3a;
  color: #302f3a;
  position: relative;
  margin: 2rem 3rem;
  padding: 1rem 2rem;
  font-size: 1.15rem;
  background-color: transparent;
  cursor: pointer;
}

button::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  left: -0.6rem;
  top: -0.5rem;
  z-index: -1;
  background-color: #f7567c;
  transition: all 200ms ease-out;
}

button:hover::before {
  top: 0;
  left: 0;
}

.button--bop:active {
  transform: translateY(3px);
}

.button--flick:active {
  animation: flick 640ms infinite;
}

.button--twist:active {
  animation: twist 800ms infinite;
}

.button--spin:active {
  animation: spin 800ms infinite;
}

@keyframes flick {
  0% {
    transform: translate(0, 0) rotate(0deg) scale(1);
  }
  67% {
    transform: translate(0.4rem, -1.8rem) rotate(160deg) scale(0.4);
  }
  100% {
    transform: translate(0, 0) rotate(0deg) scale(1);
  }
}

@keyframes twist {
  0% {
    transform: rotate(0deg);
  }
  30% {
    transform: rotate(60deg);
  }
  60% {
    transform: rotate(-20deg);
  }
  100% {
    transform: rotate(0deg);
  }
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/*
конец кнопки
*/
/*
Интересные кнопки
*/

div[class*="cont"] {
  text-align: center;

  width: 100%;
 
  display: flex;
  justify-content: center;
  align-items: center;
}
/*
slider
*/


h1 {
  text-align: center;
  margin-top: 40px;
  font-size: 60px;
  color: #333
}
h1 a {
  font-size: 14px;
  color: #aaa;
  background: #fff;
  border-radius: 5px;
  padding: 2px 5px;
  border: 1px solid #dcdcdc;
  text-decoration: none
}
h1 a:hover {
  color: #0fe0ba;
  text-decoration: underline
}
.slider {
  z-index: 1;
  width: 100%;
  max-width: 750px;
  padding: 0 50px;
  margin: 25px auto 0;
  height: 450px;
  position: relative;
  
}
.slider img{
 
}
.slider ul, .slider ul li {
  width: 100%;
  height: 100%
}
.slider ul {
  position: relative;
  overflow: hidden;
  border-radius: 15px
}
.slider ul li {
  position: absolute;
  top: 0;
  left: -100%;
  background-size: cover; /* semon #f98686 */
  background-position: center;
  color: #fff;
  font-family: serif;
}
.slider ul li:first-of-type {
  background-image: url("img/club1.jpg")
}
.slider ul li:nth-of-type(2) {
  background-image: url("img/club2.jpg")
}
.slider ul li:nth-of-type(3) {
  background-image: url("img/club3.jpg")
}
.slider ul li:nth-of-type(4) {
  background-image: url("img/club4.jpg")
}
.slider ul li:nth-of-type(5) {
  background-image: url("https://api.rbsmi.ru/attachments/4259fa5eb6e8061b3bb8b19d4c800b427ec3a1a0/store/crop/0/0/527/319/1600/0/0/8ca45f157a8c5f9710450ce27b5a72d9302b09eb7eb6f4441555e72f1968/6449ac1d3f6c40667f086ac7a9c75766.jpg")
}
.slider ul li:nth-of-type(6) {
  background-image: url("img/club4.5.jpg")
}
.slider ul li:last-of-type {
  background-image: url("img/club5.jpg")
}
.slider .controll {
  width: 40px;
  height: 40px;
  position: absolute;
  top: 44%;
  border-bottom: 3px solid #333;
  border-left: 3px solid #333;
  cursor: pointer;
  color: #333
}
.slider .controll:first-of-type {
  transform: rotate(45deg);
  left: 20px
}
.slider .controll:last-of-type {
  transform: rotate(225deg);
  right: 20px
}
.slider .controll:hover, .slider .controll.active {
  border-color: #f98686 /* rose */
}
.slider ol {
  text-align: center;
  padding-top: 10px
}
.slider ol li {
  display: inline-block;
  margin-right: 5px;
}
.slider ol .fa {
  font-size: 20px;
  color: #333;
  cursor: pointer;
  font-weight: normall
}
.slider ol li:hover .fa:before, .slider ol li.active .fa:before {
  content: "\f111"
}
 .slider ul li.active {
  z-index: 1;
  left: 0
} 
@media(max-width: 490px) {
  h1 {font-size: 45px}
}
@media(max-width: 350px) {
  h1 {font-size: 25px}
}
@media(max-width:900px)
{
  .slider{
    max-width:100%;
    max-height:300px;
  }
}
  </style>
</html>
