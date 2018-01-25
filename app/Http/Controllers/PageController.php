<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
      return view('pages.home');
    }

    public function tours() {
      return view('pages.tours');
    }

    public function aboutUs() {
      return view('pages.about');
    }

    public function contactUs() {
      return view('pages.contact');
    }
}
