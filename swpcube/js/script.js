// Инициализация Swiper

new Swiper('.image-slider',{
   // Стрелки
   navigation: {
      nextEl:'.swiper-button-next',
      prevEl:'.swiper-button-prev'
   },

   // Навигация
   // Буллеты, текущее положение, прогрессбар
   // pagination:{
   //    el: '.swiper-pagination',
   //    // // Буллеты
   //    // clickable: true,
   //    // // Динамические буллеты
   //    // dynamicBullets: true,
   //    // // Кастомные буллеты
   //    // renderBullet: function(index, className){
   //    //    return '<span class="' + className + '">' + (index + 1) + '</span>';
   //    // }

   //    // Фракция - текущая страница слайдера из общего числа
   //    type: 'fraction',
   //    renderFraction: function(currentClass, totalClass){
   //       return 'Фото <span class="' + currentClass + '"></span>' + ' из ' + '<span class="' + totalClass + '"></span>';
   //    },

   //    // // Прогрессбар
   //    // type: 'progressbar'
   // },
   // Скролл
   // scrollbar: {
   //    el: '.swiper-scrollbar',
   //    // Возможжность перетакивать скролл
   //    draggable: true
   // },

   // Включение/отключение
   // перетаскивания на ПК
   simulateTouch:true, //чтобы отключить - false
   // Чувствительность свайпа
   touchRatio:1, // для уменьшения усилия - увеличить число
   // Угол срабатывания свайпа
   touchAngle: 45,
   // Курсор перетаскивания
   grabCursor: true,

   // Переключение при клике на слайд
   slideToClickedSlide: true,

   // Навигация по хешу
   hashNavigation: {
      // Отслеживать состояние
      watchState:true,
   },

   // Управление клавиатурой
   keyboard: {
      // Включение/отключение
      enabled:true,
      // Включение/отключение
      // только, когда слайдер
      // в пределах вьюпорта 
      onlyInViewport: true,
      // Включение/отключение
      // управление клавишами
      // pageUp, pageDown
      pageUpDown: true,
   },

   // Управление колесом мыши
   mousewheel: {
      // Чувствительность колеса мыши
      sensitivity:1,
      // Класс объекта, на кором
      // будет срабатывать прокрутка мышью
      eventsTarget: ".image-slider", // для множетсва слайдеров стоит отключать
   },

   // Автовысота
   autoHeight: false, // особенно полезно, когда в слайдах есть текст

   // Количество слайдов для показа
   slidesPerView:2,

   // Отключение функционала,
   // если слайдов меньше, чем нужно
   watchOverflow: true,

   // Отступ между слайдами
   spaceBetween:30,

   // Количество пролистываемых слайдов
   slidesPerGroup: 1,

   // Активный слайд по центру
   centeredSlides: false,

   // Стартовый слайд
   initialSlide: 0,

   // Мультирядность
   slidesPerColumn:1, // автовысоту отключить
                      // Количество слайдов для показа
                      // сделать равным количеству рядов

   // Бесконечный слайдер
   loop:true,

   // Количество дублирующих слайдов
   // Требуется при slidesPerView:'auto'
   // loopedSlides:3,

   // Свободный режим
   // Перетаскиваем и свайпаем слайды без фиксированной позиции
   freeMode: true,

   // Автопрокрутка
   // autoplay:{
   //    // Пауза между прокруткой
   //    delay:1000,
   //    // Закончить на последнем слайде
   //    stopOnInteraction:true, // при выключенной бесконечности
   //    // Отключить после ручного переключения
   //    disableOnInteraction:false
   // }, 

   // Скорость 
   speed: 500,

   // Вертикальный слайдер
   // direction: 'vertical',// для корректности установить высоту слайдов
   //                       // и centeredSlides: true,
   direction: 'horizontal',

   // Эффекты переключения слайдов
   // Листание
   // effect: 'slide', // по умолчанию

   // Смена прозрачности
   // effect: 'fade',

   // fadeEffect: {
   //    // Параллельная смена прозрачности
   //    crossFade: true
   // }

   // Переворот
   // effect: 'flip',
   // flipEffect:{
   //    // Тень
   //    slideShadows: true,
   //    // Показ только активного слайда
   //    limitRotation: true
   // }

   // Куб
   effect: 'cube',
   cubeEffect: {
      // Настройка тени
      slideShadows: true,
      shadow: true,
      shadowOffset:20,
      shadowScale: 0.94
   },
});
