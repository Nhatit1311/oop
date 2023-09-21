<?php

namespace app;

class TacGia {
    private $ten_tac_gia;
    private Ngay $date;

    public function __construct($ten_tac_gia, $date) {
        $this->ten_tac_gia = $ten_tac_gia;
        $this->date = $date;
    }

    public function getTenTacGia() {
        return $this->ten_tac_gia;
    }

    public function setTenTacGia($ten_tac_gia) {
        $this->ten_tac_gia = $ten_tac_gia;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }
}