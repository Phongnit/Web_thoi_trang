<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function Blog()
    {
        return view('Blog');
    }
    public function Contact()
    {
        return view('contact');
    }
    public function About()
    {
        return view('about');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
}
