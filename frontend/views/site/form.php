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
    <link rel="stylesheet" href="/static/css/app.min.css">
    <link rel="stylesheet" href="/static/css/form.css">
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
<body>
<img style="display:none;" src="http://<?=$_SERVER["HTTP_HOST"]?>/static/img/sharepic.jpg">
    <div class="form-title"></div>
    <div class="form-wrap">
    <form id="js-form" action="">
        <div class="formitem">
            <label class="label">姓名</label>
            <div class="form-object">
                <input name="name" type="text">
            </div>
        </div>
        <div class="formitem">
            <label class="label">性别</label>
            <ul class="form-object">
                <li><input id="sex1" name="gender" type="radio" value="1"><label for="sex1">女</label></li>
                <li><input id="sex2" name="gender" checked type="radio" value="2"><label for="sex2">男</label></li>
            </ul>
        </div>
        <div class="formitem">
            <label class="label">出生日期</label>
            <div class="form-object">
                <input name="birthday" type="date">
            </div>
        </div>
        <div class="formitem">
            <label class="label">手机</label>
            <div class="form-object">
                <input name="mobile" type="tel">
            </div>
        </div>
        <div class="formitem">
            <label class="label">邮箱</label>
            <div class="form-object">
                <input name="email" type="email">
            </div>
        </div>
        <div class="formitem">
            <label class="label">微信微博</label>
            <div class="form-object">
                <input name="social" type="text">
            </div>
        </div>
        <div class="formitem">
            <label class="label label-l">是否*<span>[请选择至少1项]</span></label>
            <ul>
                <li><input class="type" id="type1" name="type[]" type="checkbox" value="1"><label for="type1">企业创始人</label></li>
                <li><input class="type" id="type2" name="type[]" type="checkbox" value="2"><label for="type2">私营企业主</label></li>
                <li><input class="type" id="type3" name="type[]" type="checkbox" value="3"><label for="type3">个体户</label></li>
                <li><input class="type" id="type4" name="type[]" type="checkbox" value="4"><label for="type4">股东</label></li>
                <li><input class="type" id="type5" name="type[]" type="checkbox" value="5"><label for="type5">外聘高管</label></li>
                <li><input class="type" id="type6" name="type[]" type="checkbox" value="6"><label for="type6">其他</label></li>
            </ul>
        </div>

        <div class="formitem">
            <label class="label">公司全称</label>
            <div class="form-object">
                <input name="company" type="text">
            </div>
        </div>
        <div class="formitem">
            <label class="label">所在行业</label>
            <div class="form-object">
                <input name="industry" type="text">
            </div>
        </div>
        <div class="formitem">
            <label class="label">主管业务</label>
            <div class="form-object">
                <input name="business" type="text">
            </div>
        </div>
        <div class="formitem">
            <label class="label">产品简称</label>
            <div class="form-object">
                <input name="product" type="text">
            </div>
        </div>
        <div class="formitem">
            <label class="label label-l">办公/通信地址及邮编</label>
            <div class="form-object">
                <input name="address" type="text">
            </div>
        </div>
        <div class="formitem">
            <label class="label label-l">员工人数*[请输入数字]</label>
            <div class="form-object">
                <input name="number" type="number">
            </div>
        </div>
        <div class="formitem">
            <label class="label label-l">创新背景及期望目标</label>
            <p>
                （介绍一下你所处的创新环境，比如所处职位、公司资源。以及此次创新的目标。）
            </p>
            <textarea name="background_objectives"></textarea>
        </div>
        <div class="formitem">
            <label class="label label-l">创新尝试及结果<span>（请用数字、案例说明）</span></label>
            <p>
                （你在原有工作基础上做出的创新与尝试，比如推出了新的客户服务项目。以及创新最终的成功。）
            </p>
            <textarea name="try_result"></textarea>
        </div>
        <div class="formitem">
            <label class="label label-l">过程中遇到的困难</label>
            <p>
                （你在创新与尝试中遇到的困难和阻力，比如资源有限、领导不支持）
            </p>
            <textarea name="difficult"></textarea>
        </div>
        <div class="formitem">
            <label class="label label-l">你需要的帮助<span>（营销、策划、思维）</span></label>
            <p>
                （如果你成为候选人，路演前你希望得到导师哪方面的辅导）
            </p>
            <textarea name="need_help"></textarea>
        </div>
        <div class="formitem">
            <label>相关资料提供</label>
            <p>（让导师更了解你的项目）</p>
            <ul>
                <li><input class="information" id="information1" name="information[]" type="checkbox" value="1"><label for="information1">照片</label></li>
                <li><input class="information" id="information2" name="information[]" type="checkbox" value="2"><label for="information2">视频</label></li>
                <li><input class="information" id="information3" name="information[]" type="checkbox" value="3"><label for="information3">媒体报到</label></li>
                <li><input class="information" id="information4" name="information[]" type="checkbox" value="4"><label for="information4">其他</label></li>
            </ul>
        </div>
        <input type="hidden" value="<?=$csrfToken?>" name="_csrf">
        <button id="submit" type="submit">提交</button>

    </form>
    </div>
    <div id="share-mask" class="a-fadein"><div class="share-mask-tip"></div></div>
    <script src="/static/js/zepto.js?2"></script>
    <script src="/static/js/fastclick.js"></script>
    <script src="/static/js/share.js?2"></script>
    <script src="/static/js/icheck.js?2"></script>
    <script>
    var CREATE_URL = "<?=Url::toRoute(['user/create']);?>";
    $(function(){
        FastClick.attach(document.body);
        $("#share-mask").on("touchmove",function(e){
            e.stopPropagation();
            e.preventDefault();
        });
        $("#share-mask").on("click",function(){
            $(this).hide();
        });
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal',
            increaseArea: '20%' // optional
        });
        var ajaxing = false;
        $("#js-form").submit(function(){
            var dataArr = $(this).serializeArray();
            for (var i = 0, len = dataArr.length; i < len ; i++) {
                if (dataArr[i]['name'] === "name" && $.trim(dataArr[i]['value']).length === 0) {
                    alert("请填写姓名!");
                    return false;
                }
                if (dataArr[i]['name'] === "birthday" && $.trim(dataArr[i]['value']).length === 0) {
                    alert("请填写生日!");
                    return false;
                }
                if (dataArr[i]['name'] === "mobile" && $.trim(dataArr[i]['value']).length === 0) {
                    alert("请填写手机号码!");
                    return false;
                } else if (dataArr[i]['name'] === "mobile" && !/^13[0-9]{9}$|14[0-9]{9}$|15[0-9]{9}$|17[0-9]{9}$|18[0-9]{9}$/.test($.trim(dataArr[i]['value']))){
                    alert("请填写正确的手机号码!");
                    return false;
                }
                if (dataArr[i]['name'] === "email" && $.trim(dataArr[i]['value']).length === 0) {
                    alert("请填写邮箱!");
                    return false;
                } else if (dataArr[i]['name'] === "email" && !/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test($.trim(dataArr[i]['value']))){
                    alert("请填写正确的邮箱!");
                    return false;
                }
                if (dataArr[i]['name'] === "social" && $.trim(dataArr[i]['value']).length === 0) {
                    alert("请填写微信微博!");
                    return false;
                }
            }
            if ($(".type:checked").length<1) {
                alert("请选择类型，至少一项！");
                return false;
            }
            if (ajaxing) {
                return false;
            }
            ajaxing = true;
            $.ajax({
                url: CREATE_URL,
                type: 'POST',
                dataType: 'json',
                data: $(this).serialize(),
                success:function(data){
                    ajaxing = false;
                    if (data.code == "0") {
                        alert("提交成功！");
                        $(window).scrollTop(0);
                        $("#share-mask").show();
                        setShareMsg();
                    }else if(data.code == "1001"){
                        alert("您已经报名过！");
                        $(window).scrollTop(0);
                        $("#share-mask").show();
                        setShareMsg();
                    }else if(data.code == "1"){
                        alert("提交失败！信息不全！");
                    }else{
                        alert("提交失败！请重试！");
                    }
                    //console.log("success");
                },
                error:function(){
                    ajaxing = false;
                    alert("提交失败！请重试！");
                    //console.log("error");
                }
            });
            return false;
        });
    });
    function setShareMsg(){
        var name = document.getElementsByName("name")[0].value;
        var msgtitle = {title:"我是"+ name +",我参加了十大微+人物评选，快来参加吧！"};
        window.wxShare.setData(msgtitle);
        window.wxShare.setLineData(msgtitle);
    }
    </script>
</body>
</html>