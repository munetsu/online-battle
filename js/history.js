// menuリスト
$('#menu4').css({
    'background-color': '#fcfcfc',
    'border-radius': '25px 25px 0px 0px',
    'margin': '10px 10px 0px 10px',
});

// 横幅取得
let width = $('.menulist').width();
// スクロール位置設定
$('.menu').scrollLeft(width*3);

// テーマリスト
$(document).on('click', '.flex_item', function(){
    // selectedクラスを削除
    $('.head').removeClass('selected');

    // selecttheme
    let selectclass = $(this).attr('class');
    let selected = selectclass.split(' ');
    console.log(selected[0]);
    $(this).addClass('selected');
    

});