<?php
/*
Template Name: home
*/
?>


<?php get_header(); ?>

  <body>
    <!-- Backgraund -->
    <div class="container">
      <div class="inner">
        <div class="forms">
          <div class="forms__left">
            <forms id="carsForm" class="forms__left-inner">
              <!-- Кнопки Лето & Зима -->
              <div class="form_radio_btn">
	              <input id="radio-1" type="radio" name="season" value="summer" checked>
	              <label for="radio-1">Лето</label>
              </div>
 
              <div class="form_radio_btn">
                <input id="radio-2" type="radio" name="season" value="winter">
                <label for="radio-2">Зима</label>
              </div>
              <!-- Drop Down Меню -->
              <div class="forms__title title">Выберите спорткар:</div>
              <div class="forms__left-dropdown">
                <div class="forms__select">
                  <select class="forms__select-body" id="ColorsSelector">
                    <option id="carSelect" class="select__item" data-img-path="<?php bloginfo('template_url'); ?>/assets/image/Porshe.png" value="porsche">Porsche 911 GTR</option>
                    <option id="carSelect" class="select__item" data-img-path="<?php bloginfo('template_url'); ?>/assets/image/BMW.png" value="bmw">BMW M2</option>
                    <option id="carSelect" class="select__item" data-img-path="<?php bloginfo('template_url'); ?>/assets/image/Chevrolet.png" value="chevrolet">Chevrolet Corvette</option>
                  </select>
                </div>
                <input type="submit" id="dropDownBtn" class="dropdown__btn btn" value="Забронировать спорткар"></input>
              </div>

              <!-- Календарь  -->
              <div class="forms__left-date">
                <div class="date__container">
                    <label class="date__day-label title " for="date">Выберите трек-день</label>
                    <input class="date__day-input" form="contactForms" type="date" value="2021-01-01" id="date" required name="data" >
                </div>

                <!-- Custom number -->
                <div class="date__session">
                  <div class="date__session-title title">Количество сессий</div>
                  <div id="sessions" class="date__session-counter" data-counter> 
                  <div class="counter__btn counter__btn-left"> 
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/arrow-left.svg" alt="left">
                  </div>
                  <div class="counter__input-box">
                    <input class="counter__input" type="number" id="sessions-input" min="1" value="1">
                  </div>
                  <div class="counter__btn counter__btn-right">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/arrow-right.svg" alt="right">
                  </div>
                </div>
                </div>
              </div>
            </forms>

              <!-- Цена & Картинка -->
              <div class="forms__left-price">
                  <label for="price1" class="title forms__left-label">Стоимость: <span id="booking-price" class="booking-price"><?php echo $price; ?></span></label> 
                  <img id="carImage" class="car-image" src="<?php bloginfo('template_url'); ?>/assets/image/Porshe.png" alt="Porshe" data-carImg="">
              </div>
            <div>
            <div>
              <label for="session-count">Количество сессий:</label>
                <input type="number" id="session-count" min="1" value="1">
              </div>
              <p>Цена: <span id="car-price"></span></p>
              <p>Машина: <span id="car-name"></span></p>
              <button id="buy-button"></button></div>
          </div>
          <!-- Форма с контактной связью -->
          <div class="forms__contact">
            <div class="forms__contact-inner">
                <div class="forms__contact-title">
                    <h3 class="contact__title-head title">Укажите контактные данные</h3>
                    <p class="contact__title-text ">Оплата осуществляется только после согласования всех условий заезда (дата, спорткар, автодром)
                    </p>
                </div>
            </div>
            <div class="forms__contact-input">
                <form action="textareal" method="post" id="contactForms" >
                    
                <?php echo do_shortcode('[contact-form-7 id="a38724e" title="Контактная форма"]') ?>
                
                </form>   
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php require 'calculator.php'; ?>
  <?php get_footer()  ?>
  <?php wp_footer() ?>
    </body> 
</html>
