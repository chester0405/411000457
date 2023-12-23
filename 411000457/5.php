<?php
    $students = [
        [
            'class' => '資圖二A', 
            'id' => '411000457', 
            'name' => '林俞雁', 
            'feedback' => '程式設計課程讓我學習到很多網頁建構的知識，以及實作時修正發生的問題。在時代的變遷之下，資圖系也不再是刻板印象中，只能擔任圖書館人員，而我所吸收的這些將來都能成為工作上加分的技能。'
        ]
        
    ];

    $sitemap = array(
        "首頁" => "index.php",
        "櫻花祭" => "1.html",
        "賞花地點" => "2.html",
        "賞花住宿" => "3.php",
        "賞花機票" => "4.php",
        "個人頁面" => "5.php",
    );
?>

<!DOCTYPE html>
    <html lang="zh-Hant-TW">
        <head>
            <meta charset="UTF-8">
            <title>個人頁面</title>
            <link rel="stylesheet" href="5.css"> 
        </head>
        <body>
            <header>
                <div class="header-container">
                    <div class="logo-container">
                        <a href="1.html"><img src="japan/logo.png" alt="Logo"></a>
                    </div>
                </div>
            </header>
        </body>
        <body>
            <div class="student-container">
                <?php foreach ($students as $student): ?>
                    <div class="student-card">
                        <p> 
                            <strong>班級：</strong>
                            <?php echo $student['class']; ?>
                        </p>
                        <p>
                            <strong>學號：</strong>
                            <?php echo $student['id']; ?>
                        </p>
                        <p>
                            <strong>姓名：</strong>
                            <?php echo $student['name']; ?>
                        </p>
                        <p>
                            <strong>心得與建議：</strong><br>
                            <?php echo $student['feedback']; ?>
                        </p>
                    </div>
                    <?php endforeach; 
                ?>
            </div>

            <div class="site-map">
                        <h3>網站地圖</h3>
                        <ul>
                            <?php
                            foreach ($sitemap as $title => $url) {
                                echo "<li><a href='{$url}'>{$title}</a></li>";
                            }
                            ?>
                        </ul>
            </div>
            <footer>
                    <p class="copyright"><small>&copy; Copyright 411000457 </small></p>
            </footer>
        </body>
    </html>
