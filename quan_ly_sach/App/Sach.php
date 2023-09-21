<?php

namespace app;

class Sach {
    protected $ten_sach, $gia_ban, $nam_xuat_ban;
    protected TacGia $tac_gia;

    public function __construct($ten_sach, $gia_ban, $nam_xuat_ban) {
        $this->ten_sach = $ten_sach;
        $this->gia_ban = $gia_ban;
        $this->nam_xuat_ban = $nam_xuat_ban;
    }

    public function getSach() {
        return $this->ten_sach;
    }

    public function setSach($ten_sach) {
        $this->ten_sach = $ten_sach;
    }

    public function getGiaBan() {
        return $this->gia_ban;
    }

    public function setGiaBan($gia_ban) {
        $this->gia_ban = $gia_ban;
    }

    public function getNamXuatBan() {
        return $this->nam_xuat_ban;
    }

    public function setNamXuatBan($nam_xuat_ban) {
        $this->nam_xuat_ban = $nam_xuat_ban;
    }

    public function getSachXuatBan(Sach $sach_khac) {
        return $this->getNamXuatBan() == $sach_khac->getNamXuatBan() ? "Giống nhau" : "Không giống nhau";
    }

    public function giamGia($x) {
        return $this->getGiaBan() * (1-$x/100);
    }
}