<?php

use yii\helpers\Url;

require_once dirname(dirname(dirname(dirname(__FILE__))))."/wxjssdk/jssdk.php";
$jssdk = new JSSDK("wx753126c234482aab", "dfef58151a1b30e023b9d1e57ad41aa8");
$signPackage = $jssdk->GetSignPackage();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>“劲霸·创富汇”微力量竞选</title>
    <script type="text/javascript">if(/Android (\d+\.\d+)/.test(navigator.userAgent)){
    var version = parseFloat(RegExp.$1);
    if(version>2.3){
        var phoneScale = parseInt(window.screen.width)/640;
        document.write('<meta name="viewport" content="width=640, minimum-scale = '+ phoneScale +', maximum-scale = '+ phoneScale +', target-densitydpi=device-dpi">');
    }else{
        document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
    }
}else{
    document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
}</script>
    <script type="text/javascript">(function(navigator) {
    var userAgent = navigator.userAgent;
        documentElement = document.documentElement;
    if ( userAgent.match( /micromessenger\/5/gi ) ) {
        documentElement.className += " mobile wx_mobile wx_mobile_5";
    } else if ( userAgent.match( /micromessenger/gi ) ) {
        documentElement.className += " mobile wx_mobile";
    } else if ( userAgent.match( /ucbrowser/gi ) ) {
        documentElement.className += " mobile uc_mobile";
    } else if ( /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test( userAgent.toLowerCase() ) ) {
        documentElement.className += " mobile";
    } else if ( userAgent.toLowerCase().match( /msie/gi ) && ( parseFloat( userAgent.toLowerCase().match( /msie ([0-9]{1,}[\.0-9]{0,})/i )[1] || 999 ) < 9 ) ) {
        documentElement.className += " pc pc-ie pc-ie8";
    } else if ( userAgent.toLowerCase().match( /msie/gi ) || navigator.msPointerEnabled || navigator.pointerEnabled ) {
         documentElement.className += " pc pc-ie";
    } else {
        documentElement.className += " pc";
    }
})(navigator);</script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
      wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [ 'checkJsApi', 'onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo' ]
      });
    </script>
    <script>
        // var StaticPath = "";
        var StaticPath = "/static";
    </script>
    <link rel="stylesheet" href="/static/css/app.min.css?2">
    <link rel="stylesheet" href="/static/css/style.css?2">
    <!--分享信息start-->
    <!--分享给朋友数据-->
    <meta name="share_msg"
        data-title="劲霸·创富汇 微力量精选"
        data-desc="中国首个面向创富族群的竞选，本活动由劲霸男装和创业家联合主办"
        data-link="<?=Url::toRoute(['site/main']);?>"
    >
    <!--分享到朋友圈数据-->
    <meta name="share_line"
        data-title="劲霸·创富汇-微力量精选--中国首个面向创富族群的竞选"
        data-link="<?=Url::toRoute(['site/main']);?>"
    >
    <!--分享成功回调跳转链接-->
    <meta name="share_callback" data-callback="">
    <!--分享信息end-->
</head>
<body class="app" >
<img style="display:none;" src="http://<?=$_SERVER["HTTP_HOST"]?>/static/img/sharepic.jpg">
    <div id="app-loading" class="app-loading">
        <div id="floatingCirclesG">
            <div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02"></div><div class="f_circleG" id="frotateG_03"></div><div class="f_circleG" id="frotateG_04"></div><div class="f_circleG" id="frotateG_05"></div><div class="f_circleG" id="frotateG_06"></div><div class="f_circleG" id="frotateG_07"></div><div class="f_circleG" id="frotateG_08"></div>
        </div>
    </div>
    <div class="ui-guideWrap"></div>
    <header class="app-header">
        <a href="javascript:void(0);" class="u-globalAudio">
            <audio src="" autoplay loop data-src="/img/bgm.mp3"></audio>
        </a>
    </header>
    <section class="app-content">
        <section id="story1" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated zoomIn"></div>
                <div class="ui-text ui-text2 animated flipInX"></div>
                <div class="ui-text ui-text3 animated fadeInUp"></div>
                <div class="ui-text ui-text4 animated fadeInUp"></div>
                <div class="ui-text ui-text5 animated fadeIn"></div>
            </section>
        </section>
        <section id="story2" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated zoomIn"></div>
                <div class="ui-text ui-text2 animated bounceIn"></div>
                <div class="ui-text ui-text3 animated fadeInUp"></div>
                <div class="ui-text ui-text4 animated fadeIn"></div>
            </section>
        </section>
        <section id="story3" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated lightSpeedIn"></div>
                <div class="ui-text ui-text2 animated fadeInUp"></div>
                <div class="ui-text ui-text3 animated fadeInUp"></div>
                <div class="ui-text ui-text4">
                    <div class="ui-text ui-text11 animated bounceIn"></div>
                    <div class="ui-text ui-text22 animated bounceIn"></div>
                    <div class="ui-text ui-text33 animated bounceIn"></div>
                    <div class="ui-text ui-text44 animated bounceIn"></div>
                    <div class="ui-text ui-text55 animated bounceIn"></div>
                </div>
            </section>
        </section>
        <section id="story4" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated fadeInUp"></div>
                <div class="ui-text ui-text2 animated slideInRight"></div>
                <div class="ui-text ui-text3 animated slideInRight"></div>
                <div class="ui-text ui-text4 animated slideInRight"></div>
                <div class="ui-text ui-text5 animated slideInRight"></div>
                <div class="ui-text ui-text6 animated slideInRight"></div>
                <div class="ui-text ui-text7 animated lightSpeedIn"></div>
                <div class="ui-text ui-text8 animated lightSpeedIn"></div>
            </section>
        </section>
        <section id="story5" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated rotateInDownLeft"></div>
                <div class="ui-text ui-text2 animated rotateInUpLeft"></div>
                <div class="ui-text ui-text3 animated flipInY"></div>
                <div class="ui-text ui-text4 animated flipInY"></div>
            </section>
            <div class="switchimg animated fadeIn"></div>
        </section>
        <section id="story7" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated slideInLeft"></div>
                <div class="ui-text ui-text2 animated zoomIn"></div>
                <div class="ui-text ui-text3 animated fadeInUp"></div>
                <div class="ui-text ui-text4 animated fadeIn"></div>
            </section>
        </section>
        <section id="story6" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated rollIn"></div>
                <div class="ui-text ui-text2 animated flipInX"></div>
                <div class="ui-text ui-text3 animated bounceIn"></div>
                <div class="ui-text ui-text4 animated bounceIn"></div>
            </section>
        </section>
        <section id="story8" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated fadeInUp"></div>
                <div class="ui-box ui-box1 animated fadeIn"></div>
                <div class="ui-arrow ui-arrow1 animated fadeInLeft"></div>
                <div class="ui-box ui-box2 animated fadeIn"></div>
                <div class="ui-arrow ui-arrow2 animated fadeInDown"></div>
                <div class="ui-box ui-box3 animated fadeIn"></div>
                <div class="ui-arrow ui-arrow3 animated fadeInRight"></div>
                <div class="ui-box ui-box4 animated fadeIn"></div>
                <div class="ui-arrow ui-arrow4 animated fadeInDown"></div>
                <div class="ui-box ui-box5 animated fadeIn"></div>
                <div class="ui-arrow ui-arrow5 animated fadeInLeft"></div>
                <div class="ui-box ui-box6 animated fadeIn"></div>
            </section>
        </section>
        <section id="story9" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated fadeInUp"></div>
                <div class="ui-text ui-text2 animated slideInRight"></div>
                <div class="ui-text ui-text3 animated slideInRight"></div>
                <div class="ui-text ui-text4 animated slideInRight"></div>
                <div class="ui-text ui-text5 animated fadeInUp"></div>
                <div class="ui-text ui-text6"></div>
                <div class="ui-text ui-text7">
                    <a class="leftbtn" href="javascript:;"></a>
                    <a class="rightbtn" href="/index.php?r=site/form"></a>
                </div>
                <div class="ui-text ui-text8 animated fadeInUp"></div>
            </section>
        </section>
        <section id="story10" class="page">
            <section class="page-content middle-center">
                <div class="ui-text ui-text1 animated fadeInDown"></div>
                <div class="ui-text ui-text2"></div>
                <div class="ui-text ui-text3 animated fadeInDown"></div>
                <div class="ui-text ui-text4 animated zoomIn"></div>
                <div class="ui-text ui-text5 animated fadeInUp"></div>
                <div class="ui-text ui-text6 animated fadeIn"></div>
            </section>
        </section>
    </section>
    <div id="share-mask" class="a-fadein"><div class="share-mask-tip"></div></div>
    <script src="/static/js/zepto.js?2"></script>
    <script src="/static/js/fastclick.js"></script>
    <script src="/static/js/flippage.js?2"></script>
    <script src="/static/js/share.js?2"></script>
    <script src="/static/js/loader.js?2"></script>
    <script src="/static/js/script.js?2"></script>
</body>
</html>