<?php
require_once("../db_connect_bark_bijou.php");

$phone_numbers = [
'0910123456', '0911234567', '0912345678', '0913456789', '0914567890',
'0915678901', '0916789012', '0917890123', '0918901234', '0919012345',
'0920123456', '0921234567', '0922345678', '0923456789', '0924567890',
'0925678901', '0926789012', '0927890123', '0928901234', '0929012345',
'0930123456', '0931234567', '0932345678', '0933456789', '0934567890',
'0935678901', '0936789012', '0937890123', '0938901234', '0939012345',
'0940123456', '0941234567', '0942345678', '0943456789', '0944567890',
'0945678901', '0946789012', '0947890123', '0948901234', '0949012345',
'0950123456', '0951234567', '0952345678', '0953456789', '0954567890',
'0955678901', '0956789012', '0957890123', '0958901234', '0959012345',
'0960123456', '0961234567', '0962345678', '0963456789', '0964567890',
'0965678901', '0966789012', '0967890123', '0968901234', '0969012345',
'0970123456', '0971234567', '0972345678', '0973456789', '0974567890',
'0975678901', '0976789012', '0977890123', '0978901234', '0979012345',
'0980123456', '0981234567', '0982345678', '0983456789', '0984567890',
'0985678901', '0986789012', '0987890123', '0988901234', '0989012345',
'0990123456', '0991234567', '0992345678', '0993456789', '0994567890',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
'0995678901', '0996789012', '0997890123', '0998901234', '0999012345',
];

// 假設您的用戶 ID 是按順序排列的
foreach ($phone_numbers as $index => $phone) {
    $user_id = $index + 1; // 假設 ID 從 1 開始

    // 準備 SQL 更新語句
    $sql = "UPDATE users SET phone = ? WHERE id = ?";

    // 使用預處理語句來防止 SQL 注入
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $phone, $user_id);

    // 執行更新
    $stmt->execute();
}

// 關閉連接
$stmt->close();
$conn->close();

echo "已更新所有使用者的手機號碼！";
