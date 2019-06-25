<?php
    class VIEW{
        function __construct(){
        }

        /////////////////////////////////
        // top部分（未ログイン）
        /////////////////////////////////
        public function notloginTop(){
            $view = '
                <div>
                    <div class="logoarea">
                        <a href="#"><img src="img/logo/logo.png" alt="logo"></a>
                    </div>
                    <div>
                        <ul class="loginarea">
                            <li class="loginlist login"><a href="" class="textwhite">ログイン</a></li>
                            <li class="loginlist sign-up"><a href="sign-up" class="textwhite">会員登録</a></li>
                        </ul>
                    </div>
                </div>
            ';
            echo $view;
        }

        /////////////////////////////////
        // menu部分
        /////////////////////////////////
        public function menulist(){
            $view = '
                <ul class="menu">
                    <li id="menu1" class="menulist"><a href="result" id="result">今大会の結果</a></li>
                    <li id="menu2" class="menulist"><a href="" id="yesterday">前日の結果</a></li>
                    <li id="menu3" class="menulist"><a href="" id="today">本日のカード</a></li>
                    <li id="menu4" class="menulist"><a href="history" id="history">過去大会</a></li>
                    <li id="menu5" class="menulist"><a href="" id="entertainerlist">芸人一覧</a></li>
                </ul>
            ';
            echo $view;
        }




    }