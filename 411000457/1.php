<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 檢查是哪個表單被提交
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
            // 處理註冊表單
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            // 密碼處理
            $password = htmlspecialchars($_POST['password']);

            // 創建訊息
            $message = urlencode("註冊成功！\n歡迎, $username!\n您的電子郵件: $email");

            // 重定向回 HTML 頁面並附上訊息
            header("Location: 1.html?message=$message");
            exit;
        }

        elseif (isset($_POST['name']) && isset($_POST['message'])) {
            // 處理留言板表單
            $name = htmlspecialchars($_POST['name']);
            $messageContent = htmlspecialchars($_POST['message']);

            // 創建訊息
            $message = urlencode("留言已送出！\n$name: $messageContent");

            // 重定向回 HTML 頁面並附上訊息
            header("Location: 1.html?message=$message");
            exit;
        }
    }
?>
