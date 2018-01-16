$(function(){

function maxBanner(){
var index = 0;

$imgs = $('.imgs');
$icons = $('.icons li');
$timer  =null;
$icons.click(function(){
    index = $(this).index();
    console.log(index);
    play();
})


function play(){
    $offset = -$('.imgs li').width()*index;
console.log($offset);
    $imgs.animate({left:$offset},200);

    $icons.eq(index).addClass('cur').siblings().removeClass('cur')
}
        autoplay();

function autoplay(){
    timer = setInterval(function(){
        index++;
        if(index>2)index=0;
        play();
    },2000)}

$('.min-container-banner').hover(function(){
    clearTimeout(timer);
    console.log(1);
},function(){
    autoplay();
})
}

/*下拉的列表*/

for(var i=0;i<$('.ctList').length;i++){

    $('.ctList>h3').click(function(){
        $(this).next().stop().slideToggle();
    })
}

/*返回顶部*/

$('.mask span').eq(0).click(function(){
    $(document).scrollTop(0);
})


bannerMin();
function bannerMin(){
var index = 0;

$imgs = $('.min-photos');
$icons = $('.min-icons li');
$timer  =null;
$icons.click(function(){
    index = $(this).index();
    console.log(index);
    play();
})



function play(){
    $offset = -$('.imgs').width()*index;
    console.log($offset);
console.log($offset);
    $imgs.animate({left:$offset},200);

    $icons.eq(index).addClass('cur').siblings().removeClass('cur')
}
        autoplay();

function autoplay(){
    timer = setInterval(function(){
        index++;
        if(index>2)index=0;
        play();
    },2000)}

$('.minBanner').hover(function(){
    clearTimeout(timer);
    console.log(1);
},function(){
    autoplay();
})
}


/*下拉的列表*/

for(var i=0;i<$('.ctList').length;i++){
    var div = $('.ctList')[i];
    $(div).children('h3').click(function(){
        $(this).next().stop().slideToggle();
    })
}


})