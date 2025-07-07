<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer のファイルを読み込む
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

// インスタンス作成
$mail = new PHPMailer(true);

try {
    // SMTP 設定
    $mail->isSMTP();
    $mail->Host       = 'smtp.example.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your-email@example.com';
    $mail->Password   = 'your-password';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // 送信元と宛先
    $mail->setFrom('your-email@example.com', 'Your Name');
    $mail->addAddress('to@example.com', 'Recipient Name');

    // メール内容
    $mail->isHTML(true);
    $mail->Subject = 'テストメール';
    $mail->Body    = 'これは <b>テスト</b> メールです';

    $mail->send();
    echo 'メールが送信されました。';
} catch (Exception $e) {
    echo "メール送信に失敗しました: {$mail->ErrorInfo}";
}
