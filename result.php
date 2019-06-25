<?php $page_title = '今大会の結果'; ?>
<?php require 'common/header.php'; ?>
<link rel="stylesheet" href="css/result.css">
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

    // 日付取得
    $year = Date('Y');
    $month = Date('m');
    $date = Date('d');
?>

<div>
    <!-- top -->
    <?=$top; ?>
    <!-- menu  -->
    <?=$menu; ?>

    <!-- main -->
    <div id="main">
        <div class="searcharea">
            <select class="select"></select>
            <i class="fas fa-search fa-2x"></i>
        </div>
        <div class="resultarea">
            <div class="resultlisthead">
                <div class="datearea list head">
                    <p>日付</p>
                </div>
                <div class="list entertainerarea head">
                    <p>東</p>
                </div>
                <div class="list entertainerarea head">
                    <p>西</p>
                </div>
            </div>
            <div class="resultlist">
                <div class="result">
                    <div class="datearea list">
                        <p><?=$month;?>/<?=$date;?></p>
                    </div>
                    <div class="east list entertainerarea">
                        <div>
                            <img src="img/test/test1.jpg" alt="entertainer" class="resultpic">
                        </div>
                        <div>
                            <p>A芸人</p>
                        </div>
                    </div>
                    <div class="west list entertainerarea">
                        <div>
                            <img src="img/test/test2.jpg" alt="entertainer" class="resultpic">
                        </div>
                        <div>
                            <p>B芸人</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>
<script src="js/result.js"></script>
<?php require 'common/footer.php'; ?>