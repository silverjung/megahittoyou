<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .popup-wrapper {
        position: fixed;
        z-index: 99999;
        display: flex;
        flex-wrap: nowrap;
        gap: 30px;
        left: 30px;
        top: 30px;
    }
    .popup {
        background-color: #656565;
    }
    img {
        border: 0;
    }
    .popup img {
        height: 54vh;
    }
    .popup .btns {
        width: 100%;
        padding: 8px 20px;
        background-color: #656565;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    .popup .btns > div {
        font-size: 12px;
        font-weight: normal;
        color: #fff;
        padding-left: 15px;
    }
    .popup .btns > div:hover {
        cursor: pointer;
        color: #fff;
        text-decoration: underline;
    }

    .popup .btns .todayQuit {
        position: absolute;
        left: 0;
    }
    @media screen and (max-width: 767px) {
        .popup-wrapper {
            position: fixed;
            z-index: 99999;
            top: 5vw;
            left: 50%;
            transform: translateX(-50%);
            flex-wrap: wrap;
        }
        .popup img {
            width: 88vw;
            height: auto;
        }
        .popup .btns {
            margin-top: -1.5vw;
        }
        .popup .btns > div {
            font-size: 12px;
            font-weight: normal;
            color: #fff;
            padding-left: 10px;
        }
    }
</style>

<div class="popup-wrapper">
    <div id="popup1" class="popup">
        <div class="imgbox">
            <img src="./img/popup_03.jpg" alt="수상작 발표">
        </div>
        <div class="btns">
            <div class="todayQuit">오늘 하루 그만보기</div>
            <div class="quit">X</div>
        </div>

            <script>
                function setCookie(name, value, expiredays) {
                    var todayDate = new Date();
                    todayDate.setDate(todayDate.getDate() + expiredays);
                    document.cookie = name + "=" + escape(value) + "; path=/; expires=" +
                            todayDate.toGMTString() + ";"
                }
                function getCookie(name) {
                    var cookiedata = document.cookie;
                    var popup1 = document.getElementById("popup1");
                    if (cookiedata.indexOf("todayCookie=done") < 0) {
                        popup1.style.display = "block";
                    } else {
                        popup1.remove();
                    }
                }
                getCookie();

                var $todayQuit = document.querySelector(".popup .todayQuit");
                $todayQuit.addEventListener("click", e => {
                    e.preventDefault();
                    setCookie("todayCookie", "done", 1);
                    $todayQuit
                        .parentNode
                        .parentNode
                        .remove();
                });

                var $quit = document.querySelector(".popup .quit");
                $quit.addEventListener("click", e => {
                    e.preventDefault();

                    $quit
                        .parentNode
                        .parentNode
                        .remove();

                    //onEvent(); javascript();

                });

                var $imgbox = document.querySelector(".popup .imgbox");
                $imgbox.addEventListener("click", e => {
                    e.preventDefault();

                    $imgbox.parentNode.parentNode.remove();

                    onEvent(); 
                    // javascript();

                });

                // https://i.imgur.com/Ex20DsD.png https://i.imgur.com/ZxeVDv7.png function
                // abcd(){        .popup img {width: 88vw; height: auto;}
                // opener.parent.location='이동할페이지?넘길변수=넘길값'; window.close(); }
                // function javascript(){
                // window.location.href="http://www.naver.com";                 팝업창에서 부모창을
                // 다른페이지로 이동합니다.
                // window.opener.location.href="http://www.naver.com";             }

                // @media screen and (max-width: 767px) { .popup-wrapper {         position:
                // fixed; z-index: 99999;         top : 5vw; left: 50%;         transform:
                // translateX(-50%);         flex-wrap: wrap;     }     .popup img {width: 88vw;
                // height: auto;}     .popup .btns {margin-top: -1.5vw;}     .popup .btns >div {
                // font-size: 12px; font-weight: normal; color: #fff; padding-left: 10px;     }
                // }
            </script>
        </div>
    </div>
