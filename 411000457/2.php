<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['city'])) {
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);
            $city = htmlspecialchars($_POST['city']);

            $message = "抽獎活動提交成功！\n姓名: $name\n電話: $phone\n選擇的城市: $city";
            $encodedMessage = urlencode($message);

            header("Location: 2.html?message=$encodedMessage");
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['startGame'])) {
            $activities = ["北海道", "關東", "九州"];
            $selectedActivity = $activities[array_rand($activities)];
            
            $html = "<div style='text-align:center; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f3f3f3; margin: 10px;'>";
            $html .= "<h2>恭喜你！</h2>";
            $html .= "<p>抽到的地點為：<strong>$selectedActivity</strong></p>";
            $html .= "</div>";

            echo $html;
            exit;
            
        }
    }
?>
