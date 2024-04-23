<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>ItcSlider - Example 05</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="itc-slider.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script
      src="https://kit.fontawesome.com/8abed6b128.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="05.css" />
    <link
      href="/examples/libs/ui-components/itc-slider/itc-slider.css"
      rel="stylesheet"
    />
    <script
      src="/examples/libs/ui-components/itc-slider/itc-slider.js"
      defer
    ></script>
     <script defer src="gosuslug.js"></script>
    <script defer src="itc-slider.js"></script>
     
    <script defer src="im.js"></script>
     <script defer src="imsmall.js"></script>
     
  </head>

  <body>
    <svg style="display: none" xmlns="http://www.w3.org/2000/svg">
      <symbol id="eye" viewBox="0 0 16 16">
        <path
          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"
        />
        <path
          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"
        />
      </symbol>
    </svg>
   <nav class="navbar">
      <div class="content">
         
       <div class="logo" id="logos"><a href="index.html"><img src="img//logo.png" alt="Кнопка" /></a></div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <div class="dropdown">
            <li>
              <a href="#" class="dropbtn"
                >Сведения об образовательной организации</a>
              <div class="dropdown-content1" >
                
                <a href="inform.html">Основные сведения</a>
                <a href="struktur.html"
                  >Структура и органы управления образовательной организацией</a
                >
                <a href="dokument.html">Документы</a> <a href="obroz.html">Образование</a>
                
                
                <a href="obrozst.html">Образовательные стандарты и требования</a>
                <a href="rukovodstv.html"
                  >Руководство. Педагогический (научно-пегагогический) состав</a
                >
                <a href="mat-tex.html"
                  >Материально-техническое обеспечение и оснащенность
                  образовательного процесса</a
                >
                <a href="stipend.html">Стипендии и меры поддержки обучающихся</a>
                <a href="platnuslug.html">Платные образовательные услуги</a>
                <a href="finxos.html">Финансово - хозяйственная деятельность</a>
                <a href="vakant.html"
                  >Вакантные места для приема (перевода) обучающихся</a
                >
                <a href="sreda.html">Доступная среда</a
                ><a href="#">Международное сотрудничество</a>
               
              </div>
            </li>
          </div>

          <div class="dropdown">
            <li>
              <a href="#" class="dropbtn"> Поступающим</a>
              <div class="dropdown-content">
                <a href="perechen.html">Перечень программ</a>
                <a href="profper.html">Перечень программ ФП "Профессионалитет"</a>
                <a href="priemncom.html">Приемная комиссия НАМТ</a>
              </div>
            </li>
          </div>
          <li><a href="student.html">Студентам и педагогам</a></li>
          <div class="dropdown">
            <li>
              <a href="includes/header.php" class="dropbtn">Мероприятия</a>
              <div class="dropdown-content">
                <a href="studclub.html">Воспитательная работа</a>
                <a href="dopobroz.html">Дополнительное образование</a>
                <a href="studclub.php">Студенческий спортивный клуб</a>
                <a href="konkurs.php">Конкурсы профессионального мастерства</a>
              </div>
            </li>
          </div>

                 <div class="dropdown">  
              <li>
                  
              <a href="#" class="dropbtn">Пресс-служба</a>
              <div class="dropdown-content">
                <a href="#">Контакты</a>
                <a href="#">Форма обращения</a>
                <a href="#">Вопросы и ответы</a>
                </div>
                  </li>
                </div>

          
        </ul>
       <button id='next' class="themes"  ><img class="img4 " src="" alt=""></button>   
    

        <div class="icon menu-btn">
          <i class="fas fa-bars" style="color:#282828 ;"></i>
        </div>
       
      </div>
         
    </nav>
    
    
    <div class="banner">  <img class="img" src="" alt=""></div>
    <div class="banner1">  <img class="img2" src="" alt=""></div>
    <div class="banners">  <img class="img3" src="" alt=""></div>
    <!--Начало кода для баннера гос услуг--->
   <script src='https://pos.gosuslugi.ru/bin/script.min.js'></script>
    <div id="js-show-iframe-wrapper">
  <div class="pos-banner-fluid bf-2">
    <div class="bf-2__decor">
      <div class="bf-2__logo-wrap">
        <img
          class="bf-2__logo"
          src="https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo.svg"
          alt="Госуслуги"
        />
        <div class="bf-2__slogan">Решаем вместе</div>
      </div>
    </div>
    <div class="bf-2__content">
      <div class="bf-2__description">
        <span class="bf-2__text">
          Есть предложения по организации учебного процесса или знаете, как
          сделать школу лучше?
        </span>
        <span class="bf-2__text bf-2__text_small"> </span>
      </div>

      <div class="bf-2__btn-wrap">
        <button class="pos-banner-btn_2" type="button">
          Сообщить о проблеме
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  Widget("https://pos.gosuslugi.ru/form", 224510);
</script>

    <!--Конец кода для баннера гос услуг-->
    <div class="about"></div>
    <div class="img-namt"></div>
    <div class="container">
      <div
        class="itc-slider"
        data-autoplay="false"
        data-interval="5000"
        data-loop="true"
        data-refresh="true"
        data-slider="itc-slider"
      >
        <div class="itc-slider-wrapper">
          <div class="itc-slider-items">
            <div class="itc-slider-item">
              <!-- Начало 1 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto">
                    <img
                      alt="..."
                      class="card-img"
                      height="250"
                      loading="lazy"
                      src="img//2news.jpg"
                      width="350"
                    />
                  </div>
                </header>
                <h2 class="card-title">
                  Финал Чемпионата по профессиональному мастерству
                  «Профессионалы»
                </h2>
                <footer class="card-footer">
                  <svg class="card-icon">
                    <use xlink:href="#eye"></use>
                  </svg>
                  <span class="card-views">1250</span>
                </footer>
              </div>
            </div>
            <!-- Конец 1 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 2 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto">
                    <img
                      alt="..."
                      class="card-img"
                      height="250"
                      loading="lazy"
                      src="img//3news.jpg  "
                      width="350"
                    />
                  </div>
                </header>
                <h2 class="card-title">Профессиональные пробы</h2>
                <footer class="card-footer">
                  <svg class="card-icon">
                    <use xlink:href="#eye"></use>
                  </svg>
                  <span class="card-views">757</span>
                </footer>
              </div>
            </div>
            <!-- Конец 2 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 3 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto">
                    <img
                      alt="..."
                      class="card-img"
                      height="250"
                      loading="lazy"
                      src="img//1news.jpg"
                      width="350"
                    />
                  </div>
                  <span class="card-section">Совет эксперта</span>
                </header>
                <h2 class="card-title">
                  Олимпиады профессионального мастерства
                </h2>
                <footer class="card-footer">
                  <svg class="card-icon">
                    <use xlink:href="#eye"></use>
                  </svg>
                  <span class="card-views">320</span>
                </footer>
              </div>
            </div>
            <!-- Конец 3 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 4 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto">
                    <img
                      alt="..."
                      class="card-img"
                      height="250"
                      loading="lazy"
                      src="img//4news.jpg"
                      width="350"
                    />
                  </div>
                </header>
                <h2 class="card-title">
                  Межрегиональная олимпиада по бережливому производству
                </h2>
                <footer class="card-footer">
                  <svg class="card-icon">
                    <use xlink:href="#eye"></use>
                  </svg>
                  <span class="card-views">1855</span>
                </footer>
              </div>
            </div>
            <!-- Конец 4 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 5 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto">
                    <img
                      alt="..."
                      class="card-img"
                      height="250"
                      loading="lazy"
                      src="img//5news.jpg"
                      width="350"
                    />
                  </div>
                </header>
                <h2 class="card-title">Вкусный лимонад в жаркий день</h2>
                <footer class="card-footer">
                  <svg class="card-icon">
                    <use xlink:href="#eye"></use>
                  </svg>
                  <span class="card-views">2799</span>
                </footer>
              </div>
            </div>
            <!-- Конец 5 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 6 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto">
                    <img
                      alt="..."
                      class="card-img"
                      height="250"
                      loading="lazy"
                      src="img//6news.jpg"
                      width="350"
                    />
                  </div>
                </header>
                <h2 class="card-title">10 заповедей счастливой женщины</h2>
                <footer class="card-footer">
                  <svg class="card-icon">
                    <use xlink:href="#eye"></use>
                  </svg>
                  <span class="card-views">1855</span>
                </footer>
              </div>
            </div>
            <!-- Конец 6 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 7 слайда -->
              <div class="card">
                <header class="card-header">
                  <img
                    alt="..."
                    class="card-img"
                    height="250"
                    loading="lazy"
                    src="img//7news.jpg"
                    width="350"
                  />
                </header>
                <h2 class="card-title">Чемпионат высоких технологий</h2>
                <footer class="card-footer">
                  <svg class="card-icon">
                    <use xlink:href="#eye"></use>
                  </svg>
                  <span class="card-views">2107</span>
                </footer>
              </div>
            </div>
            <!-- Конец 7 слайда -->
          </div>
        </div>
        <button class="itc-slider-btn itc-slider-btn-prev"></button>
        <button class="itc-slider-btn itc-slider-btn-next"></button>
        <ol class="itc-slider-indicators">
          <li class="itc-slider-indicator" data-slide-to="0"></li>
          <li class="itc-slider-indicator" data-slide-to="1"></li>
          <li class="itc-slider-indicator" data-slide-to="2"></li>
          <li class="itc-slider-indicator" data-slide-to="3"></li>
          <li class="itc-slider-indicator" data-slide-to="4"></li>
          <li class="itc-slider-indicator" data-slide-to="5"></li>
          <li class="itc-slider-indicator" data-slide-to="6"></li>
        </ol>
      </div>
    </div>

    <script>
      const body = document.querySelector("body");
      const navbar = document.querySelector(".navbar");
      const menuBtn = document.querySelector(".menu-btn");
      const cancelBtn = document.querySelector(".cancel-btn");
      menuBtn.onclick = () => {
        navbar.classList.add("show");
        menuBtn.classList.add("hide");
        body.classList.add("disabled");
      };
      cancelBtn.onclick = () => {
        body.classList.remove("disabled");
        navbar.classList.remove("show");
        menuBtn.classList.remove("hide");
      };
      window.onscroll = () => {
        this.scrollY > 20

          ? navbar.classList.add("sticky")
          : navbar.classList.remove("sticky");
      };
    </script>
    <script>
      $("#sponsor-carousel").carousel({
        interval: 3000,
        cycle: true,
      });
    
    </script>
 
       <script>
jQuery(document).ready(function($){
$('#logos').fadeOut(); //скрываем кнопку
$(window).scroll(function () {
if ($(this).scrollTop() > 50) { // при прокрутке страницы на 200 пикселей вниз
$('#logos').fadeIn();   // отображаем кнопку
} else {
$('#logos').fadeOut(); // в противном случае скрываем
}
});
});
jQuery(document).ready(function($){
$('#next').fadeOut(); //скрываем кнопку
$(window).scroll(function () {
if ($(this).scrollTop() > 50) { // при прокрутке страницы на 200 пикселей вниз
$('#next').fadeIn();   // отображаем кнопку
} else {
$('#next').fadeOut(); // в противном случае скрываем
}
});
});
</script>

   <figure class="half">
    
   <img src="img//Kursi.jpg" alt="Кнопка" /></div>
   <img src="img//olen.png"  alt="Кнопка" /></div>
  
</figure>

    <div class="container">
      <div
        class="itc-slider"
        data-autoplay="false"
        data-interval="5000"
        data-loop="true"
        data-refresh="true"
        data-slider="itc-slider"
      >
        <div class="itc-slider-wrapper">
          <div class="itc-slider-items">
            <div class="itc-slider-item">
              <!-- Начало 1 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto1">
                    <img src="img//qr.png" />
                  </div>
                </header>
              </div>
            </div>
            <!-- Конец 1 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 2 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto1">
                    <img src="img//3news.jpg  " />
                  </div>
                </header>
              </div>
            </div>
            <!-- Конец 2 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 3 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto1">
                    <img src="img//1news.jpg" />
                  </div>
                </header>
              </div>
            </div>
            <!-- Конец 3 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 4 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto1">
                    <img src="img//4news.jpg" />
                  </div>
                </header>
              </div>
            </div>
            <!-- Конец 4 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 5 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto1">
                    <img
                      alt="..."
                      class="card-img"
                      height="150"
                      loading="lazy"
                      src="img//5news.jpg"
                      width="350"
                    />
                  </div>
                </header>
              </div>
            </div>
            <!-- Конец 5 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 6 слайда -->
              <div class="card">
                <header class="card-header">
                  <div class="foto1">
                    <img src="img//6news.jpg" />
                  </div>
                </header>
              </div>
            </div>
            <!-- Конец 6 слайда -->
            <div class="itc-slider-item">
              <!-- Начало 7 слайда -->
              <div class="card">
                <header class="card-header">
                    <div class="foto1">
                  <img src="img//7news.jpg" />
                </header>
              </div>
            </div>
            <!-- Конец 7 слайда -->
          </div>
        </div>
        <button class="itc-slider-btn itc-slider-btn-prev"></button>
        <button class="itc-slider-btn itc-slider-btn-next"></button>
      
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>

    <footer>
      <div class="footer">
        <div class="row">
          <a href="#"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-vk"></i></a>
        </div>

        <div class="row">
          <ul>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Приемная комиссия</a></li>
            <li><a href="#">Политика конфиденциальности</a></li>
            <li><a href="#">Как добраться</a></li>
            <li><a href="#">Создатели </a></li>
          </ul>
        </div>

        <div class="row">© 2024 НАМТ</div>
      </div>
    </footer>
  </body>
</html>
