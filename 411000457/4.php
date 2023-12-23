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

                    if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0) {
                        $uploadedFileName = $_FILES['fileUpload']['name'];
                    }
            
                    
                    $responseMessage = "預訂機票表單提交成功！\n聯絡人姓名: $name\n聯絡Email: $email\n聯絡電話: $phone\n前往城市: $hotel\n出發日期:$checkinDate\n回程日期: $checkoutDate\n上傳文件: $uploadedFileName 成功\n一個工作日內會立即回覆您!!";
                    $encodedMessage = urlencode($responseMessage);
            
                    
                    header("Location: 4.php?message=$encodedMessage");
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
            <link rel="stylesheet" type="text/css" href="4.css">
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
                    <img src="japan/30.jpeg">
                </div>
                <div class="inner">
            </main>
            <form class="search-form" action="https://www.skyscanner.com.tw/" method="GET">
                <input type="text" name="q" placeholder="航班、城市、機場">
                <input type="submit" value="搜尋">
            </form>
            
            <main>
                <!-- 國際機票區塊 -->
                <section>
                    <h3>國際機票</h3>
                    <div class="webimg-container">
                        <section class="webimg">
                            <img src="japan/21.jpeg" alt="" width="150" height="150">
                            <h4>台北出發 / 東京</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240320,20240328&depAirportCode=TPE,TYO&arrAirportCode=TYO,TPE&tripType=RT&cms=xxxx&cmsPrice=0">
                                <p>
                                    即時機位查詢 / 航空公司、時段可自選。<br><br>
                                    <a class="price">
                                        $3,450   
                                        <span>起</span>  
                                    </a>       
                                </p>                                                                        
                            </a>
                        </section>
                        
                        <section class="webimg">
                            <img src="japan/22.jpeg" alt="" width="150" height="150"></a>
                            <h4>台北出發 / 大阪</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240320,20240328&depAirportCode=TPE,KIX&arrAirportCode=KIX,TPE&tripType=RT&cms=xxxx&cmsPrice=0">
                            <p>
                                即時機位查詢 / 航空公司、時段可自選。<br><br>
                                <a class="price">
                                    $6,000   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>
                        
                        <section class="webimg">
                            <img src="japan/23.jpeg" alt="" width="150" height="150">
                            <h4>台北出發 / 福岡</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240420,20240428&depAirportCode=TPE,FUK&arrAirportCode=FUK,TPE&tripType=RT&cms=xxxx&cmsPrice=0">
                            <p class= center>
                                即時機位查詢 / 航空公司、時段可自選。<br><br>
                                <a class="price">
                                    $6,900   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                        <section class="webimg">
                            <img src="japan/24.jpeg" alt="" width="150" height="150">
                            <h4>台北出發 / 沖繩</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240420,20240428&depAirportCode=TPE,OKA&arrAirportCode=OKA,TPE&tripType=RT&cms=xxxx&cmsPrice=0">
                            <p>
                                即時機位查詢 / 航空公司、時段可自選。<br><br>
                                <a class="price">
                                    $6,900   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                    </div>
                </section>
                    
                <section>
                    <div class="webimg-container">
                        <section class="webimg">
                            <img src="japan/25.jpeg" alt="" width="150" height="150">
                            <h4>台北出發 / 札幌</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240420,20240428&depAirportCode=TPE,CTS&arrAirportCode=CTS,TPE&tripType=RT&cms=xxxx&cmsPrice=0">
                            <p class= center>
                                即時機位查詢 / 航空公司、時段可自選。<br><br>
                                <a class="price">
                                    $7,950   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                        <section class="webimg">
                            <img src="japan/26.jpeg" alt="" width="150" height="150">
                            <h4>台北出發 / 名古屋</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240320,20240328&depAirportCode=TPE,NGO&arrAirportCode=NGO,TPE&tripType=RT&cms=xxxx&cmsPrice=0">
                            <p class= center>
                                即時機位查詢 / 航空公司、時段可自選。<br><br>
                                <a class="price">
                                    $13,800   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                        <section class="webimg">
                            <img src="japan/27.jpeg" alt="" width="150" height="150">
                            <h4>高雄出發 / 東京</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240309,20240312&depAirportCode=KHH,NRT&arrAirportCode=NRT,KHH&tripType=RT&cms=xxxx&cmsPrice=0">
                            <p class= center>
                                即時機位查詢 / 航空公司、時段可自選。<br><br>
                                <a class="price">
                                    $29,900   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>

                        <section class="webimg">
                            <img src="japan/28.jpeg" alt="" width="150" height="150">
                            <h4>高雄出發 / 大阪</h4>
                            <a href="https://flight.settour.com.tw/availableSearch?pfpClass=&adtCount=1&chdCount=0&directFlightOnly=true&depDate=20240320,20240328&depAirportCode=KHH,KIX&arrAirportCode=KIX,KHH&tripType=RT&cms=xxxx&cmsPrice=0">
                            <p class= center>
                                即時機位查詢 / 航空公司、時段可自選。<br><br>
                                <a class="price">
                                    $6,900   
                                    <span>起</span>  
                                </a>       
                            </p>   
                            </a>
                        </section>
                    </div>    
                </section>

                <h2>線上預訂機票表單</h2>

                <form action="4.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="name">聯絡人姓名:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">聯絡Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">聯絡電話:</label>
                    <input type="phone" id="phone" name="phone" required><br><br>

                    <label for="hotel">前往城市:</label>
                    <select id="hotel" name="hotel" required>
                        <option value="">請選擇...</option>
                        <option value="台北出發 / 東京">台北出發 / 東京</option>
                        <option value="台北出發 / 大阪">台北出發 / 大阪</option>
                        <option value="台北出發 / 福岡">台北出發 / 福岡</option>
                        <option value="台北出發 / 東京">台北出發 / 東京</option>
                        <option value="台北出發 / 沖繩">台北出發 / 沖繩</option>
                        <option value="台北出發 / 札幌">台北出發 / 札幌</option>
                        <option value="高雄出發 / 東京">高雄出發 / 東京</option>
                        <option value="高雄出發 / 大阪">高雄出發 / 大阪</option>
                    </select><br><br>

                    <label for="checkin_date">出發日期:</label>
                    <input type="date" id="checkin_date" name="checkin_date" required><br><br>

                    <label for="checkout_date">回程日期:</label>
                    <input type="date" id="checkout_date" name="checkout_date" required><br><br>

                    <label for="fileUpload">搭機資料文件上傳（姓名 / 護照號碼 / 電話）:</label>
                    <input type="file" id="fileUpload" name="fileUpload"><br><br>
                    

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




