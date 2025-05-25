<?php
require 'config.php';

// フォームから送られた値を受け取る
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// バリデーション（簡易）
if (empty($username) || empty($email) || empty($password)) {
    exit('すべての項目を入力してください。');
}

// パスワードをハッシュ化
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQLを準備・実行
try {
    $stmt = $pdo->prepare("INSERT INTO users_master (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashed_password]);
    header("Location: list.php"); // 登録後は一覧ページへ遷移
    exit;
} catch (PDOException $e) {
    echo "登録エラー: " . $e->getMessage();
}
?>
