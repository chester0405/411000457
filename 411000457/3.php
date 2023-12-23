<?php
    $messageToDisplay = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && 
                    isset($_POST['hotel']) && isset($_POST['checkin_date']) && isset($_POST['checkout_date'])) {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $phone = htmlspecialchars($_POST['phone']);
                    $hotel = htmlspecialchars($_POST['hotel']);
                    $checkinDate = htmlspecialchars($_POST['checkin_date']);
                    $checkoutDate = htmlspecialchars($_POST['checkout_date']);
            
                    
                    $responseMessage = "聯絡表單提交成功！\n聯絡人姓名: $name\n聯絡Email: $email\n聯絡電話: $phone\n住宿飯店: $hotel\n住宿日期: 從 $checkinDate 到 $checkoutDate";
                    $encodedMessage = urlencode($responseMessage);
            
                
                    header("Location: 3.php?message=$encodedMessage");
                    exit;
                }
            }
            
        }
    }

    if (isset($_GET['message'])) {
        $messageToDisplay = urldecode($_GET['message']);
    }
?>

<!DOCTYPE html>
    <html lang="zh-Hant-TW">
        <head>
            <meta charset="utf-8">
            <title>日本賞櫻</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="日本賞櫻">
            <link rel="stylesheet" type="text/css" href="3.css">
        </head>
        <body>
            <header>
                <div class="header-container">
                    <div class="logo-container">
                        <a href="1.html"><img src="japan/logo.png" alt="Logo"></a>
                    </div>
                </div>
                <nav class="navigation">
                    <ul>
                        <li>
                            <a href="index.php">首頁</a>
                        </li>
                        <li>
                            <a href="1.html">櫻花祭</a>
                        </li>
                        <li class="navigation">
                            <a href="2.html">賞花地點</a> 
                        </li>
                        <li class="navigation">
                            <a href="3.php">賞花住宿</a> 
                        </li>
                        <li class="navigation">
                            <a href="4.php">賞花機票</a>
                        </li>
                        <li>
                            <a href="5.php">個人頁面</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="mainvisual">
                    <img src="japan/29.jpeg">
                </div>
                <div class="inner">
            </main>
            <form class="search-form" action="https://www.google.com/travel/search" method="GET">
                <input type="text" name="q" placeholder="住宿地點、飯店名稱">
                <input type="submit" value="搜尋">
            </form>  
            <main>
                <section>
                    <h3>日本賞櫻訂房</h3>
                    <div class="webimg-container">
                        <section class="webimg">
                            <img src="japan/13.jpeg" alt="" width="150" height="150"></a>
                            <h4>日本 奈良<br> 奈良廣場飯店</h4>
                            <ol>
                            <li>開車 10 分鐘即可抵達奈良公園</li>
                            <li>鄰近興福寺</li>
                            <li>鄰近奈良縣立文化會館</li>
                            </ol>
                            <a class="price">
                                $3,450   
                                <span>起</span>  
                            </a>                                                                              
                        </section>
                        
                        <section class="webimg">
                            <img src="japan/14.jpeg" alt="" width="150" height="150"></a>
                            <h4>日本 大阪<br> 大阪新大谷飯店</h4>
                            <ol>
                            <li> 走路 9 分鐘可以到大阪城展演廳</li>
                            <li>5 分鐘可以到大阪城</li>
                            <li>鄰近道頓堀固力果廣告牌</li>
                            </ol>
                            <a class="price">
                                $6,000   
                                <span>起</span>  
                            </a>       
                        </section>
                        
                        <section class="webimg">
                            <img src="japan/15.jpeg" alt="" width="150" height="150">
                            <h4>日本 大阪<br> 唐草飯店大阪難波</h4>
                            <ol>
                            <li>步行 3 分鐘即可抵達道頓堀</li>
                            <li>開車 5 分鐘可抵達大阪京瓷巨蛋</li>
                            <li>鄰近大阪城以及日本環球影城</li>
                            </ol>
                            <a class="price">
                                $6,900   
                                <span>起</span>  
                            </a>       
                        </section>

                        <section class="webimg">
                            <img src="japan/16.jpeg" alt="" width="150" height="150">
                            <h4>日本 東京<br> 新宿燦路都廣場大飯店</h4>
                            <ol>
                            <li>臨近新宿御苑且步行至JR新宿南口3分鐘。</li>
                            </ol>
                            <a class="price">
                                $6,900   
                                <span>起</span>  
                            </a>       
                        </section>

                    </div>
                </section>
                    
                <section>
                    <div class="webimg-container">
                        <section class="webimg">
                            <img src="japan/17.jpeg" alt="" width="150" height="150">
                            <h4>日本 京都<br> 京都和邸景觀高級飯店</h4>
                            <p class= center>
                                開車 5 分鐘就可以到二條城和河原町，鄰近錦市場以及八坂神社<br><br>
                                <a class="price">
                                    $7,950   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                        <section class="webimg">
                            <img src="japan/18.jpeg" alt="" width="150" height="150">
                            <h4>日本 東京<br> 東京椿山莊飯店</h4>
                            <p class= center>
                                5星級飯店，距離皇居東御苑和上野動物園不到 10 分鐘車程，鄰近明治神宮以及築地場外市場<br>
                                <a class="price">
                                    $13,800   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                        <section class="webimg">
                            <img src="japan/19.jpeg" alt="" width="150" height="150">
                            <h4>日本 東京<br>  東京雅敘園飯店</h4>
                            <p class= center>
                                5星級飯店，開車 10 分鐘即可抵達東京鐵塔和皇居，鄰近東京巨蛋以及東京晴空塔<br><br>
                                <a class="price">
                                    $29,900   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                        <section class="webimg">
                            <img src="japan/20.jpeg" alt="" width="150" height="150">
                            <h4>日本 大阪<br> 唐草飯店大阪難波</h4>
                            <p class= center>
                                步行 3 分鐘即可抵達道頓堀，開車 5 分鐘則可抵達大阪京瓷巨蛋，鄰近大阪城以及日本環球影城<br>
                                <a class="price">
                                    $6,900   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>
                    </div>    
                </section>

                <h2>聯絡我們/住宿諮詢表單</h2>

                <form action="3.php" method="post" class="form">
                    <label for="name">聯絡人姓名:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">聯絡Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">聯絡電話:</label>
                    <input type="phone" id="phone" name="phone" required><br><br>

                    <label for="hotel">住宿飯店:</label>
                    <select id="hotel" name="hotel" required>
                        <option value="">請選擇...</option>
                        <option value="日本奈良 奈良廣場飯店">日本奈良 奈良廣場飯店</option>
                        <option value="日本大阪 大阪新大谷飯店">日本大阪 大阪新大谷飯店</option>
                        <option value="日本大阪 唐草飯店大阪難波">日本大阪 唐草飯店大阪難波</option>
                        <option value="日本東京 新宿燦路都廣場大飯店">日本東京 新宿燦路都廣場大飯店</option>
                        <option value="日本京都 京都和邸景觀高級飯店">日本京都 京都和邸景觀高級飯店</option>
                        <option value="日本京都 京都嵐山平靜飯店">日本京都 京都嵐山平靜飯店</option>
                        <option value="日本東京 東京椿山莊飯店">日本東京 東京椿山莊飯店</option>
                        <option value="日本東京 東京雅敘園飯店">日本東京 東京雅敘園飯店</option>
                    </select><br><br>

                    <label for="checkin_date">住宿開始日期:</label>
                    <input type="date" id="checkin_date" name="checkin_date" required><br><br>

                    <label for="checkout_date">住宿结束日期:</label>
                    <input type="date" id="checkout_date" name="checkout_date" required><br><br>

                    <input type="submit" value="提交">
                </form>

            </main>
            <footer>
                <p class="pagetop"><a href="#top">▲回到本頁開頭</a></p>
                <p class="copyright"><small>&copy; Copyright 411000457 </small></p>
            </footer>

            <script>
                window.onload = function() {
                    const urlParams = new URLSearchParams(window.location.search);
                    const message = urlParams.get('message');
                    if (message) {
                        alert(decodeURIComponent(message));
                        window.location.search = '';
                    }
                };
            </script>
        </body>
    </html>




