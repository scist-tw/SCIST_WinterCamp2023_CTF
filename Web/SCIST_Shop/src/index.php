<?php
session_start();
if (!isset($_SESSION['money'])) {
    $_SESSION['money'] = 0;
}
?>
<!DOCTYPE html>
<html data-background="secondary">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.1.0/tocas.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.1.0/tocas.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet" />
        <title>SCIST 購物商城</title>
    </head>
    <body>
        <div class="ts-content is-vertically-padded is-tertiary">
            <div class="ts-container">
                <div class="ts-row">
                    <div class="column is-fluid">
                        <div class="ts-wrap">
                            <a class="ts-text is-undecorated" href="/">SCIST 購物商城</a>
                            <a class="ts-text is-undecorated" href="https://scist.org/">SCIST</a>
                            <a class="ts-text is-undecorated" href="https://www.facebook.com/scist.tw">Facebook</a>
                            <a class="ts-text is-undecorated" href="https://www.instagram.com/scist.tw/">Instagram</a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ts-wrap">
                            <a class="ts-text is-undecorated" href="earn.php">去賺錢</a>
                            <a class="ts-text is-undecorated" href="#!">目前 <span><?php echo $_SESSION['money'] ?></span> 元</a>
                        </div>
                    </div>
                </div>
                <div class="ts-space is-big"></div>
                <div class="ts-row is-relaxed">
                    <div class="column">
                        <div class="ts-header is-big is-heavy">SCIST 購物商城</div>
                    </div>
                </div>
                <div class="ts-space is-large"></div>
            </div>
        </div>
        <div class="ts-divider"></div>
        <div class="ts-space is-big"></div>
        <form action="buy.php" method="post" id="myform">
            <input type="hidden" name="id" id="cart" value="0" />
            <input type="hidden" name="money" id="money" value="<?php echo $_SESSION['money'] ?>" />
        </form>
        <div class="ts-container">
            <div class="ts-header is-large is-heavy">點擊一下購買</div>
            <div class="ts-space"></div>
            <div class="ts-grid is-4-columns">
                <div class="column is-truncated" onclick="buy1()">
                    <div class="ts-box">
                        <div class="ts-image">
                            <img src="1-1.png" />
                        </div>
                        <div class="ts-content">
                            <a class="ts-text is-truncated is-bold">BLACKWIDOW V3 PRO 黑寡婦蜘幻彩版V3 Pro 電競鍵盤</a>
                            <span class="ts-text is-deleted is-secondary">$7,290</span> <span class="ts-text">$5,488</span>
                        </div>
                        <div class="ts-divider"></div>
                        <div class="ts-content">
                            <div class="ts-row">
                                <div class="column is-fluid">
                                    <span class="ts-icon is-heart-icon is-end-spaced"></span>
                                    32
                                </div>
                                <div class="column">
                                    <div class="ts-wrap is-compact">
                                        <div class="ts-rating is-yellow">
                                            <div class="star is-active"></div>
                                            <div class="star is-active"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div>(32)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-truncated" onclick="buy2()">
                    <div class="ts-box">
                        <div class="ts-image">
                            <img src="1-1.png" />
                        </div>
                        <div class="ts-content">
                            <div class="ts-text is-truncated is-bold">HP 惠普 超品 14s 極地白 14吋 IPS面板 N6000 4GB 256GB W11 筆電</div>
                            <span class="ts-text is-deleted is-secondary">$16,900</span> <span class="ts-text">$12,900</span>
                        </div>
                        <div class="ts-divider"></div>
                        <div class="ts-content">
                            <div class="ts-row">
                                <div class="column is-fluid">
                                    <span class="ts-icon is-heart-icon is-end-spaced"></span>
                                    184
                                </div>
                                <div class="column">
                                    <div class="ts-wrap is-compact">
                                        <div class="ts-rating is-yellow">
                                            <div class="star is-active"></div>
                                            <div class="star is-active"></div>
                                            <div class="star is-active"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div>(14)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-truncated" onclick="buy3()">
                    <div class="ts-box">
                        <div class="ts-image">
                            <img src="1-1.png" />
                        </div>
                        <div class="ts-content">
                            <div class="ts-text is-truncated is-bold">Acer 宏碁 Swift 3 SF314-511-513K 銀 SF314 511 513K</div>
                            <span class="ts-text is-deleted is-secondary">$34,900</span> <span class="ts-text">$27,900</span>
                        </div>
                        <div class="ts-divider"></div>
                        <div class="ts-content">
                            <div class="ts-row">
                                <div class="column is-fluid">
                                    <span class="ts-icon is-heart-icon is-end-spaced"></span>
                                    81
                                </div>
                                <div class="column">
                                    <div class="ts-wrap is-compact">
                                        <div class="ts-rating is-yellow">
                                            <div class="star is-active"></div>
                                            <div class="star is-active"></div>
                                            <div class="star is-active"></div>
                                            <div class="star is-active is-half"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div>(73)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-truncated" onclick="buy4()">
                    <div class="ts-box">
                        <div class="ts-image">
                            <img src="1-1.png" />
                        </div>
                        <div class="ts-content">
                            <div class="ts-text is-truncated is-bold">FLAG</div>
                            <span class="ts-text is-deleted is-secondary">$2,147,483,648</span> <span class="ts-text">$1,000,000,000</span>
                        </div>
                        <div class="ts-divider"></div>
                        <div class="ts-content">
                            <div class="ts-row">
                                <div class="column is-fluid">
                                    <span class="ts-icon is-heart-icon is-end-spaced"></span>
                                    0
                                </div>
                                <div class="column">
                                    <div class="ts-wrap is-compact">
                                        <div class="ts-rating is-yellow">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div>(0)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts-space is-big"></div>
            <div class="ts-wrap is-center-aligned">
                <button class="ts-button is-circular" onclick="more();">查看更多</button>
            </div>
            <script>
                function more() {
                    alert("沒有東西啦！");
                }
                function buy1() {
                    if (confirm("確定購買？")) {
                        document.getElementById('cart').value = 1;
                        document.getElementById('myform').submit();
                    }
                }
                function buy2() {
                    if (confirm("確定購買？")) {
                        document.getElementById('cart').value = 2;
                        document.getElementById('myform').submit();
                    }
                }
                function buy3() {
                    if (confirm("確定購買？")) {
                        document.getElementById('cart').value = 3;
                        document.getElementById('myform').submit();
                    }
                }
                function buy4() {
                    if (confirm("確定購買？")) {
                        document.getElementById('cart').value = 4;
                        document.getElementById('myform').submit();
                    }
                }
            </script>
            <div class="ts-space is-big"></div>
            <div class="ts-text is-bold">神奇購物網站必定會成為未來世界的新標準！</div>
            <div class="ts-space"></div>
            <div class="ts-text is-description">
                不要先入為主覺得神奇購物網站很複雜，實際上，神奇購物網站可能比你想的還要更複雜。總而言之，加里寧在過去曾經講過，決不要把他們教育成悶悶不樂，過早就想變為成年的人。這句話改變了我的人生。做好神奇購物網站這件事，可以說已經成為了全民運動。要想清楚，神奇購物網站，到底是一種怎麼樣的存在。我們普遍認為，若能理解透徹核心原理，對其就有了一定的了解程度。其實，若思緒夠清晰，那麼神奇購物網站也就不那麼複雜了。謹慎地來說，我們必須考慮到所有可能。
            </div>
            <div class="ts-space is-large"></div>
            <div class="ts-text is-bold">如果仔細思考神奇購物網站，會發現其中蘊含的深遠意義。</div>
            <div class="ts-space"></div>
            <div class="ts-text is-description">
                神奇購物網站的出現仍然代表了一定的意義。透過逆向歸納，得以用最佳的策略去分析神奇購物網站。神奇購物網站對我來說，已經成為了我生活的一部分。伏契克說過一句很有意思的話，忠實於理想——這是崇高而又有力的一種感情，這種感情和最殘酷的壓迫相對抗，這種感情甚至在危急萬分的時刻也仍存於人的心中。這句話讓我們得到了一個全新的觀點去思考這個問題。
            </div>
            <div class="ts-space is-large"></div>
            <div class="ts-text is-bold">神奇購物網站的出現仍然代表了一定的意義。</div>
            <div class="ts-space"></div>
            <div class="ts-text is-description">
                若無法徹底理解神奇購物網站，恐怕會是人類的一大遺憾。一般來講，我們都必須務必慎重的考慮考慮。愛德華茲曾經認為，小罪導致大罪，一個罪導致無數的罪。這句話讓我們得到了一個全新的觀點去思考這個問題。總結來說，神奇購物網站絕對是史無前例的。這樣看來，老舊的想法已經過時了。若能夠欣賞到神奇購物網站的美，相信我們一定會對神奇購物網站改觀。在這種不可避免的衝突下，我們必須解決這個問題。不難發現，問題在於該用什麼標準來做決定呢？
            </div>
            <div class="ts-space is-big"></div>
            <div class="ts-divider"></div>
            <div class="ts-space is-big"></div>
            <div class="ts-grid is-4-columns">
                <div class="column">
                    <div class="ts-header is-big">
                        <span class="ts-icon is-face-smile-icon"></span>
                    </div>
                    <div class="ts-text is-description">© 2021-2022</div>
                </div>
                <div class="column">
                    <div class="ts-header">客服中心</div>
                    <div class="ts-space is-small"></div>
                    <a class="ts-text is-secondary is-undecorated" href="#!">幫助中心</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">付款方式</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">運費補助</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">延長訂單撥款</a>
                </div>
                <div class="column">
                    <div class="ts-header">資源</div>
                    <div class="ts-space is-small"></div>
                    <a class="ts-text is-secondary is-undecorated" href="#!">舊版手冊</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">教學影片</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">可擴充 API</a>
                </div>
                <div class="column">
                    <div class="ts-header">關於</div>
                    <div class="ts-space is-small"></div>
                    <a class="ts-text is-secondary is-undecorated" href="#!">團隊</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">工作地點</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">隱私權政策</a><br />
                    <a class="ts-text is-secondary is-undecorated" href="#!">使用者規範</a>
                </div>
            </div>
            <div class="ts-space is-big"></div>
        </div>
    </body>
</html>
