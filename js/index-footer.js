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
      odometer1.innerHTML = 87;
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
      odometer2.innerHTML = 662;
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
      odometer3.innerHTML = 15;
    }, 10);
  })
});