<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
</head>
<body>
    <h2>ユーザー登録フォーム</h2>
    <form method="POST" action="register_submit.php">
        <label>ユーザー名: <input type="text" name="username" required></label><br><br>
        <label>メールアドレス: <input type="email" name="email" required></label><br><br>
        <label>パスワード: <input type="password" name="password" required></label><br><br>
        <input type="submit" value="登録">
    </form>
</body>
</html>
