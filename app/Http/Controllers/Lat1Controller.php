<?php

namespace App\Http\Controllers;

class Lat1Controller extends Controller
{
    public function index() {
        $data['nama'] = 'Marsep';
        $data['asal'] = 'Timika';
        return view('v_latihan1', $data);
    }

    public function method2() {
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array('nama' => "Marsep", "asal" => "Timika"),
            array('nama' => "Rizky", "asal" => "Jakarta"),
            array('nama' => "Dimas", "asal" => "Bandung")
        );
        return view('v_latihan2', $data);
    }
}
