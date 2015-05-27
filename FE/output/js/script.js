if(/MicroMessenger/.test(navigator.userAgent)) {
    init();
    wx.ready(function(){
        loader();
        bind();
        document.getElementById("bgm").play();
    });
}else{
    loader();
    init();
    bind();
}

window.onload = function() {
    $audio = $("audio");
    if ($audio.length>0) {
        $audio.attr("src", StaticPath+$audio.data("src"));
        $audio.parent("a").prepend('<i class="icon-music"></i>');
    }
};


function init() {
    $(function(){
        FastClick.attach(document.body);
        flippage = new Flippage($("body"));
    });
}

function loader(){
    var imageList = [
        "p1bg.jpg","p2bg.jpg","p3bg.jpg","p4bg.jpg","p5bg.jpg","p6bg.jpg","p7bg.jpg","p8bg.jpg","p9bg.jpg","p10bg.jpg",
        "p1ct.png","p2ct.png","p3ct.png","p4ct.png","p5ct.png","p6ct.png","p7ct.png","p8ct.png","p9ct.png","p10ct.png",
        "p7cup.png","p5bg2.jpg","units-icons.png","share.png"
    ];


    var i = 0;
    var progress = 0;
    var length = imageList.length;
    imageloader(imageList,function(){
        i++;
        if (i === length) {
            progress = 100;
            setTimeout(function(){
                loaded();
            },500);
        }

    });

}


function loaded(){
    $(function(){
        var loading = $("#app-loading");
        loading.addClass("z-hide");
        loading.on("webkitTransitionEnd", function() {
            loading.remove();
            flippage._isInitComplete = true;
            flippage.showPage();
            // flippage.showPage(8);
        });
    });
}


function bind(){
    $(function(){
        var obj = $(".u-globalAudio").eq(0);
        var audio = $("audio")[0];
        if (audio.autoplay) {
            play();
        }
        obj.on("click",function(){
            if (obj.hasClass('z-play')) {
                pause();
            }else{
                play();
            }
        });
        function pause(){
            audio.pause();
            obj.removeClass("z-play").addClass("z-pause");
        }
        function play(){
            audio.play();
            obj.removeClass("z-pause").addClass("z-play");
        }
    });

    $(function(){
        $("#share-mask").on("touchmove",function(e){
            e.preventDefault();
            e.stopPropagation();
            return false;
        });
        $(".leftbtn").on("click",function(){
            $("#share-mask").show();
        });
        $("#share-mask").on("click",function(){
            $(this).hide();
        });
    });
}