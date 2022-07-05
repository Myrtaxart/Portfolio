(function(d){
  var scale = 3.5;
  var img = d.querySelector('#imagetozoom');
  var zoomimage = d.querySelector('#zoom_image');
  var positionZoomImageX = 0;
  var positionZoomImageY = 0;
  img.addEventListener("mousemove", definePosition);
  function definePosition(event){
    zoomimage.style.backgroundSize = (img.width * scale) + "px";
    if ((-(event.offsetX * scale) + (zoomimage.clientWidth / 2)) < 0 && (-(event.offsetX * scale) + (zoomimage.clientWidth / 2)) > (-(img.width * scale) + zoomimage.clientWidth)) {
      positionZoomImageX = (-(event.offsetX * scale) + (zoomimage.clientWidth / 2));
    }
    if ((-(event.offsetY * scale) + (zoomimage.clientHeight / 2)) < 0 && (-(event.offsetY * scale) + (zoomimage.clientHeight / 2)) > (-(img.height * scale) + zoomimage.clientHeight)) {
      positionZoomImageY = (-(event.offsetY * scale) + (zoomimage.clientHeight / 2));
    }
    zoomimage.style.backgroundPosition = (positionZoomImageX + "px " + positionZoomImageY +"px")  ;
  }

})(document);
