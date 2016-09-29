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
			      <img src="uploads/banner/banner1.jpg" />
			    </li>
			    <li>
			      <img src="uploads/banner/banner2.jpg" />
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
  <h4>歷史沿革&焚而不燬&大溪教會建築</h4>
  <div class="Container">
    <!-- 新聞區塊 start-->
    <div class="Content">
      <div class="Wrap">
        <img src="uploads/news/news-01.jpg" alt="" class="NewsImg">
        <p class="NewsDate">大溪教會簡史</p>
        <p class="NewsTitle">一.1889.10.31馬偕腳蹤來到大溪
                             1953年正式以大溪基督長老教會名稱聚會
                             地點：和平路87號
                             1957年向鎮公所承租土地(禮拜堂現址)，1972年正式成立堂會
                             1992年 3月 25日，以 8,925,267 元向鎮公所購得土地，其中350萬元貸款，1994年貸款還清
                             1995年3月21日林榮任牧師憑著信心與長執取得共識，正式建堂動土在風雨飄搖中，於1998年1月1日獻堂，造價總金額37,879,603元。</p>
        <p class="NewsTitle">二.建堂經費從0到完成建堂，3年內累積建堂基金2千多萬元，尚有17,800,000元的貸款，再次見證我們所信靠的神有豐盛的恩典
                                2001年4月7日，陳道雄牧師就任第五任牧師，於同年6月17日，推動「房角石」十年無息貸款計畫（17,800,000元）
                                2008年貸款還清，2013年7月胡宏志牧師就任第六任牧師。</p>
      </div>
    </div>
    <!-- 新聞區塊 end-->
    <!-- 新聞區塊 start-->
    <div class="Content">
      <div class="Wrap">
        <img src="uploads/news/history2.jpg" alt="" class="NewsImg">
        <p class="NewsDate">焚而不燬</p>
        <p class="NewsTitle">「焚而不燬」有「不被燒燬」的意味，愛爾蘭教會卻將它改為有「榮展燦爛」積極的意味。「焚而不燬」的標誌也成為我們台灣基督長老教會的精神，宣教師偕叡理牧師（馬偕）一生只活了五十七歲卻將其一生完全貢獻在北台灣的宣教，鞠躬盡瘁，所秉持的精神就是「寧願燒盡不願朽壞」。台灣基督長老教會設教以來，曾歷經如烈火般無數的迫害，卻不被燒燬，反而更加繁榮發展。「焚而不燬」的信仰精神就是台灣教會親身經歷的見證。宗教改革者約翰‧加爾文說：「上帝在患難中為祂的僕人準備忍耐與力量，為了要試驗他們的耐心。」</p>
       <p class="NewsTitle">「焚而不燬」的異象是表明上帝榮耀的臨在，更表明人的有限與上帝的無限，祂是跟人同在的上帝，最後表明唯獨上帝是主以外，沒有其他的主，人應當把一切榮耀歸給祂。</p>
      </div>
    </div>
    <!-- 新聞區塊 end-->
    <!-- 新聞區塊 start-->
      <div class="Content">
        <div class="Wrap">
          <img src="uploads/news/door.jpg" alt="" class="NewsImg">
          <p class="NewsDate">大溪教會建築</p>
          <p class="NewsTitle">大溪教會建築：歌德式建築哥德式建築的三個典型特色是: 1.尖的拱門，2.有稜筋的穹隆，3.飛樑(傾斜的拱壁)。另一特點是大型彩色玻璃窗。</p>
        </div>
      </div>
      <!-- 新聞區塊 end-->



</div>

  </div>
</div>

<!-- 頁尾 -->
<footer id="Footer">
  <div class="Container">
    <div id="ContactContent">
      <div id="FooterLogo"><a href="index.php"><span class="SrOnly">CakeHouse</span></a></div>
      <p>Email:dasi.pct@gmail.com</p>
      <p>會址:桃園市大溪區普濟路90號</p>
      <p>電話:(03)388-8995or388-5243</p>
      <p>傳真:(03)388-0013</p>
    </div>
    <div id="SocietyContent">
      <div id="FacebookIcon"><a href="" class="DB"><i class="fa fa-facebook-square" aria-hidden="true"></i><span class="SrOnly">Facebook</span></a></div>
      <div id="GooglePlus"><a href="" class="DB"><i class="fa fa-google-plus-square" aria-hidden="true"></i><span class="SrOnly">Google+</span></a></div>
    </div>
  </div>
  <div id="Copyrights"><p>Copyright © 2016 Dasichurch. All Rights Reserved.</p></div>
</footer>
<div id="PageTop"><a class="DB" href="javascript:void(0)">^<span class="SrOnly">回到最上方</span></a></div>
</div>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bxslider/jquery.bxslider.js"></script>
<script src="js/script.js" charset="utf-8"></script>

</body>
</html>
