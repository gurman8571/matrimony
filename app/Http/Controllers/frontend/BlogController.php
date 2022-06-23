<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{



    public function masterdata()
    {
        $blogs=Blog::where('status',1)->where('is_approve',1)->get();
        return $blogs;
    }
    public function Index(Type $var = null)
    {
       $blogs=$this->masterdata();
       //$blogs->simplePaginate(15);
        //dd($blogs);
    return view('frontend.blogs.list',compact('blogs'));
    }

    public function Detail($id)
    {
       $blog=Blog::find($id);
       //$blogs->simplePaginate(15);
        //dd($blogs);
    return view('frontend.blogs.Detail',compact('blog'));
    }

}
