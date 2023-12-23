<!DOCTYPE html>
<html>
<head>
    <title>日本櫻花季</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-image: url('japan/index.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
            animation: fadeInEffect 2s ease-in-out;
        }
        @keyframes fadeInEffect {
            from { filter: brightness(50%); }
            to { filter: brightness(100%); }
        }
        .header-content {
            position: relative;
            z-index: 2;
        }
        .header h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .header p {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .enter-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-decoration: none;
            font-size: 18px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .enter-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="header" id="header">
    <div class="header-content">
        <h1>日本櫻花季</h1>
        <p>自由行旅客不可不知的日本櫻花季全攻略</p>
        <button class="enter-button" id="enterButton">進入頁面</button>
    </div>
</div>

<script>
    document.getElementById("enterButton").onclick = function () {
        location.href = "1.html"; // 導航到子頁1
    };
</script>

</body>
</html>
