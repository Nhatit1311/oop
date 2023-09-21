<?php

use app\NgayChieu;
use app\HangSanXuat;
use app\Phim;

require "./vendor/autoload.php";

$ngay_chieu = new NgayChieu(13, 11, 2002);
$hang_San_Xuat = new HangSanXuat("Hãng A", "Việt Nam");
$phim1 = new Phim("Bố Già", 2021, 2000, $hang_San_Xuat, $ngay_chieu);
$phim2 = new Phim("Nhà Bà Nữ", 2021, 3000, $hang_San_Xuat, $ngay_chieu);

echo "Tên hãng sản xuất phim: " . $phim1->getTenHangSanXuatPhim() . "<br/>";
echo "Giá vé của phim " . $phim1->getTenPhim() . " so với giá vé phim " 
    . $phim2->getTenPhim() . " " . $phim1->checkGiaVe($phim2) . "<br/>";

echo "Giá khuyến mãi của phim " . $phim2->getTenPhim() . " là " . $phim2->khuyenMai(50);