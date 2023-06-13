<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\TourTable;
use App\Models\hotel;


class HomeController extends Controller
{

    public function index(){
        return view('home.userpage');

    }


    public function add(){
        return view('book');
    }



    public function about(){
        return view('home.about');
    }

        public function redirect()
    {
    $usertype=Auth::user()->usertype;
    if($usertype=='1'){
        return view('admin.home');
    }else{
        return view('home.userpage');
        }
    }

    public function tourtable(){
        $tourtable=tourtable::all();

        return view('package', compact('tourtable'));

    }

    public function hotel(){
        $hotel=hotel::all();

        return view('book', compact('hotel'));

    }


    public function activity(){


        return view('activity');
    }
   



  
}