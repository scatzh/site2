<!DOCTYPE html>
<html>
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
<body>
<div class="nachalo">
 <div class="container1">
      <div class="info-block" id="infoBlock">
        <h1>
          Государственное бюджетное профессиональное образовательное учреждение
        </h1>
        <h2>«Нижегородский автомеханический техникум» (ГБПОУ НАМТ)</h2>
        <p class="toggle-content">
          Проводит обучение по программам профессиональной переподготовки в
          соответствии с лицензией на осуществление образовательной деятельности
          Серии 52 Л01 № 0002391 регистрационный № 543 от 14 июля 2015 года,
          выданной Министерством образования Нижегородской области бессрочно.
        </p>
        <p class="toggle-content">
          Образовательное учреждение также имеет свидетельство о государственной
          аккредитации Серии 52А01 № 0002632 регистрационный № 2974 от 04
          февраля 2019 года, выданное Министерством образования Нижегородской
          области.
        </p>
        <p class="toggle-content">
          Деятельность учреждения осуществляется в соответствии с Федеральным
          законом РФ от 29.12.2012 года № 273-ФЗ «Об образовании в Российской
          Федерации» (в действующей редакции), приказами Министерства
          образования и науки РФ от 01.07.2013 № 499 «Об утверждении Порядка
          организации и осуществления образовательной деятельности по
          дополнительным профессиональным программам», Уставом ГБПОУ НАМТ, а
          также локальными нормативными актами.
        </p>
      </div>
    </div>
</div>
   <div class="cont">
        <div class="container">
          <button class="button--bop">заявление </button>
          <button class="button--bop">
            согласие на обработку персональных данных
          </button>
        </div>
      </div>
      <div class="container1">
      <div class="info-block" id="infoBlock1">
        <h1>
          Предоставить
        </h1>
      
        <p class="toggle-content1">
          копию паспорта
        </p>
        <p class="toggle-content1">
          копию диплома о среднем профессиональном и (или) высшем образовании.
        </p>
        <p class="toggle-content1">
          справку об обучении для лиц, получающих среднее профессиональное и (или) высшее образование ( при необходимости);
        </p>
        <p class="toggle-content1">
          копию документа, подтверждающего изменение персональных данных личности в случае их расхождения с документом об образовании (свидетельство о заключении брака, свидетельство об изменении имени и т.д.).
        </p>
      </div>
    </div>

 <div class="container1">
      <div class="info-block" id="infoBlock">
        <h1>
      При обучении по договорам об образовании – заключить договор об образовании не позднее, чем за 2 рабочих дня до начала занятий
        </h1>

      
      </div>
    </div>
</div>
   <div class="cont">
        <div class="container">
          <button class="button--bop">Договор для юр.лиц </button>
          <button class="button--bop">
            Договор для физ.лиц
          </button>
        </div>
      </div>
      <h3>Внимание! Принимаются лица от 18 лет.</h3>
          <div class="container">
       <button class="button--bop">Подготовительные курсы к ОГЭ </button>
       </div>

       <script>
        // Добавим изменение видимости текста при клике на блок
var infoBlock = document.getElementById("infoBlock");
var toggleContent = document.querySelectorAll(".toggle-content");

infoBlock.addEventListener("click", function () {
  
  for (var i = 0; i < toggleContent.length; i++) {
    toggleContent[i].classList.toggle("active");
  }
});
var infoBlock1 = document.getElementById("infoBlock1");
var toggleContent1 = document.querySelectorAll(".toggle-content1");

infoBlock1.addEventListener("click", function () {
 
  for (var i = 0; i < toggleContent1.length; i++) {
    toggleContent1[i].classList.toggle("active");
  }
});
</script>
       <style>
p{
  font-size:20px;
  color:black;
}
.container1 {
  max-width: 800px;
  margin: 50px auto;
  padding: 0 20px;
}

.info-block {
  background-color: transparent;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s;
  cursor: pointer;
}

.info-block:hover {
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

.info-block.active {
  background-color: #eef;
}

h1 {
   color:black;
  font-size: 28px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 10px;
}

h2 {
   color:black;
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 20px;
}

.toggle-content {
  display: none; /* Скрыт по умолчанию */
}

.toggle-content.active {
  display: block; /* Отображается при активном состоянии */
}
.toggle-content1 {
  display: none; /* Скрыт по умолчанию */
}

.toggle-content1.active {
  display: block; /* Отображается при активном состоянии */
}
  /*
  Блок намт
  */
  h3{
    color:black;
  }
  ol{
    color:black;
  }
  .container {
  margin-top: 4%;
  display: flex;
  justify-content: center;
  flex-flow: row wrap;
  max-width: 100vw;
  margin: 2rem 0 0;
  width: 100vw;
}

:focus {
  outline: none;
}

.button--bop {
  font-family: "Fredoka One", cursive;
  border: 4px solid #302f3a;
  color: #302f3a;
  position: relative;
  height: 100px;
  width: 300px;
  margin: 2rem 3rem;
  padding: 1rem 2rem;
  font-size: 1.6rem;
  background-color: transparent;
  cursor: pointer;
}

.button--bop::before {
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

.button--bop:hover::before {
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
@media(max-width: 1200px)
{
  .container1{
   
    padding-top: 15%
  }


  
}
       </style>
</body>


</html>