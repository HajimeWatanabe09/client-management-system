<?php
require 'config.php';

// データ取得
$stmt = $pdo->query("SELECT id, username, email, created_at, is_active FROM users_master ORDER BY id DESC");
$users = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー一覧</title>
</head>
<body>
    <h2>登録済みユーザー</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ユーザー名</th>
            <th>メール</th>
            <th>登録日時</th>
            <th>状態</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['created_at']) ?></td>
            <td><?= $user['is_active'] ? '有効' : '無効' ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="register.php">新規ユーザー登録</a>
</body>
</html>
