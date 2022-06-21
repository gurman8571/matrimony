<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function Index()
    {


        $data =User::where('is_admin','0')
        ->where('status',1)
        ->wherenotNULL('religion_id')

        ->latest()->take(10)->get();
       //dd($data);
       return view('frontend.profiles',['data'=>$data]);
    }
}
