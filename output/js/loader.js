var ImagePrefix = StaticPath + "/img/";
var imageloader = function(imageUrlArr,callback){
    var imageArr = [];
    for (var i = 0, length = imageUrlArr.length; i < length; i++) {
        imageArr[i] = new Image();
        imageArr[i].onload = imageArr[i].onerror = callback;
        imageArr[i].src = ImagePrefix + imageUrlArr[i];
    }
};
var audioloader = function(audioUrlArr,callback){
    for (var i = 0, length = audioUrlArr.length; i < length; i++) {
        //console.log(audioUrlArr[i].data);
        audioUrlArr[i].onplaying = audioUrlArr[i].onerror = function(){
            if (!this.autoplay) {
                this.pause();
            }
            callback(this);
            this.onplaying = null;
        };
        audioUrlArr[i].src = audioUrlArr[i].dataset.src;
        audioUrlArr[i].play();
    }
};