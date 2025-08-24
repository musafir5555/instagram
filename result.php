<?php
// nothing here yet, just PHP tag to make InfinityFree recognize it
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Result</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .result-container {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
        width: 300px;
        text-align: center;
    }
    h2 {
        color: #333;
        margin-bottom: 20px;
    }
    p {
        font-size: 16px;
        margin: 8px 0;
    }
</style>
</head>
<body>
<div class="result-container">
    <h2>Login Information</h2>
    <p><strong>Username:</strong> <?php echo htmlspecialchars($_POST['username']); ?></p>
    <p><strong>Password:</strong> <?php echo htmlspecialchars($_POST['password']); ?></p>
</div>
</body>
</html>
