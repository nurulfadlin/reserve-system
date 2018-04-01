<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Message;

class pagesController extends Controller
{

  public function index()
    {
      return Cache::remember('data',60,function(){
        return Message::all();
      });

    }

    public function getHome(){
  return view('welcome');
    }

    public function getAbout(){
      return view('about');
    }

    public function getContact(){
      return view('contact');
    }

}
