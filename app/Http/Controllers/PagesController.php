<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;

class PagesController extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function dashboard(){
		if (auth::check()) {
        return view('pages.dashboard');
		} else {
			return view('pages.login');
		}
    } 

    public function monthly(){
        return view('pages.monthly');
    } 

    public function weekly(){
        return view('pages.weekly');
    } 

    public function gtwelve(){
        return view('pages.gtwelve');
    } 

    public function downloads(){
        return view('pages.downloads');
    }

    public function cbranch(){
        return view('pages.cbranch');
    } 

    public function cgtwelve(){
        return view('pages.cgtwelve');
    } 

    public function cevent(){
        return view('pages.cevent');
    } 

    public function cpastor(){
        return view('pages.cpastor');
    } 

    public function cpreacher(){
        return view('pages.cpreacher');
    } 

    public function cuser(){
        return view('pages.cuser');
    } 

    public function cdownloads(){
        return view('pages.cdownloads');
    } 
}
