jQuery(document).ready(function () {
  // initialize scroll magic
  var controller = new ScrollMagic.Controller();

  // build scenes
  var scene1 = new ScrollMagic.Scene({
  triggerElement: "#scene1",
  reverse: false,
  })
  .addTo(controller)
  //.addIndicators() // add indicators (requires plugin)
  .on("start", function (e) {
    setTimeout(function(){
      odometer1.innerHTML = 100;
    }, 10);
  })

  var scene1 = new ScrollMagic.Scene({
  triggerElement: "#scene2",
  reverse: false,
  })
  .addTo(controller)
  //.addIndicators() // add indicators (requires plugin)
  .on("start", function (e) {
    setTimeout(function(){
      odometer2.innerHTML = 600;
    }, 10);
  })

  var scene1 = new ScrollMagic.Scene({
  triggerElement: "#scene3",
  reverse: false,
  })
  .addTo(controller)
  //.addIndicators() // add indicators (requires plugin)
  .on("start", function (e) {
    setTimeout(function(){
      odometer3.innerHTML = 20;
    }, 10);
  })

  jQuery('.slider-invitados').jRange({
    from: 10,
    to: 50,
    step: 1,
    format: '%s',
    width: 300,
    showLabels: true,
    snap: true
  });

  jQuery('.slider-anio').jRange({
    from: 1980,
    to: 2020,
    step: 1,
    format: '%s',
    width: 300,
    showLabels: true,
    snap: true
  });

  AOS.init({
    once: true
  });
});
