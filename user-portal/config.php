<?php
// データベース設定
$host = 'localhost';
$dbname = 'db_sys_user_mgmt';
$username = 'root';           // XAMPP初期設定なら root
$password = '';               // パスワード未設定（必要ならここに設定）
$charset = 'utf8mb4';

// DSN（データソース名）設定
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// PDOオプション設定
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // エラー時に例外を投げる
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // 配列の形式を設定
    PDO::ATTR_EMULATE_PREPARES   => false,                  // プリペアドステートメントをネイティブで
];

// 接続処理
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    exit('データベース接続失敗: ' . htmlspecialchars($e->getMessage()));
}
?>
