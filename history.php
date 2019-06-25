<?php $page_title = '今大会の結果'; ?>
<?php require 'common/header.php'; ?>
<link rel="stylesheet" href="css/history.css">
</head>

<?php
    session_start();
    require 'common/funcs.php';

    // viewを読み込み
    include('common/view.php');
    $view = new VIEW;
    // top部分
    $top = $view->notloginTop();
    // menu部分
    $menu = $view->menulist();
?>

<div>
    <!-- top -->
    <?=$top; ?>
    <!-- menu  -->
    <?=$menu; ?>
    <!-- main -->
    <div id="main">
        <!-- タイトル -->
        <ul class="thread head">
            <li class="date head flex_item selected">
                <p>開催月</p>
            </li>
            <li class="theme head flex_item">
                <p>テーマ</p>
            </li>
            <li class="victory head flex_item">
                <p>王者</p>
            </li>
            <li class="finalcontent head flex_item">
                <p>決勝ネタ</p>
            </li>
        </ul>

        <!-- body -->
        <div class="bodyarea">
            

        </div>
    </div>
</div>
<script src="js/history.js"></script>
<?php require 'common/footer.php'; ?>