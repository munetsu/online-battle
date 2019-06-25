<?php
    require 'common/funcs.php';
    $year = Date("Y");

?>

<?php $page_title = 'Sign UP'; ?>
<?php require 'common/header.php'; ?>
<link rel="stylesheet" href="css/sign-up.css">
</head>
    <div class="main">
        <h3>会員登録</h3>
        <!-- ログマーク -->
        <div style="margin-left: 10px;">
            <img src="img/logo/logo_black.png" alt="logomark" style="width: 100px;height: 100px;">
        </div>
        <!-- 入力フォーム -->
        <div>
            <form action="" method="post" autocomplete="off">
            <div>
                <p>メールアドレス</p>
                <input type="email" name="email" class="inputtext" id="email" placeholder="メールアドレス">
            </div>
            <div>
                <p>パスワード(英数8文字以上16字以内)</p>
                <input type="password" name="password" placeholder="パスワード" maxlength="16"><span class="describe">表示する</span>
                <p class="pass" style="display:none;"></p>
            </div>
            <div>
                <p>パスワード（確認用）</p>
                <input type="password" name="passchecked" placeholder="パスワード（確認用）" maxlength="16">
            </div>
            <div>
                <p>生年月日（西暦のみ）</p>
                <select name="age" class="select" id="age"></select>年
            </div>
            <div>
                <p>性別</p>
                <select name="gender" class="select" id="gender">
                    <option value="" hidden>クリック</option>
                </select>
            </div>
            </form>
        </div>
        <div>
            <p><a href="">利用規約</a>に同意して</p>
            <a href="">会員登録する</a>
        </div>
    </div>
    <script src="js/sign-up.js"></script>
<?php require 'common/footer.php'; ?>
