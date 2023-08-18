
    
  $(document).ready(function() {

  // Селектор машин 
  $('#ColorsSelector').change(function() {
    var selectedCar = $(this).val();
    var imageSource = $('option:selected', this).data('img-path');
    $('.forms__left-price img').attr('src', imageSource);
  });

  // Счетчик 

  $('.counter__btn-left').click(function(){
  var inputVal = parseInt($('#sessions-input').val());
  if(inputVal > 1){
    $('#sessions-input').val(inputVal - 1);
  }
  });

  $('.counter__btn-right').click(function(){
  var inputVal = parseInt($('#sessions-input').val());
  $('#sessions-input').val(inputVal + 1);
  });
  
// Калькулятор


  // // Обработчик изменения сезона
  // $('input[name="season"]').change(function() {
  //   calculatePrice();
  // });
  
  // // Обработчик изменения автомобиля
  // $('#carSelect').change(function() {
  //   calculatePrice();
  // });
  
  // // Обработчик изменения количества дней аренды
  // $('#sessions-input').keyup(function() {
  //   calculatePrice();
  // });
  
  // // Функция для расчета цены
  // function calculatePrice() {
  //   var season = $('input[name="season"]:checked').val();
  //   var car = $('#ColorsSelector').val();
  //   var days = parseInt($('#sessions-input').val());
  //   var price = 0;
    
  //   if (season == "summer") {
  //     if (car == "porsche") {
  //       price = 10000;
  //     } else if (car == "bmw") {
  //       price = 12000;
  //     } else if (car == "chevrolet") {
  //       price = 20000;
  //     }
  //   } else if(season == 'winter'){
  //     if(car == 'porsche'){
  //       var price = 12000 * days;
  //     } else if(car == 'bmw'){
  //       var price = 14000 * days;
  //     } else if(car == 'chevrolet'){
  //       var price = 25000 * days;
  //     }
  //   }
    
  //   var totalPrice = price * days;
    
  //   $('#Totalprice').text(totalPrice);
  // }

// ========================================================================


$('#ColorsSelector').change(function(){
  var car = $(this).val();
  var season = $('input[name=season]:checked').val();
  var data = {
     action: 'get_car_price',
     car: car,
     season: season
  };
  $.ajax({
     url: '/wp-admin/admin-ajax.php',
     type: 'post',
     data: data,
     success: function(response) {
        var price = parseInt(response);
        // Обновляем цену на странице
        $('#car-price').text(price.toLocaleString());
     },
     error: function() {
        // Обработка ошибок
        alert('Ошибка!');
     }
  });
});

$('#session-count').change(function(){
  var sessionCount = parseInt($(this).val());
  var carPrice = parseInt($('#car-price').text().replace(/\D/g,''));
  var totalPrice = sessionCount * carPrice;
  
  // Обновляем стоимость брони на странице
  $('#booking-price').text(totalPrice.toLocaleString());
});

});


  

