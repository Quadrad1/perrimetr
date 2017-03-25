<?php require 'php/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Home Page | Design Company - Free Website Template from Templatemonster.com</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link href="http://allfont.ru/allfont.css?fonts=roboto-thin" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="http://menchasha.ru/wp-content/uploads/2016/07/qEnxmitt-64_cs-2.jpg"></link> 
  <link rel="icon" href="http://www.chada.ma/wp-content/uploads/2015/05/favicon-facebook_normal.png"></link>
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
	<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]-->
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="index.php">Logo</a></h1>
      <nav>
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
          <li><a href="about.html">About</a></li>
          <!--<li><a href="privacy.html">Privacy</a></li>-->
          <!--<li><a href="gallery.html">Gallery</a></li>-->
          <li><a href="contacts.html">Contact</a></li>
          <li><a href="sitemap.html">Sitemap</a></li>
        </ul>
      </nav>
    </div>
	</header>

  <!-- #gallery -->

  <?php  $sliderdb = mysqli_query($connection,"SELECT * FROM `slider_db` ");?>

  <section id="gallery">
  	<div class="container">
    	 <ul id="myRoundabout">

        <li><img src="images/slide1.png" alt=""></li>
        <?php
          while(($sliderdb_result = mysqli_fetch_assoc($sliderdb))){
            echo ('<li><img src="'.$sliderdb_result['url'].'" alt=""></li>');
          }
         ?>
      	
                
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
           <!-- <h2> wer <span> услуги </span></h2>
            &lt;!&ndash; .news &ndash;&gt;-->
            <ul class="news">
              <li class="tittleBar">Услуги:</li>
              <li>
              	<figure><img src = "images/yes.png"></figure>
                <h3> Идейные соображения высшего порядка</h3>
                а также консультация с широким активом способствует
              </li>
              <li>
                <figure><img src = "images/yes.png"></figure>
                <h3> Идейные соображения высшего порядка</h3>
                подготовки и реализации направлений прогрессивного развития.
              </li>
              <li>
                <figure><img src = "images/yes.png"></figure>
                <h3> Идейные соображения высшего порядка</h3>
                Задача организации, в особенности же укрепление и развитие
              </li>

              <!--<li>
              	<figure><strong>25</strong>May</figure>
                <h3><a href="#">Nemo enim ipsam</a></h3>
                Voluptatem quia voluptas sit asper natur aut odit aut fugit <a href="#">...</a>
              </li>-->
            </ul>
            <!-- /.news -->
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>Welcome to <span>Our Design Company!</span></h2>
              <p>структуры способствует подготовки и реализации направлений прогрессивного развития.
                Значимость этих проблем настолько очевидна, что укрепление и развитие структуры влечет за
                собой процесс внедрения и модернизации позиций, занимаемых участниками в</p>
              <figure><a href="#"><img src="images/bannerContent.png" alt=""></a></figure>
              <p>отношении поставленных задач. Повседневная практика показывает, что укрепление и развитие структуры
                требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач.
                : <a href="index.html">Home</a>, <a href="about.html">About us</a>
                , <a href="privacy.html">Privacy Policy</a>, <a href="gallery.html">Gallery</a>, <a href="contacts.html">
                  Contact us</a> (note that contact us form – doesn’t work), <a href="sitemap">Site Map</a>.</p>
              Таким образом постоянный количественный рост и сфера нашей активности способствует подготовки и реализации
              модели развития. Таким образом дальнейшее развитие различных форм деятельности требуют определения и уточнения
              новых предложений. Значимость этих проблем
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer>
    <div class="container">
    	<div class="wrapper">
        <div class="fleft">Copyright - Type in your name here</div>
        <div class="fright"><!--<a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website template</a> designed by TemplateMonster.com&nbsp; &nbsp; |&nbsp; &nbsp; <a href="http://templates.com/product/3d-models/" target="_blank">3D Models</a> provided by Templates.com--></div>
      </div>
    </div>
  </footer>
  <script type="text/javascript"> Cufon.now(); </script>
  <?php mysqli_close($connection); ?>
</body>
</html>
