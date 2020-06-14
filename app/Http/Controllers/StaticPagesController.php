<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index() {
        return view('static-pages.home');
    }

    public function privacy() {
        return view('static-pages.privacy', ['sections' => config('privacy_text')]);
    }

    public function faq() {
        return view('static-pages.faq', ['faq' => config('faq')]);
    }
}
