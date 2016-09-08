var newBG;

$(document).ready(function(){

    var newBG = '<div class="row">';
    function createHTML(){
        for (var i = 1; i <= 216; i++) {
            if(i % 18 == 0){
                newBG += '<div class="bg"><img src="backgroundPic/bg' + i + '.png"></div></div><div class="row">';
            }else{
                newBG += '<div class="bg"><img src="backgroundPic/bg' + i + '.png"></div>';
            }
        }
        return newBG;
    }

    function populateBG(){
        var bgImage = createHTML();
        $('#wrapper').html(bgImage);
    }

    populateBG();
});

