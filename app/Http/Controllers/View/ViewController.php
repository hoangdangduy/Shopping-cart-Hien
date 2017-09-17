<?php

namespace App\Http\Controllers\View;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ViewController extends Controller
{
    public function viewHome() {
        return view('home');
    }

    public function viewProduct() {
        return view('product');
    }

    public function viewService() {
        return view('service');
    }

    public function viewNews() {
        return view('news');
    }

    public function viewContact() {
        return view('contact');
    }

    public function viewLogin() {
        return view('login');
    }

    public function viewRegister() {
        return view('register');
    }
}
