<?php

namespace App\Controllers;

use App\Models\Model_latihan1;

class Latihan1 extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang.. Selamat belajar Web Programming'
        ];

        return view('view-latihan', $data);
    }

    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1();
        $hasil = $model->jumlah($n1, $n2);

        $data = [
            'nilai1' => $n1,
            'nilai2' => $n2,
            'hasil' => $hasil
        ];

        return view('view-latihan', $data);
    }
}