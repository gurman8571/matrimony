<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Religion;
use App\Models\Caste;
use App\Models\Mothertongue;
use App\Models\Occupation;
use App\Models\User;

use App\Models\Country;
use App\Models\Image;
use App\Models\Like;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{

    //users count here

    public static function calculateuser()
    {
        $data=DB::table('users')
->where('is_admin',0)
->where('status',1)
->wherenotNULL('religion_id')
        ->count();
        return $data;

    }
//user all profiles

    // user search result

 public function Results(request $req)
    {
      $filter =   collect($req->except('_token'))->filter()->toArray();
       //filter the null points from search form as filter is a collection func so we converted it to collection then to array
        //dd($filter);
        //dd($req->all());




//dd($age);



        $data= User::where($filter)
        ->where('is_admin',0)
          ->where('status',1)
          ->wherenotNULL('religion_id')
           ->with('Likes')
           // ->whereBetween('age', [$age[0], $age[1]])
        ->get();





        $count=$data->count();

    //dd($data);



        $liked=Like::where('viewer_id',Auth::id())->pluck('profile_id')->toarray();


           return view('frontend.search.results',compact('data','count','liked'));
    }

    public function ProfileDetails ($id)
    {


        $data=User::where('id',$id)->get();
            return view('frontend.search.ProfileDetails',['data'=>$data]);

    }
    public function agefilter (request $req)
    {
        dd($req->start);
    $min=$req->v1;
    $max=$req->v2;
    $data=$req->data;
    $result=$data->whereBetween('age', [$min,$max]);


    }


public function Usergallery($id){

    $data=Image::where('user_id',$id)->pluck('image','id');
    return view('frontend.search.ProfileGallery',['data'=>$data]);

}
}
