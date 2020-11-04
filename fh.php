<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>使用浏览器打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <meta name="aplus-touch" content="1">
    <style>
        body,html{width:100%;height:100%}
        *{margin:0;padding:0}
        body{background-color:#fff}
        #browser img{
            width:50px;
        }
        #browser{
            margin: 0px 10px;
            text-align:center;
        }
        #contens{
            font-weight: bold;
            margin:-285px 0px 10px;
            text-align:center;
            font-size:20px;
            margin-bottom: 125px;
        }
        .top-bar-guidance{font-size:15px;color:#fff;height:50%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(//gw.alicdn.com/tfs/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat}
        .top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
        .app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}
        .app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}
        .app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
</head>
<body>
<div class="top-bar-guidance">
    <p>点击右上角<img src="//gw.alicdn.com/tfs/TB1xwiUNpXXXXaIXXXXXXXXXXXX-55-55.png" class="icon-safari"> <span id="openm">Safari打开</span></p>
    <p>可以继续浏览本站哦~</p>
</div>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lato:100,300,700);
#container {
  width: 240px;
  margin:0 auto;
}
#container h1 {
  font-family: 'Lato';
  color: black;
  text-transform: uppercase;
  font-size: 1em;
  letter-spacing: 1.5px;
  text-align: center;
  width: 240px;
  margin-top: 20px;
  -webkit-animation: fade 2s infinite;
  -moz-animation: fade 2s infinite;
}

.stick {
  width: 30px;
  height: 3px;
  background: black;
  display: inline-block;
  margin-left: -8px;
}

.stick:nth-child(n) {
  transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  /* IE 9 */
  -webkit-transform: rotate(30deg);
  /* Safari and Chrome */
  -moz-transform: rotate(30deg);
  -webkit-animation: fall 2s infinite;
  -moz-animation: fall 2s infinite;
}

.stick:nth-child(2n) {
  transform: rotate(-30deg);
  -ms-transform: rotate(-30deg);
  /* IE 9 */
  -webkit-transform: rotate(-30deg);
  /* Safari and Chrome */
  -moz-transform: rotate(-30deg);
  -webkit-animation: rise 2s infinite;
  -moz-animation: rise 2s infinite;
}

@-webkit-keyframes rise {
  50% {
    transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    /* IE 9 */
    -webkit-transform: rotate(30deg);
    -moz-transform: rotate(30deg);
  }
}
@-moz-keyframes rise {
  50% {
    transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    /* IE 9 */
    -webkit-transform: rotate(30deg);
    -moz-transform: rotate(30deg);
  }
}
@-o-keyframes rise {
  50% {
    transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    /* IE 9 */
    -webkit-transform: rotate(30deg);
    -moz-transform: rotate(30deg);
  }

  @keyframes rise {
    50% {
      transform: rotate(30deg);
      -ms-transform: rotate(30deg);
      /* IE 9 */
      -webkit-transform: rotate(30deg);
      -moz-transform: rotate(30deg);
    }
  }
}
@-webkit-keyframes fall {
  50% {
    transform: rotate(-30deg);
    -ms-transform: rotate(-30deg);
    /* IE 9 */
    -webkit-transform: rotate(-30deg);
    -moz-transform: rotate(30deg);
  }
}
@-moz-keyframes fall {
  50% {
    transform: rotate(-30deg);
    -ms-transform: rotate(-30deg);
    /* IE 9 */
    -webkit-transform: rotate(-30deg);
    -moz-transform: rotate(-30deg);
  }
}
@-o-keyframes fall {
  50% {
    transform: rotate(-30deg);
    -ms-transform: rotate(-30deg);
    /* IE 9 */
    -webkit-transform: rotate(-30deg);
    -moz-transform: rotate(30deg);
  }

  @keyframes fall {
    50% {
      transform: rotate(-30deg);
      -ms-transform: rotate(-30deg);
      /* IE 9 */
      -webkit-transform: rotate(-30deg);
      -moz-transform: rotate(30deg);
    }
  }
}
@-webkit-keyframes fade {
  50% {
    opacity: 0.5;
  }

  100% {
    opacity: 1;
  }
}
@-moz-keyframes fade {
  50% {
    opacity: 0.5;
  }

  100% {
    opacity: 1;
  }
}
@-o-keyframes fade {
  50% {
    opacity: 0.5;
  }

  100% {
    opacity: 1;
  }

  @keyframes fade {
    50% {
      opacity: 0.5;
    }

    100% {
      opacity: 1;
    }
  }
}
</style>
<table width="100%" height="0" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">
<!--pulse wave-->
<!--pulse wave-->
 <h2><font><strong> 可百度搜索：1CTV</strong></font><br></h2>
<div id="container">
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
 <h1><font><strong> 推荐浏览器收藏唯一网址</strong></font><br>
 <font><strong>WWW.1CTV.COM</strong></font><br>
 <font><strong>需要更多影片请联系站长</strong></font><br></h1>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div>
  <div class="stick"></div> 

</div>

<br>
</td>
</tr>
</table>

<a style="display: none;" href="" id="vurl" rel="noreferrer"></a>
<div id="browser">
    <p>避免微信和QQ屏蔽本站网址，请理解支持！</p>

<div class="app-download-tip">
    <span class="guidance-desc">点击右上角或复制网址自行打开</span>
</div>
<link href="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/theme/default/layer.min.css" rel="stylesheet">
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.min.js"></script>
<a data-clipboard-text="{$maccms.http_url}" class="app-download-btn">点此复制本站网址</a>
<script type="text/javascript">
    new ClipboardJS(".app-download-btn");
    $(".app-download-btn").click(function() {
        layer.tips("复制成功，么么哒", ".app-download-btn", {
            tips: [3, "rgb(38,111,250)"],
            time:500
        });})
</script>

<script>
    function openu(u){
        document.getElementById("vurl").href= u;
        document.getElementById("vurl").click();
    }
    var url = window.location.href;
    if(navigator.userAgent.indexOf("QQ/")> -1){
        openu("ucbrowser://"+url);
        openu("mttbrowser://url="+url);
        openu("baiduboxapp://browse?url="+url);
        openu("googlechrome://browse?url="+url);
        openu("mibrowser:"+url);
        openu("taobao://"+url.split("://")[1]);
        openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        $("html").on("click",function(){
            openu("ucbrowser://"+url);
            openu("mttbrowser://url="+url);
            openu("baiduboxapp://browse?url="+url);
            openu("googlechrome://browse?url="+url);
            openu("mibrowser:"+url);
            openu("taobao://"+url.split("://")[1]);
            openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        });
    }else if(navigator.userAgent.indexOf("MicroMessenger") > -1){
        if(navigator.userAgent.indexOf("Android") > -1){
            var iframe = document.createElement("iframe");
            iframe.style.display = "none";
            document.body.appendChild(iframe);
        }else{

        }
    }
</script>
</body>
</html>
$f = $_GET['f'];    

echo "document.write('".$f."');";   

?>
