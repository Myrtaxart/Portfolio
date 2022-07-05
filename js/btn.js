function headerdown()
{
  document.getElementById("header").style.top = "0";
}

function headerup()
{
  document.querySelector("#header").style.top = "-100%";
}

function menushow()
{
  document.querySelector("#menu_screen").style.right = "0";
}

function menuhide()
{
  document.querySelector("#menu_screen").style.right = "-100%";
}

function zoomshow(thumb, imagezoom)
{
  document.querySelector("#zoom_view").style.right = "0";
  document.querySelector("#imagetozoom").src = thumb;
  document.querySelector("#zoom_image").style.backgroundImage = imagezoom;
}

function zoomhide()
{
  document.querySelector("#zoom_view").style.right = "-100%";
}
