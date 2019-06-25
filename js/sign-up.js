// 西暦をセット
$(function(){
    let now = new Date();
    let year = now.getFullYear();
    let view = '';
    for(let i=1970;i<=year;i++){
        if(i == 2000){
            view += '<option value='+i+' selected>'+i+'</option>';
        }else{
            view += '<option value='+i+'>'+i+'</option>';
        }
    }
    $('#age').append(view);
})


// 性別セット
$(function(){
    let view = `
        <option value="1">男性</option>
        <option value="2">女性</option>
        <option value="3">その他</option>
        <option value="4">無回答</option>
    `;
    $('#gender').append(view);
})


// メールアドレスのチェック
$(document).on('change', 'input[type="email"]', function(){
    let value = $(this).val();
    let mailcheck = value.match(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
    if(mailcheck == null){
        alert('メールアドレスの確認をお願いします。');
        $(this).css('border', 'solid 2px red');
        return;
    }
    $(this).css('border', 'solid 2px #32cd32');
})

// パスワード変数
let password;
let error;

// パスワードのチェック
$(document).on('change', 'input[name="password"]', function(){
    let value = $(this).val();
    let passcheck = value.match(/^[A-Za-z0-9]+$/);
    password = value;
    if(passcheck == null){
        alert('英数字のみ使用可能です');
        $(this).css('border', 'solid 2px red');
        error = 1;
        return;
    }
    if(value.length <8){
        alert('8文字以上で設定をお願いします');
        $(this).css('border', 'solid 2px red');
        error = 1;
        return;
    }
    error = 0;
    $(this).css('border', 'solid 2px #32cd32');
})

// パスワード確認用のチェック
$(document).on('change', 'input[name="passchecked"]', function(){
    let val = $(this).val();
    if(password == ''){
        alert('パスワードの入力をお願いします');
    }else if(password != val){
        alert('パスワードの入力に誤りがあります');
        $(this).css('border', 'solid 2px red');
        return;
    }
    $(this).css('border', 'solid 2px #32cd32');
})

// パスワード表示
$(document).on('click', '.describe', function(){
    $('.pass').css('display', 'block');
    $('.pass').text(password);
    if(error == 1){
        $('.pass').css('color', 'red');
    }else{
        $('.pass').css('color', 'black');
    }
})

