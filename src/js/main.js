$(function () {

  // 最初に画面を表示した時のスライダーの表示
  $(".js-slider").find(".js-slider-inner").hide();
  $(".js-slider").find(".js-slider-inner:first").stop().fadeIn(3000);

  // 表示された後に自動で画像が変わる動き
  setInterval(function () {
    $(".js-slider").find(".js-slider-inner:first-child").fadeOut(3000)
      .next(".js-slider-inner").fadeIn(6000)
      .end().appendTo(".js-slider");
  }, 20000);
});




