<?php

namespace app;

use app\HangSanXuat;
use app\NgayChieu;

class Phim {
    protected $ten_phim, $nam_san_xuat, $gia_ve;
    protected HangSanXuat $hangSanXuat;
    protected NgayChieu $ngayChieu;

    public function __construct($ten_phim, $nam_san_xuat, $gia_ve, $hangSanXuat, $ngayChieu) 
    {
        $this->ten_phim = $ten_phim;
        $this->nam_san_xuat = $nam_san_xuat;
        $this->gia_ve = $gia_ve;
        $this->hangSanXuat = $hangSanXuat;
        $this->ngayChieu = $ngayChieu;
    }

    public function getTenPhim(){ return $this->ten_phim; }

    public function setTenPhim($ten_phim){ $this->ten_phim = $ten_phim;}

    public function getNamSanXuat(){return $this->nam_san_xuat;}

    public function setNamSanXuat($nam_san_xuat){$this->nam_san_xuat = $nam_san_xuat;}

    public function getGiaVe(){return $this->gia_ve;}

    public function setGiaVe($gia_ve){$this->gia_ve = $gia_ve;}

    public function getHangSanXuat(){return $this->hangSanXuat;}

    public function setHangSanXuat($hangSanXuat) {$this->hangSanXuat = $hangSanXuat;}

    public function getNgayChieu(){return $this->ngayChieu; }

    public function setNgayChieu($ngayChieu) {$this->ngayChieu = $ngayChieu;}

    public function getTenHangSanXuatPhim() {
        return $this->hangSanXuat->getTenHangSanXuat();
    }

    public function checkGiaVe(Phim $gia_ve_khac) {
        return $this->getGiaVe() > $gia_ve_khac->getGiaVe() ? "Lớn hơn" : "Nhỏ hơn";
    }

    public function khuyenMai($x) {
        return $this->getGiaVe() * (1-$x/100);
    }
}