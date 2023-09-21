<?php

use app\Ngay;
use app\Sach;
use app\TacGia;

include "./vendor/autoload.php";

$date = new Ngay(13, 11, 2002);
$tacgia = new TacGia("Nguyễn Hoàng Duy Nhất", $date);
$sach1 = new Sach("Ngữ Văn", 1000, 2002, $tacgia);
$sach2 = new Sach("Toán Hình", 1000, 2002, $tacgia);

echo $sach1->getSach() . "<br/>";
echo "Sách 1 năm xuất bản có giống với sách 2: " . $sach1->getSachXuatBan($sach2) . "<br/>";
echo "Sách 1 sau khi giảm là: " . $sach1->giamGia(50);