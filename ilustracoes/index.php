<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Myrtax </title>
    <?php include_once("../prefabs/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/css/ilustracoes.css">
    <link rel="stylesheet" type="text/css" href="/css/zoom_view.css">
    <script type="text/javascript" src="../js/btn.js"></script>
  </head>
  <body>
    <?php include_once("../prefabs/header.php"); ?>
    <section id="zoom_view">
      <a class="btn_anterior_link" onclick="zoomhide()"><img class="btn_anterior" src="/img/menu/btn_anterior_black.png"/></a>
      <div id="container_imagetozoom">
        <img id="imagetozoom" src="/img/posts/firstpost.png" alt="">
      </div>
      <div id="zoom_image"></div>
    </section>
    <h2 class="title_tag"><span class="text_part_1">Ilus</span><span class="text_part_2">trações</span></h2>
    <div class="down_bar"></div>
    <section class="gallery">
      <ol class="gallery_grid_coluns">
        <li class="gallery_colun">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img1.png','url(/img/arts/grid/img1.png)')" src="/img/arts/grid/img1.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img4.png','url(/img/arts/grid/img4.png)')" src="/img/arts/grid/img4.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img7.png','url(/img/arts/grid/img7.png)')" src="/img/arts/grid/img7.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img10.png','url(/img/arts/grid/img10.png)')" src="/img/arts/grid/img10.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img13.png','url(/img/arts/grid/img13.png)')" src="/img/arts/grid/img13.png" alt="">
        </li>
        <li class="gallery_colun">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img2.png','url(/img/arts/grid/img2.png)')" src="/img/arts/grid/img2.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img5.png','url(/img/arts/grid/img5.png)')" src="/img/arts/grid/img5.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img8.png','url(/img/arts/grid/img8.png)')" src="/img/arts/grid/img8.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img11.png','url(/img/arts/grid/img11.png)')" src="/img/arts/grid/img11.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img14.png','url(/img/arts/grid/img14.png)')" src="/img/arts/grid/img14.png" alt="">
        </li>
        <li class="gallery_colun">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img3.png','url(/img/arts/grid/img3.png)')" src="/img/arts/grid/img3.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img6.png','url(/img/arts/grid/img6.png)')" src="/img/arts/grid/img6.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img9.png','url(/img/arts/grid/img9.png)')" src="/img/arts/grid/img9.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img12.png','url(/img/arts/grid/img12.png)')" src="/img/arts/grid/img12.png" alt="">
          <img class="frame_gallery" onclick="zoomshow('/img/arts/grid/img15.png','url(/img/arts/grid/img15.png)')" src="/img/arts/grid/img15.png" alt="">
        </li>
      </ol>
    </section>
    <!--<section class="gallery">
      <ol class="gallery_grid">
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img1.png','url(/img/arts/grid/img1.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img1.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img2.png','url(/img/arts/grid/img2.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img2.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img3.png','url(/img/arts/grid/img3.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img3.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img4.png','url(/img/arts/grid/img4.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img4.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img5.png','url(/img/arts/grid/img5.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img5.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img6.png','url(/img/arts/grid/img6.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img6.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img7.png','url(/img/arts/grid/img7.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img7.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img8.png','url(/img/arts/grid/img8.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img8.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img9.png','url(/img/arts/grid/img9.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img9.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img10.png','url(/img/arts/grid/img10.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img10.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img11.png','url(/img/arts/grid/img11.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img11.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img12.png','url(/img/arts/grid/img12.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img12.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img13.png','url(/img/arts/grid/img13.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img13.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img14.png','url(/img/arts/grid/img14.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img14.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img15.png','url(/img/arts/grid/img15.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img15.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img16.png','url(/img/arts/grid/img16.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img16.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img17.png','url(/img/arts/grid/img17.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img17.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
        <a class="link_photo_gallery" onclick="zoomshow('/img/arts/grid/img18.png','url(/img/arts/grid/img18.png)')"><li class="photo_gallery" style="background-image: url('/img/arts/grid/img18.png');"></li><div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div></a>
      </ol>
    </section>-->
    <script type="text/javascript" src="/js/zoomimage.js"></script>
  </body>
</html>
