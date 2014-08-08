<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>BUI</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <?php if(!isset($base)) $base = "" ?>
    <link type="image/x-icon" href="<?php echo $base; ?>assets/img/favicon.ico" rel="shortcut icon">
    <link href="<?php echo $base; ?>assets/css/dpl.css" rel="stylesheet">
    <link href="<?php echo $base; ?>assets/code/style.css" rel="stylesheet">
    <?php 
      function isIe6(){
        $user_OSagent = $_SERVER['HTTP_USER_AGENT'];
        if(strpos($user_OSagent,"MSIE 6.0")){
          return true;
        }else{
          return false;
        }
      } 
    if(!isIe6()){
  ?>
</head>
<body>
  <div  id="J_Second" class="main">
        <ul class="ch-grid clearfix">
            <li>
            <div class="ch-item ch-img-1">
              <a href="#second">        
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-1"></div>
                        <div class="ch-info-back">
                            <span class="ch-info-img-1">
                            </span>
                        </div>  
                    </div>
                </div>
              </a>
            </div>
            </li>
            <li>
            <div class="ch-item ch-img-2">
              <a href="#third"> 
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-2"></div>
                        <div class="ch-info-back">
                            <span class="ch-info-img-2">
                            </span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            </li>
            <li>
            <div class="ch-item ch-img-3">
              <a href="#fourth">
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-3"></div>
                        <div class="ch-info-back">
                            <span class="ch-info-img-3">
                            </span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            </li>
            <li>
            <div class="ch-item ch-img-4">
              <a  href="#fifth">
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-4"></div>
                        <div class="ch-info-back">
                            <span class="ch-info-img-4">
                            </span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            </li>
            <li>
            <div class="ch-item ch-img-5">
              <a  href="#sixth">
                <div class="ch-info-wrap">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-5"></div>
                            <div class="ch-info-back">
                                <span class="ch-info-img-5">
                                </span>
                            </div>
                    </div>
                </div>
              </a>
            </div>
            </li>
    </ul>
    </div>
    <!--<ul id="nav">
        <li><a href="#intro" title="Next Section"></a></li>
        <li><a href="#second" title="Next Section"></a></li>
        <li><a href="#third" title="Next Section"></a></li>
    </ul>-->
    <div id="intro" class="slide">
          <div class="story">
             <div class="header-logo"></div>
          </div>
    </div> 
    
    <div id="second" class="slide">
        <div class="story">
            <div class="bg-1993"></div>
            <div class="bg-1993-time"></div>
            <div class="bg-1993-monkey"></div> 
        </div> 
        
    </div>
    
    <div id="third" class="slide">
        <div class="story">
            <div class="bg-1996"></div>
            <div class="bg-1996-time"></div>
            <div class="bg-1996-monkey"></div>
        </div> 
    </div>
    <div id="fourth" class="slide">
        <div class="story">
            <div class="bg-2001"></div>
            <div class="bg-2001-time"></div>
            <div class="bg-2001-human"></div>
        </div> 
    </div>
    <div id="fifth" class="slide">
        <div class="story">
           <div class="bg-2007"></div>
           <div class="bg-2007-human"></div>
           <div class="bg-tips"></div>
           <div class="bg-browser"></div>
           <div class="bg-2007-ie"></div>
        </div> 
    </div>
    <div id="sixth" class="slide">
        <div class="study">
          <ul>
            <li class="quick">
              <a href="index.php">
                快速上手
              </a>
            </li>
            <li class="demo">
              <a href="demo/index.php">
                控件库Demo
              </a>
            </li>
            <li class="examples">
              <a href="business/index.php">
                业务实例
              </a>
             </li>
          </ul>
        </div>
        <div class="story">
          <div class="bui-bg"></div>
          <div class="bui-human"></div> 
          <div class="what-bui"></div>
        </div>
        
    </div> 
    <script src="<?php echo $base; ?>assets/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery.scrollTo-1.4.3.1.min.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery.parallax-1.1.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery.scrollorama.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery.scrolldeck.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        resizeH();
        $(window).resize(function(){
          resizeH();
        })
          function resizeH(){
        var winHeight = $(window).height();
          var height =(Math.floor(winHeight/100)+1)*100;

          $('.slide').height(height);
          $('.header-logo').height(height);
          $('#sixth').height(winHeight);

          $('#intro').parallax("50%", 200, 0.1, true);
          $('.header-logo').parallax("50%", height, -0.4, true);
          $('#second').parallax("50%", height, 0.1, true);
          $('.bg-1993').parallax("52%", height*2, -0.6, true);
          $('.bg-1993-time').parallax("52%", height*2, -0.1, true);
          $('.bg-1993-monkey').parallax("70%", height*2, 0.4, true);
          
          $('#third').parallax("50%", height*3, 0.1, true);
          $('.bg-1996').parallax("52%", height*3, -0.6, true);
          $('.bg-1996-time').parallax("58.4%", height*3, -0.1, true);
          $('.bg-1996-monkey').parallax("50%", height*3, 0.4, true);
          
          $('#fourth').parallax("50%", height*4, 0.1, true);
          $('.bg-2001').parallax("52%", height*4, -0.6, true);
          $('.bg-2001-time').parallax("58.4%", height*4, -0.1, true);
          $('.bg-2001-human').parallax("50%", height*4, 0.4, true);
          
          $('#fifth').parallax("50%", height*5, 0.1, true);
          $('.bg-2007').parallax("60%",height*5,-0.3,true);
          $('.bg-2007-human').parallax("70%",height*5,0.2,true);
          $('.bg-browser').parallax("50%",height*5,0.1,true);
          $('.bg-tips').parallax("50%",height*5,-0.6,true);
          $('.bg-2007-ie').parallax("55%", height*5, 0.6, true);

          
          $('.bui-bg').parallax("70%", height*6, 0.2, true);
          $('.what-bui').parallax("70%", height*6, -0.2, true);
          $('.bui-human').parallax("60%", height*6, 0.1, true);
           var deck = new $.scrolldeck({
              slides: '.slide',
              buttons: '.main .ch-item a',
              duration: 1000,
              easing: 'easeInOutExpo'
          });
      }
      });
    </script>
  <?php
    }else{
  ?>
</head>
<body  style="background:url('assets/img/ie6bg.gif') #333333 repeat;width:100%;height:100%">
    <div style="background:url('assets/img/ie6pic.jpg')  no-repeat;width:1010px;height:590px;margin:50px auto;"></div>
  <?php
    }
  ?>
    
</body>
</html>