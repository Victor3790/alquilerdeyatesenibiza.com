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
    odometer1.innerHTML = 1;
  })

  var scene2 = new ScrollMagic.Scene({
  triggerElement: "#scene2",
  reverse: false,
  })
  .addTo(controller)
  //.addIndicators() // add indicators (requires plugin)
  .on("start", function (e) {
    odometer2.innerHTML = 1;
  })
  .on("start", function (e) {
    odometer21.innerHTML = 2;
  })

  var scene3 = new ScrollMagic.Scene({
  triggerElement: "#scene3",
  reverse: false,
  })
  .addTo(controller)
  //.addIndicators() // add indicators (requires plugin)
  .on("start", function (e) {
    odometer3.innerHTML = 2;
  })
  .on("start", function (e) {
    odometer31.innerHTML = 5;
  })

  AOS.init({
    once: true
  });
});
