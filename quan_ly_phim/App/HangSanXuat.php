<?php

namespace app;

class HangSanXuat {
    private $ten_hang_san_xuat, $quoc_gia;

    public function __construct($ten_hang_san_xuat, $quoc_gia) 
    {
        $this->ten_hang_san_xuat = $ten_hang_san_xuat;
        $this->quoc_gia = $quoc_gia;
    }

    public function getTenHangSanXuat() 
    {
        return $this->ten_hang_san_xuat;
    }

    public function setTenHangSanXuat($ten_hang_san_xuat)
    {
        $this->ten_hang_san_xuat = $ten_hang_san_xuat;
    }

    public function getQuocGia() 
    {
        return $this->quoc_gia;
    }

    public function setQuocGia($quoc_gia) 
    {
        $this->quoc_gia = $quoc_gia;
    }
}