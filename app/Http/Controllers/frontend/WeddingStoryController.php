<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;

class WeddingStoryController extends Controller
{

    public function Create(request $req)
    {


        $story=new Story;
        $story->bride = $req->bride;
        $story->groom = $req->groom;
        $story->story = $req->story;
        $imagename = time().'-'.".".$req->image->extension();
       $req->image->move(public_path('wedding stories'), $imagename);
       $story->image = $imagename;

       $story->save();
       return redirect()->back();
    }
}

