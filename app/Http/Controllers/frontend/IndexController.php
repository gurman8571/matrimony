<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Religion;
use App\Models\Caste;
use App\Models\Mothertongue;
use App\Models\Occupation;
use App\Models\User;

use App\Models\Country;
use App\Models\Image;
use App\Models\Story;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function masterdata()
    {
        $caste =   Caste::where('status',1)->OrderBy('name','ASC')->pluck('name','id');
        $religion = Religion::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name')    ;
        $language = Mothertongue::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
        $occupation = Occupation::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
        $country = Country::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
        $stories=   Story::where('ondisplay',1)->get();
//dd($stories);
        return view('index',compact('caste','religion','occupation','country','language','stories'));

    }

}
