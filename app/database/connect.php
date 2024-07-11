<?php

$user = "root";
$pass = "root";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "DBとの接続に成功しました"; // DB接続成功メッセージ
} catch (PDOException $error) {
    echo "接続エラー: " . $error->getMessage(); // エラーメッセージを改善
}
?>
