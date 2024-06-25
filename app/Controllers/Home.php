<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    protected $product;
    function __construct()
    {
        $this->product = new ProductModel();
    }

    public function index(): string
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home', $data);
        //Untuk menggunakan ProductModel perlu menambahkan use App\Models\ProductModel; di bagian awal controller.
        //Lalu pada __construct buat dulu objek baru dengan $this->product = new ProductModel();
        //Untuk mengambil semua data dari table product, pada index bisa menggunakan findAll() yang tersimpan pada variable $product lalu ditampung dalam variable array $data.
        //Terakhir, semua isi variable array $data diparsing ke view v_home untuk ditampilkan.
    }

    public function faq()
    {
        return view('v_faq');
    }

    public function profile()
    {
        return view('v_profile');
    }

    public function contact()
    {
        return view('v_contact');
    }
}
