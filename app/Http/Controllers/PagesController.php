<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function dashboard(){
        return view('pages.dashboard');
    } 

    public function monthly(){
        return view('pages.monthly');
    } 

    public function weekly(){
        return view('pages.weekly');
    } 

    public function g12(){
        return view('pages.g12');
    } 
}
