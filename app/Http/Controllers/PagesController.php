<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // GUEST
    public function guestIndex(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    // MEMBER
    public function memberIndex(){
        return view('member-index');
    }

    // ADMIN
    public function adminIndex(){
        return view('admin-index');
    }

    public function viewProduct(){
        return view('view-product');
    }

    public function viewCategory(){
        return view('view-category');
    }
}
