<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $title = "Belajar Laravel asik deh";
        return view('belajar', compact('title'));
    }


    public function tambah(){
        $title = "Tambah-tambahan";
        return view('tambah', compact('title'));
        }
    public function actionTambah(Request $request){
        $title = "tambah-tambahan";
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah', 'title'));
    }


    public function kurang(){
        $title = "Pengurangan";
        return view('kurang', compact('title'));
    }
     public function actionKurang(Request $request){
        $title = "pengurangan";
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $jumlah = $angka1 - $angka2;
        return view('kurang', compact('jumlah', 'title'));
    }


    public function kali(){
        $title = "Perkalian";
        return view('kali', compact('title'));
    }
     public function actionKali(Request $request){
        $title = "perkalian";
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $jumlah = $angka1 * $angka2;
        return view('kali', compact('jumlah', 'title'));
    }


    public function bagi(){
        $title = "Pembagian";
        return view('bagi', compact('title'));
    }
     public function actionBagi(Request $request){
        $title = "pembagian";
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $jumlah = $angka1 / $angka2;
        return view('bagi', compact('jumlah', 'title'));
    }
}
