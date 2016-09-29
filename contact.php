<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>大溪教會網站測試</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="js/bxslider/jquery.bxslider.css">
  <link rel="stylesheet" href="js/jquery-3.1.0.min.js">
  <link rel="stylesheet" href="css/styles.css">
  <script src="respond.min.js"></script>
  <script src="jquery-1.8.3.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
</head>
<script>
$(function(){
  var viewport = $(window).width();
  $('.SubMenu').hide();
  if(viewport<855){
    //平板以下行為
    //主導覽按鈕MenuIcon
    $('#MenuIcon').click(function(){
      if( $('#Navigation').hasClass('down') ){
        $('#Navigation').slideDown();
        $('#Navigation').removeClass('down');
      }else{
        $('#Navigation').slideUp();
        $('#Navigation').addClass('down');
      }
    });
    //#MenuIcon end
    //導覽按鈕
    $('#Navigation>li').click(function(){
      $('.SubMenu').slideUp();
      $(this).find('.SubMenu').slideDown();
    });
    //#Navigation>li end
  }else{
    //電腦版行為
      //電腦版行為
    $('#Navigation>li').hover(function(){
      $(this).find('.SubMenu').slideDown();
    },function(){
      $(this).find('.SubMenu').slideUp();
    });
  }
});
</script>
<body>
<header id="Header">
  <div class="Container">
    <div id="MenuIcon" class="BGEdit"><a class="DB" href="#"><span class="SrOnly">手機版主導覽按鈕</span></a></div>
    <h1 id="Logo" class="BGEdit"><a class="DB" href="index.php"><span class="SrOnly">大溪教會</span></a></h1>
    <h3 class="SrOnly">主導覽</h3>
    <nav id="PrimaryNavigation" class="switch">
      <ul>
        <li><a href="history.php">歷史沿革</a></li>
        <li><a href="Pastor Team.php">牧師團隊</a></li>
        <li><a href="time.php">聚會時間</a></li>
        <li id="NewsBtn"><a href="javascript:void(0)" class="DB"><span>最新消息</span></a></li>
        <li id="ProductBtn"><a href="movie.php" class="DB"><span>影音專區</span></a></li>
        <li><a href="contact.php" class="DB"><span>聯絡我們</span></a></li>
      </ul>
    </nav>
  </div>
</header>
<!--<div id="Banner">
  <div id="BannerLeft"><img src="images/bg/banner_left_bg.png" alt=""></div>
  <div id="BannerContent">
    <ul class="bxslider">
			    <li>
			      <img src="uploads/banner/banner5.jpg" />
			    </li>
			    <li>
			      <img src="uploads/banner/.jpg" />
			    </li>
			    <li>
			      <img src="uploads/banner/banner3.jpg" />
			    </li>
			    <li>
			      <img src="uploads/banner/banner4.jpg" />
			    </li>
			  </ul>
  </div>
  <div id="BannerRight"><img src="images/bg/banner_right_bg.png" alt=""></div>

</div>-->

<div id="News">
  <div class="Container">
    <h4>聯絡我們</h4>
    <!-- 聚會區塊 start-->
    <div class="Content">
      <div class="Wrap">
        <p></p>
        <div class="contact" style="margin-top:80px">
					<h1>聯絡資訊</h1>
					<form action="../index.php">
            <div id="FooterLogo"><a href="index.php"><span class="SrOnly">CakeHouse</span></a></div>
            <p>Email:dasi.pct@gmail.com</p>
            <p>會址:桃園市大溪區普濟路90號</p>
            <p>電話:(03)388-8995or388-5243</p>
            <p>傳真:(03)388-0013</p>
          </div>
					</form>
				</div>
        <p class="NewsDate"></p>
        <p class="NewsTitle"></p>
        <p class="NewsTitle"></p>
        <p class="NewsTitle"></p>
        <p class="NewsTitle"></p>
      </div>
    </div>
    <!-- 聚會區塊 end-->

  </div>
</div>


<!-- 頁尾 -->
<footer id="Footer">
  <div class="Container">
    <div id="ContactContent">

    </div>
    <div id="SocietyContent">
      <div id="FacebookIcon"><a href="" class="DB"><i class="fa fa-facebook-square" aria-hidden="true"></i><span class="SrOnly">Facebook</span></a></div>
      <div id="GooglePlus"><a href="" class="DB"><i class="fa fa-google-plus-square" aria-hidden="true"></i><span class="SrOnly">Google+</span></a></div>
    </div>
  </div>
  <div id="Copyrights"><p>Copyright © 2016 dasichurch. All Rights Reserved.</p></div>
</footer>
<div id="PageTop"><a class="DB" href="javascript:void(0)">^<span class="SrOnly">回到最上方</span></a></div>
</div>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bxslider/jquery.bxslider.js"></script>
<script src="js/script.js" charset="utf-8"></script>

</body>
</html>
